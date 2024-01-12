<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>

<form action = "category_insert.php" method="post">
    カテゴリー名：<input type="text" name="name"><br>
    <input type="submit" value="登録">
</form>

<div class="mb-1">
<button onclick="location.href='menu.html'">一覧へ戻る</button>
</div>

<?php require 'footer.php'; ?>