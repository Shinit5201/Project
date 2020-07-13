<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
		<form action="cart.php?action=add&id=<?php echo $row["id"]; ?>" method="post">
			<div class="column" style="float:left;width:20%;padding:5px;box-sizing:border-box;">
				<p><?php echo '<img style="width: 100px;" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>'?></p>
				<p style="box-sizing: border-box"><?php echo $row["Brand_Name"]?></p>
				<p><?php echo $row["Size"]?></p>
				<p><?php echo $row["MRP"]?></p>
				<input type="submit" value="Add to cart" name='<?php echo $row["Brand_Name"]?>'>
				</form>
			</div>
		</div>
</body>
</html>