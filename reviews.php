<?php
session_start(); 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Reviews </title>
    <link rel="stylesheet" type="text/css" href="css/reviews.css"  />
    <meta charset="UTF-8">
</head>
<body>
    <?php include 'PHP/header.php'; ?> 
    
    <?php include 'PHP/searhBar.php'; ?>
    
    <div id="results">
        <div id="Info">
        <?php include 'PHP/parkInfo.php'; ?>
        </div>
        <div id="submitReview">
        <h3>Submit Review</h3>
            <?php include 'php/addReviews.php'; 
            if ($_POST['review'] != '' && $_POST['rating'] > 0){
                include 'PHP/insertReview.php';
                $parkID = $_GET['parkID'];
                header("Location: http://{$_SERVER['HTTP_HOST']}/Website/reviews.php?parkID=$parkID");
                ob_end_clean();
            }?>
        </div>
        <div id="reviews">
            <h2>Reviews</h2>
            <?php include 'PHP/reviewsFormat.php'; 
            createReview(); 
            ?>
        </div> 
        
        <?php include 'PHP/mapReview.php' ?>
    
    </div>
    
    <?php include 'PHP/footer.php' ?>
    
</body>
</html>