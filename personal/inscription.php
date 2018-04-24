<?php 
include "body/head.php";
include "body/header.php";
require "connexionbdd.php"

?>
<div id="inscription">
  <div id="inscription1">  
    <h2 style="color: gold; text-shadow: 5px 5px 5px black">Register</h2>
    <form action="inscription.php" method="post">
        <input type="text" placeholder="pseudo" name="pseudo" style="margin-bottom: 10px; width: 200px"><br />
        <input type="text" placeholder="Adresse-email" name="email" style="margin-bottom: 10px; width: 200px"><br />
        <input type="password" placeholder="Mot de Passe" name="password" style="margin-bottom: 10px; width: 200px"><br />
        <input type="password" placeholder="Confirmez votre mot de passe" name="confirm" style="margin-bottom: 10px; width: 200px"><br />
        <button type="submit" id="button" value="submit" style="text-shadow: 5px 5px 5px black">Register</button>
    </form>
  </div>

    <!-- <div class="flex-container">
      <div style="padding: 100px">1</div>
      <div>2</div>
      <div>3</div>
    </div><br>
    <div class="flex-container">
      <div>4</div>
      <div>5</div>
      <div>6</div>
    </div> -->

</div>
<?php 

include "body/footer.php";

?>

<?php

if (!empty($_POST['pseudo'])) {

    $pwd1 = htmlspecialchars($_POST['password']);
    $pwd2 = htmlspecialchars($_POST['confirm']);
    if (($pwd1 == $pwd2)) {
//Etapes de stockage pour l'enrégistrement dans la bdd
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
//crypter le mdp
        $pwd1 = sha1(md5($pwd1));

//insertion dans la table de passage "utilisateurs" de la bdd, id est en auto-increment, dont on ne doit le remplir d'aucune donnée
        //Ecriture aussi possible: $dbh->query("INSERT INTO util(id_user, pseudo, password, email) VALUES('','$pseudo','$pwd1','$email')");
        $dbh->query("INSERT INTO utilisateurs VALUES('','','','$pseudo','$email','$pwd1')");
        //header("Location: connexion.php");
    } else {
        echo '<h1 style="color: red">';
        echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
        echo '</h1>';
    }
}
?>