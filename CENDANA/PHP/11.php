<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="act.php">
		<table>
			<?php 
			for($i=1; $i<=10; $i++) { ?>
			<tr>
				<td>
					<label>
						<?php echo "Nilai ke - ". $i; ?> 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]" value="<?php echo $i; ?>">
				</td>
			</tr>
			<?php } ?>


<!-- 			<tr>
				<td>
					<label>
						2 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						3 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						4 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						5 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						6 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						7 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						8 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						9 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						10 : 
					</label>
				</td>
				<td>
					<input type="text" name="nilai[]">
				</td>
			</tr>
		-->			<tr>
		<td>
			<input type="submit" name="Kirim">
		</td>
	</tr>
</table>
</form>
</body>
</html>