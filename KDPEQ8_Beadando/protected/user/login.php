<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $postData = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ];
  if(empty($postData['email']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";
  } else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Hibás email formátum!";
  } else if(!UserLogin($postData['email'], $postData['password'])) {
    echo "Hibás email cím vagy jelszó!";
  }
  $postData['password'] = "";
}
?>
<div id="login">
<form method="post">
  <center><h2>Bejelentkezés</h2></center>

  <div class="form-group">
    <label for="loginEmail">E-mail cím</label>
    <input type="email" class="input-style" id="loginEmail" aria-describedby="emailHelp" name="email" value=
                "<?= isset($postData) ? $postData['email'] : '';?>">
  </div>
  
  <div class="form-group">
    <label for="loginPassword">Jelszó</label>
    <input type="password" class="input-style" id="loginPassword" name="password" value="">
  </div>

  <center><button type="submit" class="register-btn" name="login">Bejelentkezés</button></center>
</form>
</div>