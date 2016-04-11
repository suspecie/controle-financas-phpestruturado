<?php

/*Configurações de conexão do banco de dados */

$host =  "localhost";
$db =  "controlefinancasdb";
$user = "root";
$pass = "123";

$con = mysqli_connect($host, $user, $pass, $db, null, null);


mysqli_select_db($con, $db);