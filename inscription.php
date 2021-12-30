<?php
    session_start();

    require('bdd.php');
    require('class_user.php');

    if (!empty($_POST)) {
        extract($_POST);

        $login = trim($_POST['login']);
        $email = trim($_POST['email']);
        $prenom = trim($_POST['prenom']);
        $nom = trim($_POST['nom']);
        $confemail = trim($_POST['confemail']);
        $confpassword = trim($_POST['confpassword']);
        $password = trim($_POST['password']);

        $valid = (boolean) true;

        if (isset($_POST['inscription'])) {

            $create_user = new User();
            $create_user->register("$login", "$email", "$prenom", "$nom", "$confemail", "$password", "$confpassword");
        }
    }
?>



<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
    
    </head>

    <body>

        

     <!-- REQUIRE LE HEADER -->

        <main>

            <form action="inscription.php" method="post">
                
                <div><input type="text" name="login" placeholder="login"></div>
                <div><input type="text" name="prenom" placeholder="prenom"></div>
                <div><input type="text" name="nom" placeholder="nom"></div>
                <div><input type="text" name="email" placeholder="email"></div>
                <div><input type="text" name="confemail" placeholder="Confirmer l'email"></div>
                <div><input type="password" name="password" placeholder="Mot de passe"></div>
                <div><input type="password" name="confpassword" placeholder="Confirmer le mot de passe"></div>
                <div><input type="submit" name="inscription" value="Inscription"></div>
            </form>
        </main>

     <!-- REQUIRE LE FOOTER -->
    
   
    </body>
</html>