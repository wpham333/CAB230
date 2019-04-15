<?php 

include 'pdo.php'; 

, lastName, email,

$result= $pdo->prepare("SELECT memberID from members 
	where firstName = $_POST['firstname']
	and where lastName = $_POST['lastname']
	and where email = $_POST['email']
	");

$result->execute();

$i; 

foreach ($result as $k) {
	$i = $k['memberID'];
}

function returnMem(){
	return $i
}

?>