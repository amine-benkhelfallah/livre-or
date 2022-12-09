
        <link rel="stylesheet" href="css/header.css"  />
     
    <?php include('header.php'); 
          include('connect.php'); 
    ?> 


    <main>

        <div class="box_connexion_inscription">
            <div id="container">
            <!-- zone d'inscription -->
            <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1){
                            echo "<p style='color:red'>Utilisateur déjà créé</p>";
                        }
                        if($err==2){
                            echo "<p style='color:red'>Mot de passe différent</p>";
                        }
                    }
                ?>
            <form action="inscription.php" method="POST"> 
                <h2>Inscription</h2> 
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Saisissez un nom d'utilisateur" name="login" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Saisissez un mot de passe" name="password" required>

                    <label><b>Confirmez le mot de passe</b></label>
                    <input type="password" placeholder="Confirmation du mot de passe" name="password2" required>

                    <input type="submit" name="submit" value='Creer' >
                </form>
                <?php
            if(isset($_POST['login']) && isset($_POST['password']) ){
                $login = $_POST['login'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
              

                if($login !== "" && $password !== "" && $password2 ){
                    if($password == $password2){
                        $requete = "SELECT count(*) FROM utilisateurs where login = '".$login."'";
                        $exec_requete = $connect -> query($requete);
                        $reponse      = mysqli_fetch_array($exec_requete);
                        $count = $reponse['count(*)'];

                        if($count==0){
                            $password = password_hash($password, PASSWORD_BCRYPT);
                            $requete = "INSERT INTO utilisateurs (login, password) VALUES ('".$login."', '".($password)."')";
                            $exec_requete = $connect -> query($requete);
                            header('Location: connexion.php');
                        }
                        else{// utilisateur déjà existant
                            header('Location: inscription.php?erreur=1'); 
                        }
                    }
                    else{// mot de passe différent
                        header('Location: inscription.php?erreur=2'); 
                    }
                }
            
            }

            mysqli_close($connect); // fermer la connexion
        ?>
 
    </main>
    <!-- footer des pages -->
    <?php include('footer.php'); ?>
  