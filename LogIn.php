<!DOCTYPE html>
<?php

if (isset($_POST['sub'])){
// validate and process posted username and password here
    include 'PHP/validate.php';
    if(checkLogin($_POST['email'], $_POST['pass'])){
        session_start();
        $_SESSION['isUser'] = true;
        $email = $_POST['email'];
        $id; 
        include 'php/pdo.php';
        $test=$pdo->query("SELECT memberID from members");
        foreach ($test as $i) {
            $id = $i['memberID'];
        }
        header("Location: http://{$_SERVER['HTTP_HOST']}/Website/profile.php?memberID=$id");
        echo $_SESSION['userID'] = $id; 
        exit();
    }else{
        header("Location: http://{$_SERVER['HTTP_HOST']}/WebAssignment/FailLogIn.php");
        exit();
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="validation.js"></script>
        <script type="text/javascript" src="javascript/nav.js"></script>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include 'PHP/header.php';?>
            <form name="LogIn" method="post" class="logging">
                <div class="container">
                    <label><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email">
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass">
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="submit" name="sub">Login</button>
                </div>
                </form>
        <?php 
		include 'PHP/footer.php'; 
        exit();
        ?>
    </body>
</html>
