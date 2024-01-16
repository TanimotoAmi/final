<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<div class="columns">
	<div class="column is-one-fifth">
		<h3 class="subtitle is-3">飲料追加</h3>
	</div>
	<div class="column">
		<button onclick="location.href='category_i_form.php'">カテゴリー登録</button>
	</div>
</div>

<table>
	<form action = "Drink_insert.php" method="post">
	<label class="label">飲料名</label>
    <div class="control">
        <input type = "text" class="input is-primary" name = "name" placeholder="飲料名" required>
    </div>
			<?php
    			echo  '<label class="label">カテゴリー</label>';
				echo '<div class="field">';
				echo '<div class="select is-medium">';
				echo '<select name = "category_id">';
				$i=1;
				$pdo=new PDO($connect,USER,PASS);
				foreach($pdo->query('select category_name from Categorys') as $row){
					echo '<option value="',$i,'">', $row['category_name'],'</option>';
					$i++;
				}
				echo '</select>';
				echo '</div>';
				echo '</div>';
		?>
		<tr>
    		<td>
				<input class="button is-primary is-medium mx-auto my-3" type="submit" value="登録">
			</td>
		</tr>
	</form>
</table>
<!-- <div class="mb-1">
	<button onclick="location.href='menu.html'">一覧へ戻る</button>
</div> -->
<?php require 'footer.php'; ?>