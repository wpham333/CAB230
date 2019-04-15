<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
    
    <link rel="stylesheet" type="text/css" href="css/editProfile.css"  />
    
    <meta charset="UTF-8">
    
</head>
<body>

    <?php include 'PHP/header.php'; ?>
    
    <div id="wrapper">
        <div id="details">
            <div class="info">
                <?php echo '<img  src="img/profile/no_image.png">';
                    echo '<h1> name of Person</h1>';
                ?> 
        </div>
        </div>
        <div id="editInfo" >
        <form>
            
            <div class="editDetails">
            <label>Bio:</label><br>
            <textarea></textarea><br>
            </div>
            
            <div class="editDetails">
            <label>First Name:</label><br>
            <input type="text" name="firstname"><br>
            </div>
            
            <div class="editDetails">
            <label>Last Name:</label><br>
            <input type="text" name="lastname"><br>
            </div>
            
            <div class="editDetails">
            <label>email:</label><br>
            <input type="email" name="lastname"><br>
            </div>
            
            <div class="editDetails">
            <label>new password:</label><br>
            <input type="password" name="lastname"><br>
            </div>
            
             <div class="editDetails">
            <label>confirm password:</label><br>
            <input type="password" name="lastname"><br>
            </div>
            
            <div class="editDetails">
            <label>Date Of Birth:</label><br>
            <select name="day" class="dob">
                    <option value="-1" selected>Day</option>
                    <?php
                        for($i=1;$i<32;$i++){
                            echo "<option value=$i";
                            if(isset($_POST['day']) && $_POST['day'] == $i){ 
                                echo ' selected= "selected"';
                            }
                            echo ">$i</option>";
                        }
                    ?>
                </select>
                <select name="month" class="dob">
                    <option value="-1" selected>Month</option>
                    <option value="1" <?php include 'January.php' ?>>January</option>
                    <option value="2" <?php include 'Febuary.php' ?>>Febuary</option>
                    <option value="3" <?php include 'March.php' ?>>March</option>
                    <option value="4" <?php include 'April.php' ?>>April</option>
                    <option value="5" <?php include 'May.php' ?>>May</option>
                    <option value="6" <?php include 'June.php' ?>>June</option>
                    <option value="7" <?php include 'July.php' ?>>July</option>
                    <option value="8" <?php include 'August.php' ?>>August</option>
                    <option value="9" <?php include 'September.php' ?>>September</option>
                    <option value="10" <?php include 'October.php' ?>>October</option>
                    <option value="11" <?php include 'November.php' ?>>November</option>
                    <option value="12" <?php include 'December.php' ?>>December</option>
                </select>
                <select name="year" class="dob">
                    <option value="-1" selected>Year</option>
                    <?php
                        for($i=2017; $i>1989;$i--){
                            echo "<option value=$i";
                            if(isset($_POST['year']) && $_POST['year'] == $i){ 
                                echo ' selected= "selected"';
                            }
                            echo ">$i</option>";
                        }
                    ?>
                </select>
            </div>
        
        </form>
    </div>
    </div>
    
    <?php include 'PHP/footer.php'; ?>
    
</body>
</html>