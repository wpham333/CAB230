<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/search.css"  />
    
<link rel="stylesheet" type="text/css" href="css/pageNum.css"  />

<title>Web Applications</title>

<meta charset="UTF-8">

</head>
<body>
    
<div id="Wrapper">

    <?php include 'PHP/header.php'; ?> 
    
    <?php include 'PHP/searhBar.php'; ?> 
    
    <div id="results">
    
    <?php include 'PHP/eachResults.php'; 
    ?>
        
    </div>
    
    <?php include 'PHP/numResults.php'; ?>
    
    <?php include 'PHP/map.php'; ?> 

    <?php include 'PHP/footer.php'; ?>

</div>
</body>

</html>