<?php include 'menu.php' ?>
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	 
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);

		 
		$_SESSION['username'] = $row['username'];
		 
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Niepoprawny login lub hasło.')</script>";
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
    <div class="centerLogin">
      
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="email"name="email"  value="<?php echo $email; ?>" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
          <span></span>
          <label>Hasło</label>
        </div>
        <div class="pass">Zapomniałeś hasła?</div>
        <input type="submit"name="submit" value="Zaloguj">
        <div class="signup_link">
          Nie masz konta? <a href="register.php">Zarejstruj się</a>
        </div>
      </form>
    </div>
 </div>
  </body>
</html>
