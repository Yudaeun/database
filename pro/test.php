<!DOCTYPE html>
<html>
<head>
<title>How to Select MySQL Table between Two Dates in PHP</title>
</head>
<body>
<h2>Login Table</h2>
<div>
	<table border="1">
		<thead>
			<th>UserID</th>
			<th>Username</th>
		</thead>
		<tbody>
		<?php
			$con=mysqli_connect("localhost","root","dbspffldks5","test") or die("MYSQL 접속 실패 !!");
			$sql="SELECT * FROM nationTbl";
			$ret=mysqli_query($con,$sql);

			$query=$con->query("select * from `date`");
			while($row = $query->fetch_array()) {
				?>
				<tr>
					<td><?php echo $row['day']; ?></td>
					<td><?php echo $row['dayday']; ?></td>

				</tr>
				<?php 
			}
		?>
		</tbody>
	</table>
</div><br>
<div>
	<form method="POST">
		<label>From: </label><input type="date" name="day0">
		<input type="submit" value="Get Data" name="submit">
	</form>
</div>
<h2>Data Between Selected Dates</h2>
<div>
	<table border="1">
		<thead>
			<th>UserID</th>
			<th>Username</th>
		</thead>
		<tbody>
		<?php
			if (isset($_POST['submit'])){
				$con=mysqli_connect("localhost","root","dbspffldks5","test") or die("MYSQL 접속 실패 !!");
			$sql="SELECT * FROM nationTbl";
			$ret=mysqli_query($con,$sql);
				$from=date('Y-m-d',strtotime($_POST['day0']));
			
				$oquery=$con->query("select * from date WHERE day='".$_POST['day0']."'");
				while($orow = $oquery->fetch_array()){
					?>
					<tr>
						<td><?php echo $orow['day']?></td>
						<td><?php echo $orow['dayday']?></td>
			
					</tr>
					<?php 
				}
			}
		?>
		</tbody>
	</table>
</div>
</body>