<?php
if (isset($_POST['reg'])) {
  $dsn = 'mysql:host=localhost;dbname=autoverhuurbob';
  $userdb = "root";
  $passdb = "";
  /*
  *Create connection
  */
  $conn = new PDO($dsn,$userdb,$passdb);
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $email = $_POST['email'];
  /*
  *Hasing password
  */
  $password = md5($pass);
  /*
  *Prepare SQL statement
  */
  $db = $conn->prepare("INSERT INTO users (Username,Password,Email) VALUES (?,?,?)");
  $db->execute(array($username, $password, $email));
}
if (isset($_POST['login'])) {
  $dsn = 'mysql:host=localhost;dbname=autoverhuurbob';
  $userdb = "root";
  $passdb = "";
  $conn = new PDO($dsn,$userdb,$passdb);
  $username = $_POST['username'];
  $pass = $_POST['password'];

  /*
  *hasing password
  */
  $password = md5($pass);
  $db = $conn->prepare("SELECT * FROM users WHERE Username = ? or Email = ? AND Password = ?");
  $db->execute(array($username, $username, $pass));
  $result = $db->fetch(PDO::FETCH_ASSOC);
  if ($result) {
    echo "kaas";
  }
}
 ?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>

<div class="container">
  <header>
    <nav class="header" id="menu">
        <img class="logo" src="./../img/kleiner_logo.png">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="over.php">OVER</a></li>
        <li><a href="autos.php">AUTO'S</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="inloggen.php">INLOGGEN</a></li>
        <li><a href="registreren.php">REGISTREREN</a></li>
      </ul>
    </nav>
  </header>
</div>
</body>
</html>
