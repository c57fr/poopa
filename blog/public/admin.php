<?php
use Core\Auth\DBAuth;

if ( ! defined( 'ROOT' ) ) {
	define( 'ROOT', dirname( __DIR__ ) . '\\' );
}
//var_dump( ROOT );

//require ROOT . 'app/App.php';
//App::load();

$a = $_GET[ 'a' ] ?? 'admin';
//var_dump('admin a', $a);

// Auth
//$app  = App::getInstance();
//$auth = new DBAuth( $app->getDB() );
//
////var_dump( isset( $_SESSION[ 'auth' ] ) );
//if ( ! $auth->logged() ) {
//	$controller = new \App\Controller\Admin\UsersController;
//	$controller->login();
//	//require ROOT . 'app/Views/users/login.php';
//}
//else {
//var_dump($a);
if ( $a === 'admin' ) {
	$controller = new App\Controller\Admin\PostsController;
	$controller->index();
	//require ROOT . 'pages/admin/posts/index.php';
}
elseif ( $a === 'login' ) {
	require ROOT . 'app/Views/users/login.php';
}
elseif ( $a === 'posts.edit' ) {
	require ROOT . 'pages/admin/posts/edit.php';
}
elseif ( $a === 'posts.add' ) {
	require ROOT . 'pages/admin/posts/add.php';
}
elseif ( $a === 'posts.delete' ) {
	require ROOT . 'pages/admin/posts/delete.php';
}
elseif ( $a === 'categories.index' ) {
	require ROOT . 'pages/admin/categories/index.php';
}
elseif ( $a === 'categories.edit' ) {
	require ROOT . 'pages/admin/categories/edit.php';
}
elseif ( $a === 'categories.add' ) {
	require ROOT . 'pages/admin/categories/add.php';
}
elseif ( $a === 'categories.delete' ) {
	require ROOT . 'pages/admin/categories/delete.php';
}
elseif ( $a === 404 ) {
	echo '<h1>Oups.... Cette page n\'existe pas !</h1>';
}
//}
