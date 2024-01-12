<?php require 'db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $delete_Products=$pdo->prepare('delete from Drinks where drink_ID=?');
    $delete_Products->execute([$_POST['drink_id']]);

    header("Location: Drinklist.php");
    exit;
?>