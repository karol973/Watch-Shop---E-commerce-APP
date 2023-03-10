<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "baza2";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Nie można połączyć z bazą danych.')</script>");
}
$db_select = mysqli_select_db($conn, "baza2");
        if (!$db_select) {
            die("Database selection failed: " . mysqli_connect_error());
        }
?>