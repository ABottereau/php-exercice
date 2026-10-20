<?php 

$result = '';
$errors = [];


if ($_SERVER['REQUEST_METHOD'] !=='POST'){}
    $errors[] = "Erreur de methode";
if (!empty($_POST['number1'])) {
    $errors[] = "Remplir le nombre 1";
}
if (!empty($_POST['operator'])) {
    $errors[] = "Remplir l'opérateur";
}
if (!empty($_POST['number2'])) {
    $errors[] = "Remplir le nombre 2";
}
if (count($errors) > 0){




} else {
    $result = match($_POST['operator']) {
    '+' => $_POST['number1'] + $_POST['number2'],
    '-' => $_POST['number1'] - $_POST['number2'],
    '*' => $_POST['number1'] * $_POST['number2'],
    '/' => $_POST['number1'] / $_POST['number2'],
    '%' => $_POST['number1'] % $_POST['number2'],
    '**' => $_POST['number1'] ** $_POST['number2'],
    };
    echo $result;
}
?>