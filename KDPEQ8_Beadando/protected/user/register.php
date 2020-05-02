<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$postData = [
		'username' => $_POST['username'],
		'email' => $_POST['email'],
		'password' => $_POST['password'],
		'password1' => $_POST['password1']
	];

	if(empty($postData['username']) || empty($postData['email']) || empty($postData['password']) || empty($postData['password1'])) {
		echo "Hiányzó adat(ok)!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Hibás email formátum!";
	} else if ($postData['password'] != $postData['password1']) {
		echo "A jelszavak nem egyeznek!";
	} else if(strlen($postData['password']) < 6) {
		echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
	} else if(!UserRegister($postData['email'], $postData['password'], $postData['username'])) {
		echo "Sikertelen regisztráció!";
	}

	$postData['password'] = $postData['password1'] = "";
}
?>
<div id="register">
<form method="post">
	<center><h2>Új fiók létrehozása</h2></center>

	<div class="form-row">
		<div class="form-group">
			<label for="registerUsername">Felhasználónév</label><br>
			<input type="text" class="input-style" id="registerUsername" name="username" value="<?=isset($postData) ? $postData['uname'] : "";?>">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group">
			<label for="registerPassword" class="">Jelszó</label><br>
			<input type="password" class="input-style" id="registerPassword" name="password" value="">
		</div>

		<div class="form-group">
			<label for="registerPassword1">Jelszó megerősítése</label><br>
			<input type="password" class="input-style" id="registerPassword1" name="password1" value="">
		</div>
	</div>

	<div class="form-row">
		<div class="form-group">
			<label for="registerEmail">E-mail cím</label><br>
			<input type="email" class="input-style" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
		</div>
	</div>

	<center><button type="submit" class="register-btn" name="register">Regisztráció</button></center>
</form>
</div>