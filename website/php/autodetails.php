<?php include 'header.php' ?>
<link rel="stylesheet" href="../css/autos.css">
<section class="text-container">
<?PHP
$query = "SELECT auto, autonaam, prijs, kenteken, autoid, beschikbaar FROM autos
          WHERE autoid = ".$_GET['id'];
         if (isset($_SESSION['Gebruikersnaam'])){
          if ($result = mysqli_query($connection, $query)){
              while($row = mysqli_fetch_row($result)){
                  echo "<img class='autos-img' src='../img/".$row[0]."'><p>Naam: ".$row[1]."<br/> prijs per maand: ".$row[2]."<br/> kenteken: ".$row[3]."
                  <br/>".$row[5];
              }
          }
      }
          else{ die('je bent niet ingelogd');}
?>

<form action="" method="get">
<button type="submit" value="huur auto!" name="minder" >huur auto!</button>
</form>
</section>
<?php include'footer.php' ?>
