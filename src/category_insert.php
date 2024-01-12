<?php require 'db-connect.php'; ?>
<?php
//処理のみ
$pdo=new PDO($connect,USER,PASS);
if(!empty($_POST)){
    $sql=$pdo->prepare('insert into Categorys(category_name) VALUES(?)');
    $sql->execute([$_POST['name']]);
    header("Location: category_i_form.php");
    // header("Location: category_i_form.php?hogeA=登録されました");
    exit;
}else{
    header("Location: category_i_form.php");
    exit;
}
?>