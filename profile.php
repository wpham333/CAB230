<!DOCTYPE html>
<html>
<head>
	<title>My profile</title>
    
    <link rel="stylesheet" type="text/css" href="css/profile.css"  />
    
    <meta charset="UTF-8">
</head>
<body>
    
    <?php include 'PHP/header.php'; ?>
    
    
    <div id="details">
            <div class="info">
            <?php include 'PHP/infoProfile.php';?>
        </div>
    </div>
    <div id="reviews">
        <h1>Reviews</h1>
        <?php include 'PHP/membersReview.php'; ?>
    </div>
    
    <?php include 'PHP/footer.php'; ?>

</body>
</html>