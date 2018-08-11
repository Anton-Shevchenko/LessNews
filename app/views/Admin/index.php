<form method="post" enctype="multipart/form-data">
	<select name="category">
		<?php foreach ($categories as $row): ?>
			<option value="<?=$row['id']; ?>"><?php echo $row['name']; ?>
		</option>
		<?php endforeach ?>
	</select><br>

	<input type="text" name="name"><br>

	<textarea name="text"></textarea><br>

	<input type="file" name="upload"><br>
			
	<input type="text" name="tags"><br>

	<input type="submit" name="newNews">
</form>

<table border="1">
	<?php foreach ($comments as $row): ?>

	<tr>
		<td><?=$row['user_name']; ?></td>
		<td><?=$row['comment_text'] ?></td>
	</tr>
	
	<?php endforeach; ?>
</table>
