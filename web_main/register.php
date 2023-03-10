<?php include 'menu.php' ?>
<?php 
session_start();
require_once "config.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! Rejestracja się udała.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("Location: login.php");
			} else {
				echo "<script>alert('Woops! Coś poszło nie tak.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Taki adres email już istnieje.')</script>";
		}
		
	} else {
		echo "<script>alert('Hasła nie pasują.')</script>";
	}
}

?>
<!DOCTYPE html>
 
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
  <div id="backgroundimage">
    <div class="centerRegister">
      
      <h1>Stwórz konto</h1>
      <form method="post">
      <div class="txt_field">
          <input type="text"   name="username" value="<?php echo $username; ?>" required>
          <span></span>
          <label>Nazwa użytkownika</label>
        </div>
        <div class="txt_field">
          <input type="text"  name="email" pattern="[^@\s]+@[^@\s]+" title="Niepoprawny format email" value="<?php echo $email; ?>" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
        <input type="password"   name="password"pattern="(?=.*\d)(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło musi składać się z conajmniej 8 znaków oraz zawierać conajmniej 1 dużą i małą literę" value="<?php echo $_POST['password']; ?>" required>
          <span></span>
          <label>Hasło</label>
        </div>
        <div class="txt_field">
        <input type="password"   name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
        <span></span>
          <label>Potwierdź hasło</label>
        </div>
         
        <input type="submit"name="submit" value="Potwierdź"> 
        <div class="signup_link">
        Masz już konto? <a href="login.php">Kliknij tutaj!</a>
        </div>
      </form>
    </div>
 </div>
  </body>
</html>
