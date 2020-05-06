<?php 
function IsUserLoggedIn() {
	return $_SESSION  != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

// function IsUserBanned() {
// 	if ($_SESSION['permission'] < 1)
// 	{
// 		header('Location: index.php?P=banned');
// 	}
// }

function UserLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php');
}

function UserLogin($email, $password) {
	$query = "SELECT id, username, email, bio, permission FROM users WHERE email = :email AND password = :password";
	$params = [
		':email' => $email,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['id'];
		$_SESSION['uname'] = $record['username'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['bio'] = $record['bio'];
		$_SESSION['permission'] = $record['permission'];
		header('Location: index.php');
	}
	return false;
}

function UserRegister($email, $password, $uname) {
	$query = "SELECT id FROM users email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
		$params = [
			':username' => $uname,
			':email' => $email,
			':password' => sha1($password)
		];

		if(executeDML($query, $params)) 
			header('Location: index.php?P=login');
	} 
	return false;
}

?>