<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<h1>飲料追加</h1>

<form action = "Drink_insert.php" method="post">
    飲料名：<input type="text" name="name"><br>
	<?php
    echo  'カテゴリ名：<select name = "category_id">';
	$i=1;
	$pdo=new PDO($connect,USER,PASS);
	foreach($pdo->query('select category_name from Categorys') as $row){
		echo '<option value="',$i,'">', $row['category_name'],'</option>';
		$i++;
	}
		echo '</select><br>';
		?>
		
			<input type="submit" value="登録">
		
</form>
<div class="mb-1">
<button onclick="location.href='menu.html'">一覧へ戻る</button>
</div>
<?php require 'footer.php'; ?>