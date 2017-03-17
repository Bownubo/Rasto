<?PHP include 'header.php' ?>
<head>
     <link rel="stylesheet" type="text/css" href="../css/registreren.css">
</head>
<section class="text-container">
  <div class="reg-container">
    <h4>
      Maak nu een account!
    </h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pharetra egestas aliquam. Morbi non risus vitae urna euismod aliquam sit amet eu est.
    </p>
    <?PHP
       if(isset($_POST['save']))
       {
       $Voornaam = $_POST['Voornaam'];
       $Tussenvoegsel = $_POST['Tussenvoegsel'];
       $Achternaam = $_POST['Achternaam'];
       $Gebruikersnaam = $_POST['Gebruikersnaam'];
       $Wachtwoord = $_POST['Wachtwoord'];
       $Email = $_POST['Email'];
       $Geboortedatum = $_POST['Geboortedatum'];
       $Telefoonnummer = $_POST['Telefoonnummer'];
       $Woonplaats = $_POST['Woonplaats'];
       $Postcode = $_POST['Postcode'];
       $Rijbewijs = $_POST['Rijbewijs'];

         $sql = "INSERT INTO user_tabel (Voornaam, Tussenvoegsel, Achternaam, Gebruikersnaam, Wachtwoord, Email, Geboortedatum, Telefoonnummer, Woonplaats, Postcode, Rijbewijs)
         VALUES ('$Voornaam', '$Tussenvoegsel', '$Achternaam', '$Gebruikersnaam', '$Wachtwoord', '$Email', '$Geboortedatum', '$Telefoonnummer', '$Woonplaats', '$Postcode', '$Rijbewijs')";

         $result = mysqli_query($connection,$sql);
     }
     ?>
    <p text-align="left">

    <form action="registreren.php" method="post">
     <label> Voornaam</label><br/>
     <input type="text" name="Voornaam"><br/>

     <label >Tussenvoegsel</label><br/>
     <input type="text" name="Tussenvoegsel"><br/>

     <label >Achternaam</label><br/>
     <input type="text" name="Achternaam"><br/>

     <label >Gebruikersnaam</label><br/>
     <input type="text" name="Gebruikersnaam"><br/>

     <label >Wachtwoord</label><br/>
     <input type="password" name="Wachtwoord"><br/>

     <label >Email</label><br/>
     <input type="text" name="Email"><br/>

     <label >Geboortedatum</label><br/>
     <input type="text" name="Geboortedatum"><br/>

     <label >Telefoonnummer</label><br/>
     <input type="text" name="Telefoonnummer"><br/>

     <label >Woonplaats</label><br/>
     <input type="text" name="Woonplaats"><br/>

     <label >Postcode</label><br/>
     <input type="text" name="Postcode"><br/>

     <label >Rijbewijs</label><br/>
     <input type="text" name="Rijbewijs"><br/>

     <button type="submit" name="save">save</button>

     </form>
<?PHP include 'footer.php' ?>
