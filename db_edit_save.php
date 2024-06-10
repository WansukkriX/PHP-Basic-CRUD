<?php

require_once 'connect.php';
if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $isbn = $_POST['isbn'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $sql = 'UPDATE db_book SET isbn= :isbn, name = :name, price = :price WHERE id =:id';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam('isbn', $isbn);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('price', $price, PDO::PARAM_INT);
        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();

    header('location: db_select.php');
}