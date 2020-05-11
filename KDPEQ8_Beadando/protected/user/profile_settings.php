<?php
	$query = "SELECT id, username, email, profile, cover, bio FROM users WHERE id = ".$_SESSION['uid']; 
	require_once DATABASE_CONTROLLER; 
	$user = getRecord($query); 
	if (empty($user['profile'])) {
		$user['profile'] = "default-profile.png";
	}
	if (empty($user['cover'])) {
		$user['cover'] = "default-cover.png";
	}
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload-profile'])) {
 
	$name = $_FILES['file']['name'];
	$target_dir = PUBLIC_DIR."img/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png");

	if( in_array($imageFileType,$extensions_arr) ){
	    $query = "INSERT INTO images (image, uploaded_by) VALUES (:image, :user)";
	    $params = [
	     	':image' => $name,
	     	':user' => $_SESSION['uid']
	    ];
	    require_once DATABASE_CONTROLLER; 
	    executeDML($query, $params);

	    $query = "UPDATE users SET profile=:image WHERE id= ".$_SESSION['uid'];
		$params = [
			':image' => $name
		];
		require_once DATABASE_CONTROLLER;
		executeUpdate($query, $params);
		header('Location: index.php?P=settings');
	  
	    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	}
}
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload-cover'])) {
	$name = $_FILES['file']['name'];
	$target_dir = PUBLIC_DIR."img/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png");

	if( in_array($imageFileType,$extensions_arr) ){
 
	    $query = "INSERT INTO images (image, uploaded_by) VALUES (:image, :user)";
	    $params = [
	     	':image' => $name,
	     	':user' => $_SESSION['uid']
	    ];
	    require_once DATABASE_CONTROLLER; 
	    executeDML($query, $params);

	    $query = "UPDATE users SET cover=:image WHERE id= ".$_SESSION['uid'];
		$params = [
			':image' => $name
		];
		require_once DATABASE_CONTROLLER;
		executeUpdate($query, $params);
		header('Location: index.php?P=settings');

	     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	}
}
?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload-bio'])) {
	$postData = [
		'bio' => $_POST['bio']
	];

	$query = "UPDATE users SET bio=:bio WHERE id= ".$_SESSION['uid'];
	$params = [
		':bio' => $postData['bio']
	];
	require_once DATABASE_CONTROLLER;
	executeUpdate($query, $params);
	header('Location: index.php?P=settings');
}
?>
<div class="profile-settings">
	<div class="profile-content-title">
	<h2>Profil szerkesztése</h2>
	</div>
	<div class="profile-settings-content">

		<form method="post" enctype="multipart/form-data">
			<center><p>Profilkép</p></center>
			<center>
				<div class="form-profil">
					<img src="<?= PUBLIC_DIR."img/".$user['profile'] ?>">
				</div>
				<input type="file" class="input-file" id="file" name="file">
			</center>
			<center><button type="submit" class="upload-btn" name="upload-profile">Profilkép feltöltése</button></center>
		</form>

		<form method="post" enctype="multipart/form-data">
			<center><p>Borítókép</p></center>
			<center>
				<div class="form-cover">
					<img src="<?= PUBLIC_DIR."img/".$user['cover'] ?>">
				</div>
				<input type="file" class="input-file" id="file" name="file">
			</center>
			<center><button type="submit" class="upload-btn" name="upload-cover">Borítókép feltöltése</button></center>
		</form>

		<form method="post">
			<center><p>Bemutatkozás</p></center>
			<center>
				<div class="form-bio">
					<textarea id="bio" name="bio" maxlength="170" placeholder="<?=$user['bio']?>"></textarea>
				</div>
			</center>
			<center><button type="submit" class="bio-btn" name="upload-bio">Bemutatkozás frissítése</button></center>
		</form>
		
	</div>
	</div>
</div>