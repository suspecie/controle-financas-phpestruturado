<?php

/*Configurações de conexão do banco de dados */

$host =  "localhost";
$db =  "controlefinancasdb";
$user = "root";
$pass = "123";

$con = mysql_connect($host, $user, $pass) 
        or trigger_error(mysql_error(), E_USER_ERROR);

mysql_select_db($db, $con);