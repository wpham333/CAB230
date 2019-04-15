
<?php include 'pdo.php'; 

    $parkID = $_GET['parkID'];

    $result = $pdo->query("SELECT p.parkID, p.parkName, p.street, p.suburb, ifnull(tabl2.rating,0) as rating
        FROM parks p 
        Left join (select parkID, avg(rating) as rating from reviews group by parkID) as tabl2 on p.parkID = tabl2.parkID
    where p.parkID = $parkID
    	"); 
foreach ($result as $info) {
	echo '	<ul>
                <li id="name">'.ucfirst(strtolower($info["parkName"])).'</li>
                <li id="rating">'.number_format($info["rating"],2,'.','').'</li>
                <li id="location">'.ucfirst(strtolower($info["street"])).' '.ucfirst(strtolower($info["suburb"])).'</li>
            </ul>';
}

?>

