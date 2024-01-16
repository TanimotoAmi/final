<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<h1 class="subtitle is-3">飲料更新</h1>
<?php
$pdo=new PDO($connect,USER,PASS);
$drink_id = $_POST['drink_id'];
$sql=$pdo->prepare('select * from Drinks where drink_ID=?');
	$sql->execute([$drink_id]);
 	$result = $sql->fetch(PDO::FETCH_ASSOC);
	$category_id = $result['category_ID'];

	echo '<form action = "Drink_update.php" method="post">';
	echo '<input type="hidden" name="drink_id" value="' . $drink_id . '">';
	//echo '飲料名：<input type="text" name="name"><br>';
    
	echo '<div class="control">';
     echo '<label class="label">飲料名</label>';
	 echo '<input  class="input is-primary" type="text" name="name" value="' . $result['drink_name'] . '">';
    echo '</div>';
	echo  '<label class="label">カテゴリー</label>';
	echo '<div class="field">';
	echo '<div class="select is-medium">';
	echo '<select name = "category_id">';
	$i=1;
		foreach($pdo->query('select category_name from Categorys') as $row){
			//echo '<option value="',$i,'">',$row['category_name'],'</option>';
	 if($i == $category_id){
	 	echo '<option value="',$i,'" selected>',$row['category_name'],'</option>';
	 }else{
	 	echo '<option value="',$i,'">',$row['category_name'],'</option>';
	 }
			$i++;
		}
		echo '</select>';
		echo '</div>';
		echo '</div>';
		echo '<div class="pb-1">';
		echo '<input class="button is-primary is-medium mx-auto my-3"  type="submit" value="更新">';
		echo '</div><br>';
'</form>';
?>
<!-- <button onclick="location.href='Drink_u_list.php'">前へ戻る</button> -->
<?php require 'footer.php'; ?>