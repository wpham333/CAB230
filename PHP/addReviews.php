
<script type="text/javascript">
	function writeReview(){
			window.alert("Please login to write a review");
}
</script>

<!--     <div class="cc-selector">
        <input id="visa" type="radio" name="credit-card" value="visa" />
        <label class="drinkcard-cc visa" for="visa"></label>
        <input id="mastercard" type="radio" name="credit-card" value="mastercard" />
        <label class="drinkcard-cc mastercard"for="mastercard"></label>
    </div> -->

<?php $parkID = $_GET['parkID'] ?> 

<?php 

if ($_SESSION['isUser'] == true){
	echo '<form action="reviews.php?parkID='.$parkID.'" method="post" name="reviewForm">';
	echo '<div class="cc-selector">';
	for ($i=1.00,$j =1; $i <= 5.00; $i++,$j++) { 
		echo '<input id="a'.$j.'" class="radio" type="radio" name="rating" value="'.$i.'"/>';
		echo '<label class="ratingNum" for="a'.$j.'">'.$j.'</label>';
	}
	echo '</div>';
	echo '<textarea id="comment" name="review" placeholder="Write about your experience" 
	value="<?php if(isset($_POST["review"])){
		echo htmlspecialchars($_POST["review"]);
		}></textarea>
	<input id="submit" type="submit" name="sbummision">
</form>';
} else {
	echo '<button id="alertButton" onclick="writeReview()">Write a review</button>';
}
?>
