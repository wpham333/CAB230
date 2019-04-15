<?php
session_start();
$id = $_SESSION['userID'];
?>
    <script type="text/javascript" src="javascript/nav.js"></script>

<div class="topNavigation" id="nav">
        <div class="navL" id="container">
            <a class="topNav" onclick="expandNav()" href="#Menu">Menu</a>
            <a href="homepage.php">Home</a>
            <a href="search.php">Write a Review</a>
        </div>
            <?php if(isset($_SESSION['isUser'])): ?>
              <a class="link" id="logOff" href="logOut.php" style="text-decoration:none">Logout</a>
            <?php else: ?>
              <a class="link" id="logIn" href="logIn.php" style="text-decoration:none">Log in</a>
            <?php endif; ?>
            <?php if(isset($_SESSION['isUser'])): ?>
            <a id="signUp" href="profile.php?memberID=<?php echo $id ?>">My Profile</a>
            <?php else: ?>
            <a id="signUp" href="SignUpNew.php">Sign Up</a>
            <?php endif; ?>
    </div>  

<style>

#nav {
    overflow: hidden; 
	width: 100%;
	height: auto;
	background-color: rgba(0,0,0,0.5);
    color: rgba(0, 173, 0, 0.5);
	position: fixed;
	top: 0; 
    padding: 10px; 
    z-index: 10;
}

.navL {
    margin-left: 5%;
}

.navL a {
	font-size: 17px;
	color: white;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
    float: left;
	list-style-type: none;
	padding-right: 25px; 
    padding: 10px; 
    text-align: center; 
    display: block; 
}


#nav a:hover {
	color: #ff6868;
}

.navL a.topNav {
    display: none; 
}

#logIn{
    font-size: 17px;
	color: white;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
	list-style-type: none;
	padding-right: 25px; 
    padding: 10px; 
    text-align: center; 
    display: block; 
    float: right;
    margin-right: 30px; 
    border: solid 1px white; 
    border-radius: 10%;
}
    
#logOff{
    font-size: 17px;
	color: white;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
	list-style-type: none;
	padding-right: 25px; 
    padding: 10px; 
    text-align: center; 
    display: block; 
    float: right;
    margin-right: 30px; 
    border: solid 1px white; 
    border-radius: 10%;
}

#signUp{
    font-size: 17px;
	color: white;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
	list-style-type: none;
	padding-right: 25px; 
    padding: 10px; 
    text-align: center; 
    display: block; 
    float: right;
    margin-right: 30px; 
    border: solid 1px white; 
    border-radius: 10%;
}



@media screen and (max-width: 600px){
    
    #nav {
        padding: 0; 
    }   
    
    .navL a.topNav{
        display: block;
    }
    
    .navL.responsive a.topNav{
        color: #ff6868;
    }
    
    .navL a{
        display: none; 
    } 
    
    .navL.responsive {position: relative;}
    .navL.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
    
    #signUp{
        margin-right: 5px; 
    }

</style>