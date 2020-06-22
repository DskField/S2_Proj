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

    <img class="bigImg" src="Images/Sabaton.jpg" alt="sabaton band">

    <section>
        <h1>Sabaton</h1>
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

            echo "Connectie gelukt.";
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