<html>
    <head>
        <link href="css/signup.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include 'PHP/header.php'; 
        ?> 
        <form name="Register" method="post" class="special" action="SignUpNew.php">
            <div class="signupheader">
                <img src="img/signUp/Sign%20Up.png" alt="SignUpLogo">
            </div>
            <div class="form-group">
                <input type="text" name="firstname" placeholder="First Name" value="<?php
                    if(isset($_POST['firstname'])) {
                        echo htmlspecialchars($_POST['firstname']);
                    }
                ?>">
                <span id="firstMissing" class="error-first">
                    <?php
                        if (isset($errors['firstname'])) {
                            echo $errors['firstname'];
                        }
                    ?>
                </span>
                <input type="text" name="lastname" placeholder="Last Name" value="<?php
                    if(isset($_POST['lastname'])) {
                        echo htmlspecialchars($_POST['lastname']);
                    }
                ?>">
                <span id="lastMissing" class="error-last">
                    <?php
                        if (isset($errors['lastname'])) {
                            echo $errors['lastname'];
                        }
                    ?>
                </span>
            </div>
            <div class="malefemale">
                <input type="radio" name="gender" value="Male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked="checked"';?>> Male
                
                <input type="radio" name="gender" value="Female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked="checked"';?>> Female
                
                <span id="genderMissing" class="error-gender">
                    <?php
                        if (isset($errors['gender'])) {
                            echo $errors['gender'];
                        }
                    ?>
                </span>
            </div>
            <div class="form-group">
                <span id="emailMissing" class="error-email">
                    <?php
                        if (isset($errors['email'])) {
                            echo $errors['email'];
                        }
                    ?>
                </span>
                <input type="text" name="email" placeholder="Email" value="<?php
                    if(isset($_POST['email'])) {
                        echo htmlspecialchars($_POST['email']);
                    }
                ?>">
            </div>
            <div class="form-group">
                <span id="passwordMissing" class="error-password"><?php
                        if (isset($errors['cpass'])) {
                            echo $errors['cpass'];
                        }
                    ?>
                </span>
                <input type="password" name="pass" placeholder="Password" value="<?php
                    if(isset($_POST['pass'])) {
                        echo htmlspecialchars($_POST['pass']);
                    }
                ?>">
            </div>
            <div class="form-group">
                <input type="password" name="cpass" placeholder="Confirm Password" value="<?php
                    if(isset($_POST['cpass'])) {
                        echo htmlspecialchars($_POST['cpass']);
                    }
                ?>">
            </div>
            <div class="form-group">
                <span id="codeMissing" class="error-code"><?php
                        if (isset($errors['code'])) {
                            echo $errors['code'];
                        }
                    ?>
                </span>
                <input type="zipcode" name="code" class="required" placeholder="ZIP Code" value="<?php
                    if(isset($_POST['code'])) {
                        echo htmlspecialchars($_POST['code']);
                    }
                ?>">
            </div>
            <div class="form-group">
                <p>
                    <label for="dateofbirth">Date Of Birth</label>
                    <span id="dateMissing" class="error-date"><?php
                        if (isset($errors['date'])) {
                            echo $errors['date'];
                        }
                    ?></span>
                </p>
                <select name="day">
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
                <select name="month">
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
                <select name="year">
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
            <div class="form-group">
            Short bio of yourself: 
                <textarea id="bioForm" name="bio" value="<?php
                    if(isset($_POST['bio'])) {
                        echo htmlspecialchars($_POST['bio']);
                    }
                ?>">
               </textarea> <span id="bioError" class="error-first">
                    <?php
                        if (isset($errors['bio'])) {
                            echo $errors['bio'];
                        }
                    ?>
            </div>
            <div class="form-group">
                <input type="submit" name="signup">
            </div>
            <br>
        </form>
        <div id="tree_image">
            <img src="img/signUp/tree.png" alt="Tree_Logo" width="500" height="350">
        </div>
		<?php include 'PHP/footer.php'; ?>
    </body>
</html>