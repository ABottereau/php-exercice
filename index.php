<?php 

$result = match($_POST['operator']) {
    '+' => $_POST['number1'] + $_POST['number2'],
    '-' => $_POST['number1'] - $_POST['number2'],
    '*' => $_POST['number1'] * $_POST['number2'],
    '/' => $_POST['number1'] / $_POST['number2'],
    '%' => $_POST['number1'] % $_POST['number2'],
    '**' => $_POST['number1'] ** $_POST['number2'],
};

echo $result;

?>