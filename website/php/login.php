<?php
 require_once 'config.php';
//zet de antwoorden van de form om in variable
if (isset($_POST["username"]) && isset($_POST["password"])){
 $username = $_POST["username"];
 $password = $_POST["password"];
}


//voor query uit in de database
$query = "SELECT * FROM user_tabel WHERE Gebruikersnaam = '$username' and wachtwoord = '$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//Database logt je in
if ($count == 1){
$_SESSION['Gebruikersnaam'] = $username;
header("location: index.php");
}else{
//niet goed ingelogt
die("Invalid Login Credentials.");
}



?>
