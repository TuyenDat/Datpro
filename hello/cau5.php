<?php require 'data.php' ?>

<html>
<head>
	<title>Tap Lam Lap Trinh web</title>
</head>
<body text="yellow" bgcolor="green">
	<form  style="width: 190;
		height: 25;">
		ID<input type="txt" name="id">
		<input type="submit" name="Tiem kiem">
		<?php $a =  $_GET['id'];?>
		<?php
		$temp = 0;
		for ($i = 0; $i < count($users) ; $i++) { 
			# code...
			if ($users[$i]['id'] == $a) {
				echo"<br>";
				echo $users [$i]['name'];
				echo $users[$i]['email']['gmail'];
				echo $users[$i]['email']['yahoo'];
				break;
				# code...
			}
		}
		?>
	</form>
	<br>
	<table border="1" align="center">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
			<td>Yahoo</td>
		</tr>
			<?php for ($i=0; $i < count($users) ; $i++) :?>
			<tr>
				<td><?php echo $users[$i]['id']; ?></td>
				<td><?php echo $users[$i]['name'] ?></td>
				<td><?php echo $users[$i]['email']['gmail']; ?></td>
				<td><?php echo $users[$i]['email']['yahoo']; ?></td>
			</tr>
			<?php endfor; ?>
		
	</table>

		<center>
		<?php  echo "b.Tìm xem có nguoi dung với ID = 15  <br>"; ?>
		
		<?php
		$temp=0; 
		for ($i=0; $i < count($users); $i++) { 
			if ($users[$i]['id'] == 15 ) {
				echo "ID tim kiem co trong danh sach nguoi dung ";
				break;
			}
			$temp += 1;
		} 
		if ($temp == count($users)) {
			echo "khong tim thay id nguoi dung ";
		}
		?>

		<?php echo "<br> c.xếp id tăng dần <br>"; ?>
		</center>
		<table border="1" align="center">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>yahoo</td>
			</tr>
			<?php sort($users) ?>
			<?php for ($i=0; $i < count($users) ; $i++) :?>
			<tr>
				<td><?php echo $users[$i]['id']; ?></td>
				<td><?php echo $users[$i]['name'] ?></td>
				<td><?php echo $users[$i]['email']['gmail']; ?></td>
				<td><?php echo $users[$i]['email']['yahoo']; ?></td>
			</tr>
			<?php endfor;
			 ?>

		</table>
</body>
</html>
