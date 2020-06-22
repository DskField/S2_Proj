<!DOCTYPE html>

<?php
include "Includes/moduleheader.php"
?>

<html lang="nl">

<?php
require "Includes/meta.php";
?>

<body>

<?php
include "Includes/header.php";
?>

<main>

    <img class="bigImg" src="Images/bonjovi.jpg" alt="bon jovi band">

    <section>
        <h1>Bon Jovi</h1>
        <hr>
        <p>
            <?php
            try {
                $pdo = new PDO("odbc:eventdatasource");
            }
            catch (PDOException $e) {
                echo "<h1>Database error</h1>";
                echo $e->getMessage();
                die();
            }

            try {
                $sql =
                    "SELECT 
                        artDesc
                        FROM
                        Artiest
                        WHERE artNaam LIKE 'Bon Jovi'
                    ";

                $result = $pdo->query($sql);
            }
            catch (PDOException $e){
                echo 'Er is een probleem met ophalen van data: ' . $e->getMessage();
                exit();
            }

            try {

                $aDesc = array();
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $aDesc[] = $row;
                }

            } catch (PDOException $e){
                echo 'Er is een probleem met uitschrijven van data: ' . $e->getMessage();
                exit();
            }

            foreach($aDesc as $desc) {
                echo $desc['artDesc'];
            }

            ?>
        </p>


    </section>

    <section>
        <h1>Video</h1>
        <hr>
        <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/lDK9QqIzhwk"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
        </iframe>

    </section>

</main>

<?php
include "Includes/footer.php"
?>

</body>

</html>