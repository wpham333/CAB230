<?php
$password = array();
    function validateEmail(&$errors, $field_list, $field_name) {
		include 'PHP/pdo.php';
		$query = $pdo->prepare("SELECT email FROM members WHERE email = :email");
		$query->bindValue(':email', $field_list[$field_name]);
		$query->execute();
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
        if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
            $errors[$field_name] = 'It\'s empty!';
        } else if (!preg_match($pattern, $field_list[$field_name])) {
            $errors[$field_name] = 'Invalid';
        } else if ($query->rowCount() > 0){
			$errors[$field_name] = 'This Email Exist';
		}
    }
    function validateName(&$errors, $field_list, $field_name){
        $pattern = '/^([a-zA-Z])+/';
        if (!isset($field_list[$field_name])|| empty($field_list[$field_name])) {
            $errors[$field_name] = 'It\'s empty!';
        }
        else if(!preg_match($pattern, $field_list[$field_name])){
            $errors[$field_name] = 'Letters only';
        }
    }

    function validateBio(&$errors, $field_list, $field_name){
        $pattern = '/^([a-zA-Z])+/';
        if(!preg_match($pattern, $field_list[$field_name])){
            $errors[$field_name] = 'Letters only';
        }
    }

    function validateGender(&$errors, $field_list, $field_name){
        if(!isset($field_list[$field_name])|| empty($field_list[$field_name])){
            $errors[$field_name] = 'Please Choose Your Gender!';
        }
    }
    function validatePassword(&$errors, $field_list, $field_name){
        if(!isset($field_list[$field_name])|| empty($field_list[$field_name])){
            $errors[$field_name] = 'It\'s empty!';
        }else{
            $GLOBALS['$password'] = $field_list[$field_name];
        }
    }
    function validateConfirm(&$errors, $field_list, $field_name){
        if(!isset($field_list[$field_name])||empty($field_list[$field_name])){
            $errors[$field_name] = 'Confirm is empty!';
        }
        else if (empty($GLOBALS['$password'])){
            $errors[$field_name] = 'Can\'t compare (need password)';
        }
        else if (strcmp($GLOBALS['$password'], $field_list[$field_name]) !==0){
            $errors[$field_name] = 'Not the same';
        }
    }
    function validateZip(&$errors, $field_list, $field_name){
        $pattern = '/^([a-zA-Z])+/';
        $numb = '/^[0-9]{4}$/';
        if(!isset($field_list[$field_name])||empty($field_list[$field_name])){
            $errors[$field_name] = 'It\'s empty!';
        }
        else if (preg_match($pattern,$field_list[$field_name])){
            $errors[$field_name] = 'Invalid (number please)';
        }
        else if (!preg_match($numb,$field_list[$field_name])){
            $errors[$field_name] = 'Invalid (4 digits)';
        }
    }
    function validateDate(&$errors, $field_list, $field_name, $field_nametwo, $field_namethree){
        $day = $field_list[$field_name];
        $month = $field_list[$field_nametwo];
        $year = $field_list[$field_namethree];
        if(($day ==-1 && $month == -1 && $year == -1)) {
            $errors['date'] = 'It\'s empty!';
        }
        else if($day == -1 && $month != -1 && $year != -1){
            $errors['date'] = 'Day is missing';
        }
        else if($month == -1 && $year != -1 && $day != -1){
            $errors['date'] = 'Month is missing';
        }
        else if($year == -1 && $day != -1 && $month != -1){
            $errors['date'] = 'Year is missing';
        }
        else if(($year != -1) && ($day == -1) && ($month == -1)){
            $errors['date'] = 'Day and Month is missing';
        }
        else if(($month != -1) && ($day == -1) && ($year == -1)){
            $errors['date'] = 'Day and Year is missing';
        }
        else if(($day != -1) && ($month == -1) && ($year == -1)){
            $errors['date'] = 'Month and Year is missing';
        }
        else if(!checkdate($month,$day,$year)){
            $errors['date'] = 'Invalid date of birth';
        }
    }
    function checkLogin($email,$password){
        include 'PHP/pdo.php';
        //Might have to change the users, user_email and user_pass to your according
        $sqlquery = $pdo->prepare("SELECT * FROM members WHERE email = :email AND password = SHA2(CONCAT(:password, salt), 0)");
        $sqlquery->bindValue(':email', $email);
        $sqlquery->bindValue(':password', $password);
        $sqlquery->execute();
        return $sqlquery->rowCount() > 0;    
    }

?>