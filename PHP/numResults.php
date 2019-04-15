
<div id="numPages">
    
    <div id="container1">

	<?php 

	include 'pdo.php';   
        
         $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 

        $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 25 ? (int)$_GET['per-page'] : 25; 

        $search = $_GET['search'];


$start = ($page > 1) ? ($page * $perPage) - $perPage : 0; 

	 $total = $pdo->query("SELECT COUNT(parkID) as total, parkName FROM parks where parkName Like '%{$search}%'")->fetch()['total'];
        $pages = ceil($total/$perPage); 
        $limit = 20;
        $start = 1; 
        ?>

            <script type="text/javascript">
        
            var limit = <?php echo json_encode($limit); ?>;
            var start = <?php echo json_encode($start); ?>;
            var page = <?php echo json_encode($page); ?>;
            var pages = <?php echo json_encode($pages); ?>;
            
            function doNums(first,last){
                for (var i = first; i<= last; i++){
                document.write('<a href="?page=' + i +'"'); 
                if(page === i){
                    document.write('id="selected"');
                } 
                document.write('" class="nums">'+i+'</a>');
                if (i >= pages){
                    break;
                    }
            }   
            }            
            for (var j = 1; j < 90; j++) {
                 if (page > 20 * j){
                    limit+= 20;
                    start+= 20; 
                }
            }
            var nextSet = limit+1;     
            var lastSet = start-1; 
                
            document.write('<a href="?page='+lastSet +'" onclick="previous()">&laquo;</a>');
            
                doNums(start,limit);
            
            document.write('<a href="?page='+nextSet +'" onclick="next()">&raquo;</a>');

        </script>
    
        
        </div>

	<style type="text/css">
	
	#numPages{
		background-color: white; 
		border-radius: 5px; 
		margin-left: 7%;
		margin-top: 40px; 
		padding: 10px; 
		width: 59%; 	
	}
        
        #container1 {
            margin-left: -1%; 
        }
        

	#container1 a{ 
		text-decoration: none;
		color: skyblue; 
		font-family: arial; 
		padding: 11px 10px;
	}

    #container1 a:hover{
		background-color: darkgrey; 
	}
        
        #selected{
            background-color: #84D063;
        }
    

	</style>

</div>