<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<h1>飲料追加</h1>
<?php
    '<td>';                  
        '<select name = "category_id">';
			'<option value="1">コーヒー</option>';
			'<option value="2">紅茶</option>';
			'<option value="3">炭酸飲料</option>';
			'<option value="4">ハーブティー</option>';
			'<option value="5">お酒</option>';
			'<option value="6">お茶</option>';
		'</select>'; 
                                
    '</td>'; 
?>
<?php require 'footer.php'; ?>