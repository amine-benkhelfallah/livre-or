

    <link rel="stylesheet" href="css/header.css"  />


      
   <!-- header  -->
   <?php include('header.php'); ?>

    <!--Page de connexion  -->
    <main>
        <div class="box_connexion_inscription">
            <div id="container">
            <form action="check.php" method="post">
                <h2>Connexion</h2>
                    <label for="login"><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>
                    <label for="password"><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                    <input type="submit"  value="login" >
                </form>
                <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }              
                ?>          
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include('footer.php'); ?>


    

