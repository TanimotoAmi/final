<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
    <h3 class="subtitle is-3">飲料一覧</h3>
    <form action = "Drinklist.php" method = "get">
    <div class="control">
        <label class="label">飲み物検索</label><input type = "text" name = "key">
        <input type = "submit" value = "検索">
    </div>
    </form> 
    <hr class="hr1">
    <?php
    $pdo=new PDO($connect,USER,PASS);
    if(isset($_GET['key'])){
        $sql=$pdo->prepare('select Drinks.drink_ID,Drinks.drink_name,Categorys.category_name from Drinks Inner join Categorys on Drinks.category_ID = Categorys.category_ID where Drinks.drink_name like ?');
        $sql->execute(['%' . $_GET['key'] . '%']);
        echo '<table class="table is-striped">';
        foreach($sql as $list){
            echo '<tr>';
            echo '<td>',$list['drink_ID'] , '</td><td>', ":" , '</td><td>', $list['drink_name'] , '</td><td>', ":" , '</td><td>', $list['category_name'] , '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }else{
        $sql=$pdo->query('select Drinks.drink_ID,Drinks.drink_name,Categorys.category_name from Drinks Inner join Categorys on Drinks.category_ID = Categorys.category_ID');
    echo '<table class="table is-striped">';
    foreach($sql as $list){
        echo '<tr>';
        echo '<td>',$list['drink_ID'] , '</td><td>', ":" , '</td><td>', $list['drink_name'] , '</td><td>', ":" , '</td><td>', $list['category_name'] , '</td>';
        echo '</tr>';
    }
    echo '</table>';
    }



    // $pdo=new PDO($connect,USER,PASS);
    // $sql=$pdo->query('select Drinks.drink_ID,Drinks.drink_name,Categorys.category_name from Drinks Inner join Categorys on Drinks.category_ID = Categorys.category_ID');
    // echo '<table class="table is-striped">';
    // foreach($sql as $list){
    //     echo '<tr>';
    //     echo '<td>',$list['drink_ID'] , '</td><td>', ":" , '</td><td>', $list['drink_name'] , '</td><td>', ":" , '</td><td>', $list['category_name'] , '</td>';
    //     echo '</tr>';
    // }
    // echo '</table>';
    ?>
    <!-- <button class="button is-dark is-outlined" onclick="location.href='menu.html'">一覧へ戻る</button> -->
<?php require 'footer.php'; ?>