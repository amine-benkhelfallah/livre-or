<?php   include('header.php');
        include('connect.php');
?>


<?php
echo '<div class="login">'.$_SESSION['login'].'</div>';
if(!empty($_POST['deco'])) 
{
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset($_SESSION['profil']);
}
if((isset($_SESSION['login']))&& (isset($_SESSION['password'])))
?>

<?php

if(isset($_POST['submit']))
{
	//$connect = mysqli_connect("localhost", "root", "", "livreor"); 
   
	$login=$_SESSION['login'];
	$query="SELECT  id from utilisateurs WHERE login='$login'";
	$resultat= mysqli_query($connect, $query);
	$row = mysqli_fetch_array($resultat);
    $comment = $_POST['commentaire'];             //Permet d'afficher les apostrophes 
    $comment = mysqli_real_escape_string($connect, $comment); // Permet d'afficher les apostrophes 
		
	$id_user=$row['id'];

if(!empty($_POST['commentaire']))
{
	$query1 = "INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES (NULL, '".$comment."', '".$id_user."', CURRENT_TIMESTAMP());";		
	mysqli_query($connect, $query1);		 
	mysqli_close($connect);
	$_SESSION['commentaire']=$_POST['commentaire'];
    header('Location: livreor.php');
	
	
}
else
	echo'
    <div id="merci_com">                        
    <h2>Merci de laisser un commentaire</h2>                       
    </div>';
{
    
}

}

?>
    <!--Page de coconnect  -->
    <main>
        <div class="box">
            <div id="container">
            <form action="" method="post">
                <h2>Commentaire</h2>
                    
                    <textarea for="commentaire" placeholder="Entrer votre commentaire" name="commentaire"></textarea>
                    <input type="submit" name="submit"  value="Envoyer" >
                </form>
                </div>
        </div>
    </main>

    <!-- footer -->
    <?php include('footer.php'); ?>
