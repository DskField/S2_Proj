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
            <section>
                <a href="sabaton.php">
                    <h1>Sabaton</h1>
                </a>
                <hr>
                <a href="sabaton.php">
                    <img class="textimageleft" src="Images/20200212-COPENHAGEN-00177.jpg">
                </a>

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
                        WHERE artNaam LIKE 'Sabaton'
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
                <a href="bonjovi.php">
                    <h1>Bon Jovi</h1>
                </a>
                <hr>
                <a href="bonjovi.php">
                    <img class="textimageright" src="Images/bonjovi.jpg">
                </a>
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
        </main>

        <?php
            include "Includes/footer.php"
        ?>

    </body>

</html>