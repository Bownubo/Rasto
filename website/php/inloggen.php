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
