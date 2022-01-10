<?php

session_start();
require('../controller/compteController.php')

?>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Compte</title> 
        <link rel="stylesheet" type="text/css" href="style/compte.css">
    </head>

    <body>

      <?php require('header.php')?>

        <main>

            <?php if (!isset($_SESSION['login'])) { ?>

        
                <section class="container">

                    <div class="signin">

                        <div><h2 class="boxtitle">J'ai déjà un compte</h2></div>

                        <form action="compte.php" method="post">

                            <div><label for="login" class="userlabel">Login</label></div>
                            <div><input type="text" class="userinput" name="login"></div>

                            <div><label for="password" class="userlabel">Mot de passe</label></div>
                            <div><input type="password" class="userinput" name="password"></div>

                            <div><input type="submit" name="connexion" class="usersubmit" value="Se connecter"></div>

                        </form>
                    </div>

                    <div class="suscribe">

                        <h2 class="boxtitle">Je créé un compte</h2>

                        <div class="textbox">Je peux réserver un séjour chez Happy Sardines.</div>
                        <div class="textbox">Je peux consulter mes réservations.</div>
                        <div class="textbox">Je peux consulter et modifier mes informations.</div>

                        <form action="compte.php" method="post"><input type="submit" name="suscribe" class="usersubmit" value="Inscription"></form>


                    </div>

                    


                </div>
            <?php } ?>

            <!--  AFFICHAGE DU COMPTE SI CONNECTE  -->

            <?php if(isset($_SESSION['login'])) { ?> 
            
            <section class="connected">

                <div class="infosbox">

                    <div><h2 class="boxtitle"> Vos informations </h2></div>

                    <table border="1">
                        <tr>
                            <td>Login</td>
                            <td><?php echo $getinfos_user->login;?></td>
                        </tr>
                        <tr>
                            <td>lastname</td>
                            <td><?php echo $getinfos_user->lastname;?></td>
                        </tr>
                        <tr>
                            <td>firstname</td>
                            <td><?php echo $getinfos_user->firstname;?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $getinfos_user->email;?></td>
                        </tr>
                    </table>

                    <form action="update-profil.php" method="post">
                        <input type="submit" name="updateprofil" value="Modifier">
                    </form>

                </div>

                <div class="reservationsbox">

                    <div><h2 class="boxtitle"> Vos réservations </h2></div>

                
                </div>
            </section>

            <?php } ?>


        </main>

     <!-- REQUIRE LE FOOTER -->
    
    </body>
</html>