<?php 
include "body/head.php";
include "body/header.php";
require "connexionbdd.php"

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> -->
<div id="connexion">
  <div id="connexion1">  
    <h2 style="color: gold; text-shadow: 5px 5px 5px black">Connexion</h2>
    <form action="connexion.php" method="post">
        <input type="text" placeholder="Adresse-email" name="email" style="margin-bottom: 10px; width: 200px"><br />
        <input type="password" placeholder="Mot de Passe" name="password" style="margin-bottom: 10px; width: 200px"><br />
        <button type="submit" id="button" value="submit" style="text-shadow: 5px 5px 5px black" name="connexion">Connexion</button>
    </form>
  </div>
</div>
<!-- </body>
</html> -->

<?php 

include "body/footer.php";

?>

<?php
/**
 * Created by PhpStorm.
 * User: Sumo Stephane
 * Date: 13/01/2018
 * Time: 21:30
 */

?>
<?php

if(isset($_POST['connexion']))
{

    if( !empty($_POST['email']) and !empty($_POST['password'])) {
echo 'Bonjour <br />';
        $requser = $dbh->prepare('SELECT * FROM utilisateurs  WHERE email = ? AND password = ?  ');
        $requser->execute([$_POST['email'], sha1(md5($_POST['password']))]);
        $userexist = $requser->fetch();

        if(isset($userexist['pseudo'])){
            $_SESSION['pseudo'] = $userexist['pseudo'];
            //$_SESSION['pseudo'] = $userexist['pseudo'];
            //$_SESSION['email'] = $userexist['email'];
            header('location: user.php?pseudo='.$_SESSION['pseudo']);
        }else{
            $erreur = "Mauvais mail ou mot de passe";
        }
    }
    //else if(isset($_POST['formconnexion'])
    
    else{
        $erreur = "Tous les champs doivent être rempli" ;
    }
}
?>

<?php
if(isset($erreur))
{
    echo '<font color="red" >' .$erreur. '</font>' ;
}
?>


bla
<?php 
	$var = 1;
	if($var == 1){
		echo "yes <br />";
		?>
		hum
	<?php 
		echo "ok <br />";
	}else {
		echo "blabcas <br />";
	}
?>	
Account
