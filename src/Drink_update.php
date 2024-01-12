<?php require 'db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    if(!empty($_POST)){
        //productDBをupdate
        $update_stmt=$pdo->prepare('update Drinks set drink_name=?,category_ID=? where drink_id=?');
        $update_stmt->execute([$_POST['name'], $_POST['category_id'],$_POST['drink_id']]);
        header("Location: Drinklist.php");
        exit;
    }
?>