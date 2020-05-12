<?php
	$query = "SELECT id, username, email, profile, cover, bio FROM users WHERE id = ".$_SESSION['uid']; 
	require_once DATABASE_CONTROLLER; 
	$user = getRecord($query); 
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload-post'])) {

	$postData = [
		'post_title' => $_POST['post_title'],
		'post_description' => $_POST['post_description'],
		'upload_date' => $_POST['upload_date']
	];

	if (empty($postData['post_title']) || empty($postData['post_description'])) {
		echo "Hiányzó adat(ok)!";
	}

	$name = $_FILES['file']['name'];
	$target_dir = PUBLIC_DIR."posts/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$extensions_arr = array("jpg","jpeg","png");


	if (in_array($imageFileType,$extensions_arr)){
	    $query = "INSERT INTO posts (image, title, description, upload_date, uploaded_by) VALUES (:image, :post_title, :post_description, :upload_date, :user)";
	    $params = [
	     	':image' => $name,
	     	':post_title' => $postData['post_title'],
	     	':post_description' => $postData['post_description'],
	     	':upload_date' => $postData['upload_date'],
	     	':user' => $_SESSION['uid']
	    ];
	    require_once DATABASE_CONTROLLER; 
	    executeDML($query, $params);

		// header('Location: index.php?P=profile');
	    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	}
}
?>

<div class="profile-settings">
	<div class="profile-content-title">
	<h2>Új bejegyzés</h2>
	</div>
	<div class="new-post-content">

		<form method="post" enctype="multipart/form-data">

			<center><p>Fénykép feltöltése</p></center>
			<center>
				<div class="form-cover">
					<img id="blah" src="<?= PUBLIC_DIR."img/image-placeholder.png"?>">
				</div>
				<input type="file" class="input-file" id="file" name="file">
			</center>

			<center><p>Bejegyzés címe</p></center>
			<center>
				<div class="form-bio">
					<input type="text" id="post_title" name="post_title" maxlength="32" placeholder="">
				</div>
			</center>

			<center><p>Bejegyzés leírása</p></center>
			<center>
				<div class="form-bio">
					<textarea id="post_description" name="post_description" maxlength="128" placeholder="A leírás helye..."></textarea>
				</div>
			</center>

			<center><p>Bejegyzés elhelyezése időben</p></center>
			<center>
				<div class="form-bio">
					<input type="date" id="upload_date" name="upload_date">
				</div>
			</center>
			

			<center><button type="submit" class="bio-btn" name="upload-post">Bejegyzés létrehozása</button></center>

		</form>
		
	</div>
	</div>
</div>