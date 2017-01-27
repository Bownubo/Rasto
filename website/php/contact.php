<?php include "header.php" ?>
<head>
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <div class="body">
        <form action="demo_form.asp">
            <table>
                <tr>
                    <td>Voornaam</td><td class="message">Message</td>
                </tr>
                <tr>
                    <td><input type="text" name="voornaam"></td><td rowspan="5"><textarea rows="7" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td>Achternaam</td>
                </tr>
                <tr>
                    <td><input type="text" name="achternaam"></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
        <h1>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. hendrerit pretium tellus, vel faucibus velit porttitor non.
        </h1>
        <iframe src="https://maps.google.com/maps?q=LeidenLammenschans,Leiden,Nederland,&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>
<?php include "footer.php" ?>
