<?PHP require_once 'config.php' ?>
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
        <?php if (isset($_SESSION['Gebruikersnaam'])): ?>
            <li><?=$_SESSION['Gebruikersnaam'];?></li>
        <?php endif; ?>
      </ul>

    </nav>
  </header>
</div>
</body>
</html>
