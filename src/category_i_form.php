<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<div class="columns">
	<div class="column is-one-fifth">
		<h3 class="subtitle is-3">カテゴリー追加</h3>
	</div>
	<div class="column">
    <button onclick="location.href='Drink_i_form.php'">飲料追加へ戻る</button>
	</div>
</div>

<form action = "category_insert.php" method="post">
<label class="label">カテゴリー名</label>
<div class="control">
    <input type = "text" class="input is-primary" name = "name" placeholder="カテゴリー" required>
</div>
    <input class="button is-primary is-medium mx-auto my-3" type="submit" value="登録">
</form>

<div class="mb-1">

</div>

<?php require 'footer.php'; ?>