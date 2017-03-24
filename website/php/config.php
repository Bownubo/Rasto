<?php
session_start();
//verbinden met database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bob_autoverhuur";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//test of de verbinding is gelukt
if (mysqli_connect_errno()) {
die("verbinden met de database is mislukt" .
mysqli_connect_error() .
" (" . mysqli_connect_errno() . " )"
);
}

 ?>
