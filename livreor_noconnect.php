<?php include('connect.php'); ?>
<?php include('header.php'); ?>

<section>
    <h2>Vos commentaires.</p>
    <main id="mainLivre">
        <?php
        $request="SELECT login, date, id_utilisateur, commentaire FROM `utilisateurs` ,`commentaires` WHERE utilisateurs.id = id_utilisateur ORDER BY date DESC";
                    
                    //$request = "SELECT * FROM commentaires ORDER BY date DESC;";
                    $exec_request = $connect -> query($request);
                    
            foreach ($exec_request as $row) { // génération des commentaires
                echo ' 
                <div id="com">
                    <div >                    
                        <h5>Posté le ' .$row['date'] . '   Par  ' . $row['login'] .'</h5>                       
                    </div>

                    <div >                   
                        <p>' .$row['commentaire'] . '</p>                        
                    </div>
                </div>';
            }
        ?>
    
    <div class="bold">Veuillez vous connecter pour laisser un commentaire</div>
    <a href="connexion.php"><button class="btn"> Se connecter </button></a> 
</section>


<!-- footer des pages et fermeture de la session -->
<?php 
mysqli_close($connect); // fermer la connexion
include('footer.php'); 
?>






