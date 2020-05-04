<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': echo "<content>"; require_once PROTECTED_DIR.'normal/home.php'; echo "</content>"; break; 

	case 'profile': IsUserLoggedIn() ? include PROTECTED_DIR.'header.php' : header('Location: index.php'); 
	echo "<content>"; include PROTECTED_DIR.'user/profile.php'; echo "</content>"; 
	echo "<body class='profile'>"; break; 

	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;

	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;

	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}

?>