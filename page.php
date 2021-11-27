<?php

if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' );

if( isset( $_GET[ 'page' ] ) && !empty( $_GET[ 'page' ] ) ) {
  $page = clean( $_GET[ 'page' ] );
  if( file_exists( ROOT_DIR . '/pages/' . $page . ".php" ) ) {
    require ROOT_DIR . '/pages/' . $page . ".php";
  } else {
    require ROOT_DIR . '/pages/404.php';
  }
} else {
  require ROOT_DIR . '/pages/default.php';
}	 