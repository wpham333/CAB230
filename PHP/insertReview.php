<?php
include 'pdo.php';
$date = date('Y-m-d H:i:s'); 
$test = $_POST['review'];
$insert = $pdo->prepare("INSERT INTO reviews (parkID, memberID,comments,dateOfReview,rating)
	VALUES (:parkid,1,:comment,:dat,:rates)");
$insert->bindValue(':parkid',$_GET['parkID']);
$insert->bindValue(':comment',$_POST['review']);
$insert->bindValue(':dat',$date);
$insert->bindValue(':rates',$_POST['rating']);
$insert->execute();    
?>