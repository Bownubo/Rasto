<?php
//start session
session_start();
//zet de antwoorden van de form om in variable 
if (isset($_POST["username"]) and isset($_POST["password"])){
 $username = $_POST["username"];
 $password = $_POST["password"];
}


//voor query uit in de database
$query = "SELECT * FROM user_tabel WHERE Gebruikersnaam = '$username' and wachtwoord = '$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['Gebruikersnaam'] = $username;
header("location: index.php");
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
die("Invalid Login Credentials.");
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>