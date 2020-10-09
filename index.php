

<form name="inloggen" action="" method="POST">
    <input type="text" name="email" value="florian.tjeertes@gmail.com"/>
    <input type="password" name="password" value="wachtwoord"/>
    <input type="submit"  name="submit" value="Inloggen"/>

</form>


<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 09/10/2020
 * Time: 14:57
 */
if(isset($_POST['submit'])){
    echo "------------------backend----------------";
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "<br>e-mail: $email<br>";
    echo "<br>wachtwoord: $password<br>";


}


