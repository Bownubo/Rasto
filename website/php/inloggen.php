<?php include 'header.php';?>



<form action="login.php" method="post">
  
 <label>Gebruikersnaam</label><br/>
 <input type="text" name="username"><br/>

 <label >Wachtwoord</label><br/>
 <input type="password" name="password"><br/>


 <button type="submit" name="save">save</button>

 </form>



<?php include"footer.php";
include "login.php";?>
