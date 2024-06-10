


<form method="post">
    <div>
        <label>ISBN</label>
        <input name="isbn" >
    </div>
    <div>
        <label>NAME</label>
        <input name="name" >
    </div>
    <div>
        <label>PRICE</label>
        <input name="price" >
    </div>
    
    <button type="submit"> OK </button>
</form>

<?php
if (!empty($_POST)){
        require_once 'connect.php';
        try {
            $sql = 'INSERT INTO db_book(isbn, name, price) VALUES (:isbn, :name, :price)';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam('isbn', $_POST['isbn']);
            $stmt->bindParam('name', $_POST['name']);
            $stmt->bindParam('price', $_POST['price'], PDO::PARAM_INT);
            $stmt->execute();
            
            header('location: db_select.php');
        } catch (Exeption $e) {
          echo $e->getMessage();
        }

        
}
