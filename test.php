<?php 

include 'PHP/pdo.php';

 $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 

echo $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 25 ? (int)$_GET['per-page'] : 25; 


$start = ($page > 1) ? ($page * $perPage) - $perPage : 0; 

    $result = $pdo->query("SELECT SQL_CALC_FOUND_ROWS parkID, parkName, street, suburb, picture
        FROM parks
        LIMIT {$start}, {$perPage}
        ");
    $result->execute();

$result = $result->fetchALL(PDO::FETCH_ASSOC);


$total = $pdo->query("SELECT FOUND_ROWS() as total")->fetch()['total']; 

$pages = ceil($total/$perPage); 

?>
<?php foreach($result as $r){
    echo '<h4>'.$r["parkID"].') '.$r['parkName'].'</h4>';
}
    
?>

<!--
<?php         echo '<a href="?page=previous">&laquo;</a>';
        for($i = $start; $i<= $limit; $i++){
                echo '<a href="?page='.$i; if($page === $i){echo 'selected';} echo '" value="'.$i.'" class="nums">'.$i.'</a>';    
        }
        echo '<a href="?page=next">&raquo;</a>';
        ?>
-->
<html>
<head>
</head>
    
    <body>
    
    <div class="pagination" > 
        <h5>the num</h5>
        <?php 
        for($i = 1; $i<= $pages; $i++): ?>
        <a href="?page=<?php echo $i; ?> <?php if($page === $i){echo 'selected';} ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        </div>
    
    </body>


</html>


