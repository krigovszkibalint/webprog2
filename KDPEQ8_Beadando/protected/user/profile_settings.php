<?php
	$query = "SELECT id, username, email, bio FROM users WHERE id = ".$_SESSION['uid']; 
	require_once DATABASE_CONTROLLER; 
	$user = getRecord($query); 
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
					<img src="<?= PUBLIC_DIR."img/default-profile.png" ?>">
				</div>
				<input type="file" class="input-file" id="uploadProfile" name="upload">
			</center>
			<center><button type="submit" class="upload-btn" name="upload-profile">Profilkép feltöltése</button></center>
		</form>
		<form method="post" enctype="multipart/form-data">
			<center><p>Borítókép</p></center>
			<center>
				<div class="form-cover">
					<img src="<?= PUBLIC_DIR."img/default-cover.png" ?>">
				</div>
				<input type="file" class="input-file" id="uploadProfile" name="upload">
			</center>
			<center><button type="submit" class="upload-btn" name="upload-cover">Borítókép feltöltése</button></center>
		</form>
		<form method="post">
			<center><p>Bemutatkozás</p></center>
			<center>
				<div class="form-bio">
					<textarea id="bio" name="bio" maxlength="150" placeholder="<?=$user['bio']?>"></textarea>
				</div>
			</center>
			<center><button type="submit" class="bio-btn" name="upload-bio">Bemutatkozás frissítése</button></center>
		</form>
		
	</div>
	</div>
</div>