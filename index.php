<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/cs.css"  />

<title>Web Applications</title>

<meta charset="UTF-8">

</head>
<body>
    
    <script type="text/javascript" src="javascript/nav.js"></script>
    
<div id="Wrapper">
	<header>
        <div id="Logo">
                <a href=""><img src="img/logo.png"></a> 
        </div>	
        <form action="search.php">
            <input type="text" name="search" placeholder="Search: Keyword, Location.."> 
            <button class="searchButton"> Find </button>
            <a id="advancedSearch">advanced search</a>
        </form>
        <div id="border">
        </div>
    </header>

<?php include 'PHP/header.php'; ?> 
    
    <content>
        <div id="popularParks">
            <div id="popularTitle"><h1>Popular Parks</h1></div>
                <div id="imageHolder">
                <div id="first" class="img" style="background-image: url(img/popular/botanic.jpg);"><div class="overlay"></div>
                    <a class="namesPark" href="Sample.php">Botanic Bar</a>
                </div>
                <div id="second" class="img" style="background-image: url(img/popular/boorabin.jpg);"><div class="overlay"></div>
                    <a class="namesPark" href="#">Boorabin</a>
                </div>
                <div id="third" class="img" style="background-image: url(img/popular/bulimba.jpg);"><div class="overlay"></div>
                    <a class="namesPark" href="#">Bulimba</a>
                </div>
            </div>
        </div>
    </content>

    <footer>
        <div id="top">
            <a href="index.php">Home</a>
            <a href="SignUpNew.php">Registration</a>
            <a href="Sample.php">Write a review</a>
        </div>
        <div id="bottom">
            <p>CopyRight @ 2017 Green View</p>
        </div>
    </footer>
</div>
</body>

</html>