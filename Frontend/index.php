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
                <h1>Kop</h1>
                <hr>
                <img class="textimageleft" src="Images/20200212-COPENHAGEN-00177.jpg" alt="sabaton copenhagen">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis diam id ornare suscipit. Mauris sit amet quam massa. Maecenas sodales nibh nunc, id semper lorem viverra sed. Ut convallis, tortor at placerat rutrum, felis erat pellentesque elit, et fermentum eros lacus id nulla. Quisque vitae arcu augue. Cras sapien neque, finibus ac neque dictum, convallis consectetur magna. Vivamus vitae lacus tristique, dignissim enim nec, mollis tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae nisi nisl. Donec pulvinar viverra mollis. Nam eu mauris gravida, placerat magna eu, lobortis tortor.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis diam id ornare suscipit. Mauris sit amet quam massa. Maecenas sodales nibh nunc, id semper lorem viverra sed. Ut convallis, tortor at placerat rutrum, felis erat pellentesque elit, et fermentum eros lacus id nulla. Quisque vitae arcu augue. Cras sapien neque, finibus ac neque dictum, convallis consectetur magna. Vivamus vitae lacus tristique, dignissim enim nec, mollis tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae nisi nisl. Donec pulvinar viverra mollis. Nam eu mauris gravida, placerat magna eu, lobortis tortor.
                </p>

            </section>


            <section>
                <hr>
                <img class="textimageright" src="Images/20200212-COPENHAGEN-00177.jpg" alt="sabaton copenhagen">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis diam id ornare suscipit. Mauris sit amet quam massa. Maecenas sodales nibh nunc, id semper lorem viverra sed. Ut convallis, tortor at placerat rutrum, felis erat pellentesque elit, et fermentum eros lacus id nulla. Quisque vitae arcu augue. Cras sapien neque, finibus ac neque dictum, convallis consectetur magna. Vivamus vitae lacus tristique, dignissim enim nec, mollis tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae nisi nisl. Donec pulvinar viverra mollis. Nam eu mauris gravida, placerat magna eu, lobortis tortor.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis diam id ornare suscipit. Mauris sit amet quam massa. Maecenas sodales nibh nunc, id semper lorem viverra sed. Ut convallis, tortor at placerat rutrum, felis erat pellentesque elit, et fermentum eros lacus id nulla. Quisque vitae arcu augue. Cras sapien neque, finibus ac neque dictum, convallis consectetur magna. Vivamus vitae lacus tristique, dignissim enim nec, mollis tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vitae nisi nisl. Donec pulvinar viverra mollis. Nam eu mauris gravida, placerat magna eu, lobortis tortor.
                </p>
            </section>

            <section>
                <h1>
                    Programma
                </h1>
                <hr>
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

                    try {
                        $sql = 'SELECT
                                    Evenement.eventID,
                                    Evenement.eventName,
                                    Optreden.optredenID,
                                    Optreden.artiest
                                FROM
                                     Evenement
                                INNER JOIN
                                    Optreden
                                    ON
                                    Evenement.eventOpt = Optreden.optredenID';

                        $result = $pdo->query($sql);

                    } catch (PDOException $e){
                        echo 'Er is een probleem met ophalen van data: ' . $e->getMessage();
                        exit();
                    }

                    $aCreds = array();

                    try {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $aCreds[] = $row;
                        }

                        echo "<pre>";
                        var_dump($aCreds);
                        echo "</pre>";
                    } catch (PDOException $e){
                        echo 'Er is een probleem met uitschrijven van data: ' . $e->getMessage();
                        exit();
                    }




                ?>
            </section>
        </main>

        <?php
            include "Includes/footer.php"
        ?>

    </body>

</html>