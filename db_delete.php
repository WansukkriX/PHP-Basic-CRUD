<?php

require_once 'connect.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = 'DELETE FROM db_book WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam('id', $id, PDO::PARAM_INT);
    $stmt->execute();
    header('location: db_select.php');
}