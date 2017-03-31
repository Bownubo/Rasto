<?php include 'header.php';
if(isset($_SESSION['Gebruikersnaam'])){
 $query = "UPDATE autos SET beschikbaar = beschikbaar -1
WHERE autoid=".$_GET['id'];

mysqli_query($connection, $query);
}
?>
<section class="text-container">
    <h1 style="padding-top:40px; margin:0; text-align:center;"> Je auto is gehuurd</h1>
    <img style="margin:0 auto; display:block;" width="400px" src="../img/smiley.png" />
</section>
<?php include'footer.php' ?>
