<?php session_start(); ?>
<!-- header des pages -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css">
    <title>livre-or</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="flex">
                <div id="left">
                    <h3><b>CompanyLogo</b></h3>
                    
                </div>
                <?php
                    // test si l'utilisateur est connecté
                    if (isset($_GET['deconnexion'])){
                        if($_GET['deconnexion']==true){
                            session_unset();
                            session_destroy();
                            header('Location: index.php');
                        }
                    }
                    else if(isset($_SESSION['login'])){
                        $user = $_SESSION['login'];

                        echo "<div id='center'>
                                <h4>Bonjour, $user !</h4>
                                <div class='dec'>
                                <a href='index.php?deconnexion=true'>Déconnexion</a>
                                </dec>
                            </div>";
                        
                        if ($user == 'admin') {
                            $_SESSION['admin'] = true;
                            echo "<nav>
                                <ul class='right'>
                                    <li><a class='a_head' href='index.php'>Accueil</a></li>
                                    <li><a class='a_head' href='admin.php'>Info Utilisateurs</a></li>
                                    <li><a class='a_head' href='livreor.php'>Livre d'or</a></li>
                                </ul>
                            </nav>";
                        }
                        else {
                            echo "<nav>
                                <ul>
                                    <li><a class='a_head' href='livreor.php'>Livre d'or</a></li>
                                    <li><a class='a_head' href='profil.php'>Profil</a></li>
                                </ul>
                            </nav>";
                        }
                    }
                    else{
                        echo "<div class='a_head'>
                            <a href='connexion.php'>Connexion</a>
                            <a href='inscription.php'>Inscription</a>
                            <a href='index.php'>Accueil</a>
                            <a href='livreor_noconnect.php'>Livre d'or</a>

                            </div>";
                       
                    }
                ?>
            </div>
        </div>
    </header>
