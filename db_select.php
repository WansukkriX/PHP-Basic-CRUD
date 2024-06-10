<?php
require_once 'connect.php';
$sql = 'SELECT * FROM db_book';
$rs = $conn->query($sql);

// print_r($rs);

if($rs){
    $result = $rs->fetchAll(PDO::FETCH_ASSOC);
    // while($result) {
    //     echo "$result[id]";
    // }
    // echo "<hr>";
    // var_dump($result);
}
?>

<a href="db_insert.php">ADD</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $item): ?>
        <tr>
                <td>
                    <?php echo $item['id'] ?>
                </td>
                <td>
                    <?php echo $item['isbn'] ?>
                </td>
                <td>
                    <?php echo $item['name'] ?>
                </td>
                <td> <?php echo $item['price'] ?>
                </td>
                <td>
                    <a href="db_edit.php?id= <?php  echo $item['id'] ?>"> EDIT </a>
                </td>
                <td>
                    <a href="db_delete.php?id= <?php echo $item['id'] ?>" onclick="return confirm('are you sure?')"> DELETE</a>
                </td>

           
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
