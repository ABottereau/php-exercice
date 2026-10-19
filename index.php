<?php 
if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    if (!empty($_POST['number1'])) {
        if (!empty($_POST['operator'])) {
            if (!empty($_POST['number2'])) {
                $result = match($_POST['operator']) {
                '+' => $_POST['number1'] + $_POST['number2'],
                '-' => $_POST['number1'] - $_POST['number2'],
                '*' => $_POST['number1'] * $_POST['number2'],
                '/' => $_POST['number1'] / $_POST['number2'],
                '%' => $_POST['number1'] % $_POST['number2'],
                '**' => $_POST['number1'] ** $_POST['number2'],
                };
                echo $result;
            } else {
                echo 'Remplir le nombre 2.';
            }
        }else {
            echo "Remplir l'opérateur.";
        }
    }else {
        echo 'Remplir le nombre 1.';
    }
} else {
    echo 'Erreur de methode.';
}


?>