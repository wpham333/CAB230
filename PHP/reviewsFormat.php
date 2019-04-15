

<?php 

function createReview(){
    
    include 'PHP/pdo.php';
    
    $parkID = $_GET['parkID'];
    
    $reviews = $pdo->query("SELECT reviews.parkID, reviews.memberID, reviews.comments,reviews.dateOfReview, reviews.rating, members.firstName, members.lastName
From reviews left join members on reviews.memberID = members.memberID where reviews.parkID = {$parkID};");

    foreach ($reviews as $r) {
                echo '
            <table>
                <tr>
                    <td> <div id="dp"></div><a href="Profile.php?memberID='.$r["memberID"].'"><b>'.$r["firstName"].$r["lastName"].'</b></a></td>
                </tr>
                <tr>
                    <td>'.$r["dateOfReview"].'</td>
                </tr>
                <tr>
                    <td>
                     Rated <div id="smalRating">'.$r["rating"].'/5.0</div>
                    </td>
                </tr>
                <tr>
                    <td><p>'.$r["comments"].'</p></td>
                </tr>
            </table>';
    }
}

?>
