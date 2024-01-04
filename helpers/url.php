
<?php
// A var recebe  http://127.0.0.1/Curso%20PHP/Blog/ , ou seja o ip do local host e o diretorio da pasta do projeto, simplificando. 

$BASE_URL = "http://". $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . "?") ."/";
?>