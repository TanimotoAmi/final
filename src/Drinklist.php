<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
    <h1>飲料一覧</h1>
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select Drinks.drink_ID,Drinks.drink_name,Categorys.category_name from Drinks Inner join Categorys where Drinks.category_ID = Categorys.category_ID');

    foreach($sql as $list){
        echo '<p>';
        echo $list['drink_ID'] , ":" , $list['drink_name'] , ":" , $list['category_name'];
        echo '</p>';
    }
    ?>
<?php require 'footer.php'; ?>