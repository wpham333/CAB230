<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $errors = array();
        if (isset($_POST['firstname'])) {
            require 'PHP/validate.php';
            validateName($errors, $_POST, 'firstname');
            validateName($errors, $_POST, 'lastname');
            validateGender($errors, $_POST, 'gender');
            validateEmail($errors, $_POST, 'email');
            validatePassword($errors, $_POST, 'pass');
            validateConfirm($errors, $_POST, 'cpass');
            validateZip($errors, $_POST, 'code');
            validateDate($errors, $_POST, 'day', 'month', 'year');
            validateBio($errors, $_POST, 'bio');

            if ($errors){
                // redisplay the form
                include 'PHP/form.php';
            } else {
                include 'PHP/insertData.php';
                header("Location: http://{$_SERVER['HTTP_HOST']}/WebAssignment/LogIn.php");
            }
        } else {
            include 'PHP/form.php';
        }
        ?>
    </body>
</html>
