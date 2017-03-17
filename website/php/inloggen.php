<?php include 'header.php';?>


<section class="text-container">
    <div class="reg-container">
<form action="login.php" method="post">
  
 <label>Gebruikersnaam</label><br/>
 <input type="text" name="username"><br/>

 <label >Wachtwoord</label><br/>
 <input type="password" name="password"><br/>


 <button type="submit" name="save">save</button>

 </form>
    </div>
</section>


<?php include"footer.php";
include "login.php";?>
