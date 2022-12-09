<?php   include('header.php');
        include('connect.php');  
?>

    <!-- contenu de la page -->
    <main>
        <div class="container">

            <div class="table_admin">
            <div class=titre>
                Administrateur
            </div>
                <h2>La liste des utilisateurs</h2>
                <table>

                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom d'utilisateur</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $request = "SELECT * FROM utilisateurs";
                            $exec_request = $connect -> query($request);
                            while(($result = $exec_request -> fetch_assoc()) != null)
                            {
                                echo "<tr>";
                                echo "<td>".$result['id']."</td>";
                                echo "<td>".$result['login']."</td>";
                                echo "<td>".$result['password']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- footer des pages -->
    <?php include 'footer.php';?>
