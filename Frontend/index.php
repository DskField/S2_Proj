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

            <img class="bigImg" src="Images/Fortarock-2019.jpg" alt="sabaton band">

            <section>
                <h1>Welkom bij Fortarock 2021!</h1>
                <hr>
                <img class="textimageleft" src="Images/podium1.jpg" alt="sabaton copenhagen">
                <p>
                    Al sinds 2009 is Fortarock het Heavy Music festival van Nijmegen en omgeving. In 2021 vindt Fortarock plaats op 1 juni en 2 juni. </br>
                    Fortarock is het grootste metal/rock festival van Nederland. Afgelopen jaren waren Nightwish, Volbeat, Slipknot en Iron Maiden headliner.
                </p>

            </section>


            <section>
                <hr>
                <img class="textimageright" src="Images/podium2.jpg" alt="sabaton copenhagen">
                <p>
                    Fortarock is weer <strong>back in business</strong> na een kleine hiatus van een jaartje van onze organisatie! </br>
                    Dit jaar spelen weer topbands zoals Sabaton, Bon Jovi, Y&T, Queen (Freddy Mercury is ondertussen weer levend), Iron Maiden, Korn (want waarom niet),
                    Slipknot en meer!
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

                    die();


                ?>
            </section>
        </main>

        <?php
            include "Includes/footer.php"
        ?>

    </body>

</html>