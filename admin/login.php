<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login Mahasiswa</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">

<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" href="assets/css/style-login.css">
</head>
<body class='login_body'>
	<div class="wrap">
		<h2>Login Page</h2>
		<h4>Masukkan User dan Password Anda</h4>
		<form  method="post">
		<div class="login">
			<div class="email">
				<label for="username">Username</label><div class="email-input"><div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="username" name="username"></div></div>
			</div>
			<div class="pw">
				<label for="password">Password</label><div class="pw-input"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password"></div></div>
			</div>			
		</div>
		<div class="submit">
			
			<button type="submit" name="submitBtnLogin" id="submitBtnLogin" class="btn btn-red5">Login</button> 
		</div>
		</form>
	</div>
<script src="asset/js/jquery.js"></script>
</body>
</html>
    <?php 
    session_start();
    include("koneksi.php");
    ?>
    <?php
    $msg = ""; 
    if(isset($_POST['submitBtnLogin'])) {
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      if($username != "" && $password != "") {
        try {
          $query = "select * from `mahasiswa` where `username`=:username and `password`=:password";
          $stmt = $pdo->prepare($query);
          $stmt->bindParam('username', $username, PDO::PARAM_STR);
          $stmt->bindValue('password', $password, PDO::PARAM_STR);
          $stmt->execute();
          $count = $stmt->rowCount();
          $row   = $stmt->fetch(PDO::FETCH_ASSOC);
          if($count == 1 && !empty($row)) {
            /******************** Your code ***********************/
            $_SESSION['sess_user_id']   = $row['uid'];
            $_SESSION['sess_user_name'] = $row['username'];
            $_SESSION['sess_name'] = $row['name'];
                 	header('Location:mahasiswa/index.php');
          } else {
            $msg = "Invalid username and password!";
          }
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        $msg = "Both fields are required!";
      }
    }
    ?>
