<?php 

include 'pdo.php'; 

$memberID = $_GET['memberID']; 

	
	$info = $pdo->query("SELECT memberID, firstName, lastName, bio
		From members 
		where memberID = $memberID
		");


	foreach ($info as $i) {
	echo '<img  src="img/profile/no_image.png">';
    echo '<h1>'.$i['firstName'].' '.$i['lastName'].'</h1>';
    echo '<p id="bio">'.$i['bio'].'</p>';
	}

?> 