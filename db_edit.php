<?php
require_once 'connect.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM db_book WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt ->bindParam('id', $id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!empty($row['id'])){
    ?>
    <form method="post" action="db_edit_save.php?id=<?php echo $id;  ?>" >
       <div>
        <label > ISBN</label>
        <input name="isbn" value=" <?php echo $row['isbn'] ?>" />
       <div>
        <label > NAME</label>
        <input name="name" value=" <?php echo $row['name'] ?>" />
       <div>
        <label > PRICE</label>
        <input name="price" value=" <?php echo $row['price'] ?>" />
       </div>   

       <button type="submit">SAVE</button>
    </form>

    <?php  
}