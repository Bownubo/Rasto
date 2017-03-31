<?php include'header.php' ?>
<link rel="stylesheet" type="text/css" href="../css/autos.css">
<div class="text-container">
<?php
$query = "SELECT auto, autonaam, prijs, kenteken, autoid FROM autos";

if ($result = mysqli_query($connection, $query)){
    while($row=mysqli_fetch_row($result)){
        echo "<a href= autodetails.php?id='".$row[4]."'><img class='autos-img' src='../img/".$row[0]."'><p>Naam: ".$row[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prijs per maand: ".$row[2]."</p></a>";
    }
}
 ?>
</div>
<?php include'footer.php' ?>
