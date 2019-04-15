<?php 

include 'PHP/pdo.php'; 


//        try {
//    $result = $pdo->query('SELECT parkID, parkName, street, suburb, picture '.
//        'FROM parks '.
//        'where parkID >='.$start.' and parkID <='.$limit.'');
//    $result->execute(); 
//} catch (PDOException $e) {
//    echo $e->getMessage();
//}

 $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
 $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 25 ? (int)$_GET['per-page'] : 25; 
 $search = $_GET['search'];
 $suburb = $_GET['suburb'];
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0; 

$sortBy = $_GET['Sorts']; 

    $above = $_GET['rating'];

    $rating; 

    if ($above >= 1){
      $rating = 'and rating >='.$above; 
    } else {
      $rating = ''; 
    }

    if ($sortBy == "rating Desc"){
        $sortBy = "rating Desc";
    } else {
        $sortBy = "p.parkName"; 
    }


    $result = $pdo->query("SELECT p.parkID, p.parkName, p.street, p.suburb, p.picture, ifnull(tabl2.rating,0) as rating
        FROM parks p 
        Left join (select parkID, avg(rating) as rating from reviews group by parkID) as tabl2 on p.parkID = tabl2.parkID
    where p.parkName Like '%{$search}%' and p.suburb Like '%{$suburb}%' $rating
    order by $sortBy
        LIMIT {$start}, {$perPage}
        ");
    $result->execute();

  // if ($suburb != ''){
  //   $result = $pdo->query("SELECT p.parkID, p.parkName, p.street, p.suburb, p.picture, ifnull(tabl2.rating,0) as rating
  //       FROM parks p 
  //       Left join (select parkID, avg(rating) as rating from reviews group by parkID) as tabl2 on p.parkID = tabl2.parkID
  //       where p.parkName Like '%{$search}%' and p.suburb Like '%{$suburb}%'
  //       LIMIT {$start}, {$perPage}
  //       ");
  //   $result->execute();
  // }
    // $result = $pdo->query("SELECT p.parkID, p.parkName, p.street, p.suburb, p.picture, ifnull(tabl2.rating,0) as rating
    //     FROM parks p 
    //     Left join (select parkID, avg(rating) as rating from reviews group by parkID) as tabl2 on p.parkID = tabl2.parkID
    // where p.parkName Like '%{$search}%'
    //     LIMIT {$start}, {$perPage}
    //     ");
    // $result->execute();

$result = $result->fetchALL(PDO::FETCH_ASSOC);
   
   foreach ($result as $p){ 
    $parkName = $p["parkName"];
    $street = $p["street"];
    $suburb = $p["suburb"];
               echo '<div id="eachResults">
       <table>
           <tr>
               <td><div id="images" style="background-image: url(img/'.$p["picture"].'); background-size: 150px 140px;"></div></td> <td><a id="parkName" href="reviews.php?parkID='.$p['parkID'].'">'.ucfirst(strtolower($parkName)).'</a><br><label id="ratings">'.number_format($p["rating"],2,'.','').'</label></td>
           </tr>
       </table>
       <p class="otherInfo">'.ucfirst(strtolower($street)).' '.ucfirst(strtolower($suburb)).'</p>
       <div class="otherInfo"> <p>SHiet nigga make as much comment as u wnat </p></div>
       </div>'; 
   }  
?>


