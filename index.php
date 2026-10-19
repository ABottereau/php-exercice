<?php 

$heure = 9;

if (6 < $heure && $heure < 13) {
    echo 'Nous sommes le matin';
} else if (12 < $heure && $heure < 20) {
    echo "Nous sommes l'après-midi";
} else if (0 <= $heure && $heure < 7 || 19 < $heure && $heure < 24) {
    echo 'Nous sommes la nuit';
} else {
    echo 'Ecrire un heure valide';
}
?>