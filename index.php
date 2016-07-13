<?php
 
require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$position = isset( $_GET['position'] ) ? $_GET['position'] : "";
 
switch ( $action ) {

	case 'position':
		position();
    break;
	
	case 'viewArticle':
		viewArticle();
    break;
	
  default:
    homepage();
}
 
/* Load more articles
function archive() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Article Archive | Widget News";
  require( TEMPLATE_PATH . "/archive.php" );
}*/

function position() {
  $pageTitle = $position . "News";

  require( $_SERVER['DOCUMENT_ROOT'] . "/includes/position.php" );
}

function homepage() {
  $data = Article::getList( 3 );
  $pageTitle = "Legends";
  require( $_SERVER['DOCUMENT_ROOT'] . "/includes/homepage.php" );
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }
  $data = Article::getById( (int)$_GET["articleId"] );
  //$results['pageTitle'] = $results['article']->title . " | Widget News";
  require( $_SERVER['DOCUMENT_ROOT'] . "/includes/viewArticle.php" );
}
 
?>