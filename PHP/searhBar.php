        <div id="searchHead">
        <form action="search.php">
            <input type="text" name="search" value="<?php echo $_GET["search"] ?>" placeholder="Search: Keyword, Location.."> 
            <button class="searchButton"> Find </button>
            <div id="filters">
                <select id="selects" name="Sorts">
                    <option value="parkName">Sort by A-Z</option>
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

<style>

#searchHead{
    width: 100%; 
    height: 200px; 
}

input[type=text] {
    position: absolute; 
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    font-style: italic;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 20px;
    margin-left: 25%; 
    margin-right: 25%; 
    margin-top: 80px;  
    width: 40%
}

input, select, textarea{
    color:dimgray;
}

input[type=text]:focus {
    outline: none;
    border-color: #9ecaed;
    box-shadow: 0 0 10px #9ecaed
}

#filters{
    position: absolute; 
    margin-top: 140px; 
    margin-left: 25%;
    width: 50%; 
    height: auto; 
}

#selects{
    font-family: arial;
    border-radius: 4px;
    font-size: 16px;
    padding: 10px 20px 12px 20px;
}
    
#pickRatings{
    font-family: arial;
    border-radius: 4px;
    margin-left: 5px; 
    width: 125px; 
    font-size: 16px;
    padding: 10px 20px 12px 20px;
}
    
#suburb {
    margin-top: 0px; 
    font-family: arial;
    border-radius: 4px;
    font-size: 16px;
    margin-left: 1%; 
    width: 150px; 
    padding: 10px 10px 12px 15px;       
}

.searchButton {
    background-color:#008CBA;
    -moz-border-radius:12px;
    -webkit-border-radius:12px;
    border-radius:12px;
    border:1px solid #008CBA;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:16px;
    padding:12px 31px;
    text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
    position: absolute; 
    margin-top: 80px;  
    margin-left: 66%; 
}

.searchButton:hover {
    background-color:#05759a;
    border:1px solid #05759a;
}

.searchButton:active{
    top:1px;
}
    
    @media screen and (max-width: 403px){
    #searchHead{
        height: 250px; 
    }
    #filters{
        margin-left: 6%;
    }
        
    input[type=text]{
            margin-left: 6%;
    }
    
        .searchButton{
            margin-left: 48%;
        }
}

</style>