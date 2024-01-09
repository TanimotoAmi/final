<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<h1>飲料更新</h1>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from Drinks');
?>
<?php require 'footer.php'; ?>