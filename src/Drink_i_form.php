<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<h3 class="title">飲料追加</h3><button onclick="location.href='category_i_form.php'">カテゴリー登録</button>


<form action = "Drink_insert.php" method="post">
    <p>飲料名：<input type="text" name="name"></p>
	<?php
    echo  '<p>カテゴリ名：<select name = "category_id">';
	$i=1;
	$pdo=new PDO($connect,USER,PASS);
	foreach($pdo->query('select category_name from Categorys') as $row){
		echo '<option value="',$i,'">', $row['category_name'],'</option>';
		$i++;
	}
		echo '</select></p>';
		?>
		
			<input type="submit" value="登録">
		
</form>
<div class="mb-1">
<button onclick="location.href='menu.html'">一覧へ戻る</button>
</div>
<?php require 'footer.php'; ?>