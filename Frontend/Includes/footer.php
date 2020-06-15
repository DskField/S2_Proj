<?php



    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");

    $wens = null;

    if
    ($uur >= 0 && $uur < 5) {
        $wens = "Goedennacht, ";
    }
    elseif
    ($uur >= 5 && $uur < 12) {
        $wens = "Goedenochtend, ";
    }
    elseif
    ($uur >= 12 && $uur < 17) {
        $wens = "Goedenmiddag, ";
    }
    else
    {
        $wens = "Goedenavond, ";
    }

    echo "
            <footer>
                <p> " . $wens . " </p>
                <p> Copyright Mojo</p>
            </footer>
            ";
?>