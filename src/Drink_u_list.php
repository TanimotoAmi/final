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
        echo '<td>';
        echo '<form action = "Drink_u_form.php" method="POST">';
        echo '<input type="submit" value="更新"></button>';
        echo '<input type="hidden" name="drink_id" value="' . $list['drink_ID'] . '">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    
    ?>
    <button onclick="location.href='menu.html'">一覧へ戻る</button>
<?php require 'footer.php'; ?>