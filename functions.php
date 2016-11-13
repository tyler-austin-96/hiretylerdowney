<?php
function oneReview($fileName) {
	
	list($reviewContent, $freshness, $critic, $publication) = file($fileName);

	echo "<div class='review'> \n <p>";
	echo "<img class='symbol' src='images/".$freshness.".gif' alt=".$freshness." />";
	echo "<q>".$reviewContent."</q> \n </p> \n </div>";
	echo "<div class='critic'> \n <p>";
	echo "<img class='criticSymbol' src='images/critic.gif' alt='Critic' /> ".$critic." <br/>";	
	echo $publication."\n </p> </div>";
	
}
?>