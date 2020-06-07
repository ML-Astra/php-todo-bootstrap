<?php

$dsn='mysql:host=127.0.0.1;dbname=todoapp';
$sqlun='root';
$sqlpw='';




try{
    $pdo = new PDO($dsn, $sqlun, $sqlpw);
}catch (PDOException $e){
    echo $e;
    die('UNABLE TO CONNECT TO SQL');

}

