<?php namespace Blog;

const BASE_DIR = './src/blog/';

$p = $_GET[ 'p' ] ?? 'home';

var_dump( '$p', $p );
//echo $p;

if ( $p === 'home' ) {
	require BASE_DIR . 'pages/home.php';
}
elseif ( $p === 'single' ) {
	require BASE_DIR . 'pages/single.php';
}
