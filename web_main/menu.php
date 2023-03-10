<?php 
session_start();
require_once "config.php";

error_reporting(0);

session_start();
?>
<html lang="pl-PL">

<head>
	<meta charset="UTF-8">
	<title>7onn</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="style_main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../web_editor/watchimg/logo/x50icon.png">


</head>



	<div class="menu">
	 <a class="" href="index.php"> <img src="../web_editor/watchimg/logo/x50color.png"></a>

		<a class="links" name="frontpage" href="index.php"><i class="fas fa-home"></i> Strona główna</a>
		<a class="links" name="shop" href="shop.php"><i class="fa fa-shopping-cart"></i> Sklep</a>
		<a class="links" name="aboutus" href="aboutus.php"><i class="fa fa-users"></i> O nas</a>
		<a class="links" name="contact" href="contact.php"><i class="fa fa-envelope"></i> Kontakt</a>
		<a class="links" name="makewatch" href="editor_load.php"><i class="fa fa-cog"></i> Stwórz własny zegarek</a>
		    

 
	   
		<div class="search-container">
			<form action="/action_page.php">
				<input type="text" placeholder="Szukaj..." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>

		<?php   
		session_start();
if(isset($_SESSION['username'])) {
	 
 	/* echo ' <p align=right  float: right;  > Witaj '.($_SESSION["username"]).' !</p>';  */
	  echo '<a class="links"  align=right > Witaj '.($_SESSION["username"]).' !</a>';  

    echo '<a class="links login" name="login" href="logout.php"><i class="fas fa-sign-out-alt"></i> Wyloguj się </a>';
} else {
    echo '<a class="links login" name="login" href="login.php"><i class="fas fa-sign-in-alt"></i> Zaloguj się</a>';
} 
?>
	</div>
