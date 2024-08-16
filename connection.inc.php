<?php
session_start();
$con=mysqli_connect("localhost","justdigi_youngstar_user","{f#*5^H&H##C","justdigi_youngstar");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Youngstar.com/');

// Set the new SITE_PATH
define('SITE_PATH','https://dhvani.justdigitalgurus.com/youngstar.com/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
