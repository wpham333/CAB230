<!DOCTYPE html>
<html>
<head>
    <title>Web Applications</title>
    
    <link rel="stylesheet" type="text/css" href="css/homepage.css"  />

<meta charset="UTF-8">
</head>
<body>
    
        <?php include 'PHP/header.php'; ?>
    
    <header>
        <div id="Logo">
                <a href=""><img src="img/logo.png"></a> 
        </div>	

<!--         <form action="search.php?search=&Sorts=parkName&rating=0&suburb=" method="get" >
            <input id="searchBar" type="text" name="search" value="<?php //echo $_GET["search"] ?>" placeholder="Search: Keyword, Location.."> 
            <button class="searchButton"> Find </button> -->

        <div id="searchHead">
        <form action="search.php">
            <input id="searchText" type="text" name="search" value="<?php echo $_GET["search"] ?>" placeholder="Search: Keyword, Location.."> 
            <button class="searchButton"> Find </button>
            <div id="filters">
                <select id="selects" name="Sorts">
                    <option value="p.parkName">Sort by A-Z</option>
                    <option value="rating Desc" <?php if($_GET['Sorts'] == "rating Desc") {echo 'selected="select"';} ?>>Sort by ratings</option>
                </select>
                <select id="pickRatings" name="rating">
                    <?php 
                        for($i=0.00; $i<=5.0; $i++){
                            echo "<option value='$i'";
                            if (isset($_GET['rating']) && $_GET['rating'] == $i){
                                echo ' selected="select"';
                            }
                            if ($i == 0.00){
                            echo ">Show all</option>";  
                            } 
                            else {
                            echo ">$i</option>";   
                            }
                        }
                    ?>
                </select>
                <input id="suburb" type="text" value="<?php echo $_GET["suburb"]; ?>" name="suburb" placeholder="Suburb">
            </div>    
        </form>
        </div>


    </header>
    
    <div id="popularParks">
    
        <h1>Popular Parks</h1>
        
        <div id="imageHolder">
            <div class="img"><div class="overlay"></div>
            <a class="namesPark" href="#">ParkName</a>
            </div>
            <div class="img"><div class="overlay"></div>
            <a class="namesPark" href="#">ParkName</a>
            </div>
            <div class="img"><div class="overlay"></div>
            <a class="namesPark" href="#">ParkName</a>
            </div>
        </div>
    </div>
    
    <?php include 'PHP/footer.php' ?>
    
</body>
</html>