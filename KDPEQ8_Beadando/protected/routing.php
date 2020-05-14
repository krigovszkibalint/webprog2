<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': echo "<content>"; require_once PROTECTED_DIR.'normal/home.php'; echo "</content>";
	echo "<footer>"; include PROTECTED_DIR.'footer.php'; echo "</footer>"; break; 

	case 'profile': IsUserLoggedIn() ? include PROTECTED_DIR.'header.php' : header('Location: index.php'); 
	echo "<content>"; include PROTECTED_DIR.'user/profile.php'; echo "</content>"; 
	echo "<body class='profile'>"; break; 

	case 'explore': IsUserLoggedIn() ? include PROTECTED_DIR.'header.php' : header('Location: index.php'); 
	echo "<content>"; include PROTECTED_DIR.'user/explore.php'; echo "</content>"; 
	echo "<body class='profile'>"; break; 

	case 'user_list': IsUserLoggedIn() ? include PROTECTED_DIR.'header.php' : header('Location: index.php'); 
	echo "<content>"; include PROTECTED_DIR.'user/profile.php'; include PROTECTED_DIR.'admin/user_list.php'; echo "</content>"; 
	echo "<body class='profile'>"; break; 

	case 'delete_user': IsUserLoggedIn() ? require_once PROTECTED_DIR.'admin/delete.php' : header('Location: index.php'); break;

	case 'settings': IsUserLoggedIn() ? include PROTECTED_DIR.'header.php' : header('Location: index.php'); 
	echo "<content>"; include PROTECTED_DIR.'user/profile_settings.php'; echo "</content>"; 
	echo "<body class='settings'>"; break; 

	case 'new_post': IsUserLoggedIn() ? include PROTECTED_DIR.'header.php' : header('Location: index.php'); 
	echo "<content>"; include PROTECTED_DIR.'user/new_post.php'; echo "</content>"; 
	echo "<body class='new_post'>"; break; 

	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php');
	echo "<footer>"; include PROTECTED_DIR.'footer.php'; echo "</footer>"; break;

	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php');
	echo "<footer>"; include PROTECTED_DIR.'footer.php'; echo "</footer>"; break;

	// case 'banned': IsUserBanned() ? require_once PROTECTED_DIR.'user/banned.php' : header('Location: index.php'); break;

	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

	default: echo "<content>"; require_once PROTECTED_DIR.'normal/404.php'; echo "</content>";
			 echo "<footer>"; include PROTECTED_DIR.'footer.php'; echo "</footer>"; break;
}
?>