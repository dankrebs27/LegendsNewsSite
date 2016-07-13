<?php 
function setArticles(){
	$mid1 = $data[0];
	$mid2 = $data[1];
	$undFeat = $data[2];
}

switch ( $position ){
	  
	case 'top':
		$data = Article::getByPosition( $position , 3 );
		setArticles();
    break;
	
	case 'jungle':
		$data = Article::getByPosition( $position , 3 );
		setArticles();
    break;
	
	case 'mid':
		$data = Article::getByPosition( $position , 3 );
		setArticles();
    break;
	
	case 'support':
		$data = Article::getByPosition( $position , 3 );
		setArticles();
    break;
	
	case 'adc':
		$data = Article::getByPosition( $position , 3 );
		setArticles();
    break;
}
?>

<?php include( $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php" ) ?>

<div id="navContain">
			
</div>

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
		
</div>
	
<?php include( $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php" ) ?>