<?php
require 'conf/sql-connect.php';

if(isset($_POST['submit']) ){
    $description = $_POST['description'];
    $sth = $pdo->prepare("INSERT INTO todos (description, completed) VALUES (:description, false)");
    $sth->bindValue(':description', $description, PDO::PARAM_STR);
    $sth->execute();
}elseif(isset($_POST['delete'])){
    $id = $_POST['id'];
    $sth = $pdo->prepare("DELETE FROM todos WHERE id = :id");
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
}elseif(isset($_POST['complete'])){
    $id = $_POST['id'];
    $sth = $pdo->prepare("UPDATE todos SET completed = '1' WHERE id = :id;");
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
}elseif(isset($_POST['uncomplete'])){
    $id = $_POST['id'];
    $sth = $pdo->prepare("UPDATE todos SET completed = '0' WHERE id = :id;");
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
}

$sth = $pdo->prepare("SELECT * FROM todos ORDER BY id ASC");
$sth->execute();


include 'view/v-bsindex.php';