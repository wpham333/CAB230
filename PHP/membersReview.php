<?php 

    include 'pdo.php'; 

    $memberID = $_GET['memberID']; 

     $reviews = $pdo->query("SELECT reviews.parkID, reviews.memberID, reviews.comments,reviews.dateOfReview, reviews.rating, parks.parkName, parks.street, parks.suburb
From reviews left join parks on reviews.parkID = parks.parkID where memberID = $memberID");
        
    foreach ($reviews as $r) {
    echo '<div id="eachResults">
        <table>
            <tr>
                <td><div id="images"></div></td> <td><label id="parkName">'.ucfirst(strtolower($r["parkName"])).'</label><br><label id="ratings">'.$r["rating"].'</label></td>
            </tr>
        </table>
        <p class="otherInfo">'.ucfirst(strtolower($r["street"])).' '.ucfirst(strtolower($r["suburb"])).'</p>
        <div class="otherInfo"> <p>'.$r["comments"].'</p></div>
        </div>';  
     } 
?>