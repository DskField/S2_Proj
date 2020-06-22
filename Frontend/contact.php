<!DOCTYPE html>

<?php
include "Includes/moduleheader.php"
?>

<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Hoofdpagina">
    <meta name="keywords" content="keyword 1, keyword 2">

    <link href="/S2_Proj/Frontend/CSS/style.css" type="text/css" rel="stylesheet">
    <link href="/S2_Proj/Frontend/CSS/dropdown.css" type="text/css" rel="stylesheet">
    <link href="/S2_Proj/Frontend/CSS/contact.css" type="text/css" rel="stylesheet">

    <script src="/S2_Proj/Frontend/Scripts/jquery-3.4.1.js"></script>
    <script src="/S2_Proj/Frontend/Scripts/script.js" defer></script>
    <script src="/S2_Proj/Frontend/Scripts/dropdown.js" defer></script>

    <title>
        Mojo Concerts
    </title>
</head>

    <body>

        <?php
        include "Includes/header.php";
        ?>

        <h1 class="Welcome">Hallo,<br> Welkom</h1>
        <main>
            <h1 class="center">Neem Contact Met Ons Op</h1>
            <hr>
            <table class="tablestyle">
                <thead>
                <tr>
                    <th>TELEFOONNUMMER</th>
                    <th>EMAIL</th>
                </tr>
                </thead>
                <tbody>
                <tr class="Grey">
                    <td class="tdwidth">06 12345678</td>
                    <td class="tdwidth" >Mojoconcerts@info.nl</td>
                </tr>
                </tbody>
            </table>
        </main>

        <?php
        include "Includes/footer.php"
        ?>

    </body>
</html>