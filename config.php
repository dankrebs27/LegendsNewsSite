<?php
ini_set( "display_errors", true );
date_default_timezone_set( "America/Chicago" );
define( "DB_DSN", "mysql:host=mysql.dannykrebs.com;dbname=lol_articles" );
define( "DB_USERNAME", "bigmanoncampus" );
define( "DB_PASSWORD", "Molly1717" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );
 
function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}
 
set_exception_handler( 'handleException' );
?>