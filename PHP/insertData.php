<?php
include 'PHP/pdo.php';
//Might have to change the users, user_email and user_pass to your according

$sqlquery = $pdo->prepare("INSERT INTO members (firstName, lastName, gender, email, password, zipcode, DOB, salt,bio) VALUES (:firstname,:lastname,:gender,:email, SHA2(CONCAT(:cpassword, '4c2203665cea5'), 0), :zcode, :year'.-.':month'.-.':day ,'4c2203665cea5',:bioo)");

$sqlquery->bindValue(':firstname', $_POST['firstname']);
$sqlquery->bindValue(':lastname', $_POST['lastname']);
$sqlquery->bindValue(':gender', $_POST['gender']);
$sqlquery->bindValue(':email', $_POST['email']);
$sqlquery->bindValue(':cpassword', $_POST['cpass']);
$sqlquery->bindValue(':zcode', $_POST['code']);
$sqlquery->bindValue(':year', $_POST['year']);
$sqlquery->bindValue(':month', $_POST['month']);
$sqlquery->bindValue(':day', $_POST['day']);
$sqlquery->bindValue(':bioo', $_POST['bio']);

$sqlquery->execute();
?>