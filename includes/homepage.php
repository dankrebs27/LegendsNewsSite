<?php include( $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php" ) ?>

<?php
$mid1 = $data[0];
$mid2 = $data[1];
$undFeat = $data[2];
?>

<div id="navContain">
			
</div>

<!--Article/Event Containers-->
<div id="boxContain">
	<a href="index.html"><div id="ftContain"></div></a>
	<a href=".?action=viewArticle&amp;articleId=<?php echo $mid1->id?>"><div id="midArtContain"><?php echo htmlspecialchars( $mid1->title )?></div></a>
	<div id="eventContain">
		<div id="currentEvent"></div>
		<div class="upEvents"></div>
		<div class="upEvents"></div>
		<div class="upEvents"></div>
		<div class="upEvents"></div>
		<div class="upEvents"></div>
		<div class="upEvents"></div>
	</div>
	<a href=".?action=viewArticle&amp;articleId=<?php echo $mid2->id?>"><div id="midArtContain2"><?php echo htmlspecialchars( $mid2->title )?></div></a>
	<a href=".?action=viewArticle&amp;articleId=<?php echo $undFeat->id?>"><div id="undFeat"><?php echo htmlspecialchars( $undFeat->title )?></div></a>
		
	<?php include( $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ) ?>
		
</div>

<!--CREATE "MORE ARTICLES BUTTON"
	THIS WILL GET 10? MORE ATRICLES FROM THE DB
	RUN FOREACH LOOP THAT CREATES A BOX FOR EVERY ARTICLE THAT HAS BEEN FETCHED!
	DAMN IM SMART-->
