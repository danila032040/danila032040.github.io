<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJAX </title>
</head>
<body>


<?php
// Описание функции с приветствием на русском языке
function Ru($name) {
echo "<p><b>Здравствуйте, $name !";
 }
// Описание функции с приветствием на английском языке
function En($name) {
echo "<p><b>Hello, $name!";
}
function Fr($name) {
echo "<p><b>Bonjour, $name!";
}

function De($name) {
echo "<p><b>Guten Tag, $name!";
}


$language = $_REQUEST['lang']; // Выбрали русский язык
$name=$_REQUEST['name'];
$language($name);

?>
    </body>
</html>
