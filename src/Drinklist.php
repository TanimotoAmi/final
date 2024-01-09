<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
    <h1>飲料一覧</h1>
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from Drinks');

    foreach($sql as $list){
        echo $list['drink_ID'];
        echo $list['drink_name'];
    }
    ?>