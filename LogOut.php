<!DOCTYPE html>
<?php
if (isset($_POST['exit'])){
    header("Location: http://{$_SERVER['HTTP_HOST']}/WebAssignment/homepage.php");
    exit();
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
            <form name="LogOut" method="post" class="logging">
                  <div class="container">
                      <?php
                      if(isset($_SESSION['isUser'])){
                          unset($_SESSION['isUser']);
                          echo "<h1>Logout Successfully.</h1>";
                      }else{
                          echo "<h1>Haven't logged in to be logged out</h1>";
                      }
                      ?>
                  </div>
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="submit" name="exit">Return Home</button>
                  </div>
                </form>
        <?php include 'PHP/footer.php'; 
        exit();
        ?>
    </body>
</html>

