<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
    <h3 class="title">飲料一覧</h3>
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select Drinks.drink_ID,Drinks.drink_name,Categorys.category_name from Drinks Inner join Categorys on Drinks.category_ID = Categorys.category_ID');
    echo '<table class="table is-striped">';
    foreach($sql as $list){
        echo '<tr>';
        echo '<td>',$list['drink_ID'] , '</td><td>', ":" , '</td><td>', $list['drink_name'] , '</td><td>', ":" , '</td><td>', $list['category_name'] , '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <button onclick="location.href='menu.html'">一覧へ戻る</button>
<?php require 'footer.php'; ?>