<!DOCTYPE html>
<?php
if (isset($_POST['sub'])){
    header("Location: http://{$_SERVER['HTTP_HOST']}/WebAssignment/LogIn.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include 'PHP/header.php';?>
            <form name="FailLogIn" method="post" class="logging">
                  <div class="container">
                    <label><b>Login Invalid</b></label>
                  </div>
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="submit" name="sub">Try Again</button>
                  </div>
                </form>
        <?php include 'PHP/footer.php';?>
    </body>
</html>
