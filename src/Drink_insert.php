<?php require 'db-connect.php'; ?>
<?php
//処理のみ
$pdo=new PDO($connect,USER,PASS);
if(!empty($_POST)){
    $sql=$pdo->prepare('insert into Drinks(drink_name,category_ID) VALUES(?,?)');
    $sql->execute([$_POST['name'],$_POST['category_id']]);
    header("Location: Drinklist.php");
    exit;
}else{
    header("Location: Drink_i_form.php");
    exit;
}
?>