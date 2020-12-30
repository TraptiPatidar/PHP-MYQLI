<?php
$con=mysqli_connect('localhost','root','','login');
if(!$con)
	die("connection failed".mysqli_connect_erro());
else echo "connection successsful<br>";

// show data
$u="SELECT * FROM users";
$res=mysqli_query($con,$u);
while($r=mysqli_fetch_assoc($res)){
echo $r['username']." ";
echo $r['pass']."<br>";
}
?>
<!-- insert data -->
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form method="post" action="">
		USERNAME:<input id="us" type="text" name="fname"><br>
		PASSWORD:<input id="ps" type="text" name="pas"><br>
		<input type="submit" onclick="sub()">
	</form>
</body>
</html>
<script type="text/javascript">
	function sub(){
		<?php 
		if(isset($_POST)){
		$u="INSERT INTO users(username,pass) VALUES('".$_POST["fname"]."','".$_POST["pas"]."')";
		$res=mysqli_query($con,$u) or die("Query unsuccessful".mysqli_error($con));
	}
	?>
	}
</script>

<!-- update data
 -->
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<form action="" method="post">
		USERNAME:<input type="text" name="fname">
		NEW PASSWORD:<input type="text" name="pas">
		<input type="submit" onclick="fun()">
	</form>
</body>
</html>
<script type="text/javascript">
	function fun(){
		<<?php 
		if(isset($_POST)){
		$u="UPDATE users SET pass='".$_POST["pas"]."' WHERE username='".$_POST["fname"]."' ";
		$res=mysqli_query($con,$u) or die("Query unsuccessful".mysqli_error($con));
		}
		 ?>
	}
</script>

<!-- Delete data -->
<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<form action="" method="post">
		USERNAME FOR DELETION<input type="text" name="fname">
		<input type="submit" onclick="fun()">
	</form>
</body>
</html>
<script type="text/javascript">
	function fun(){
		<<?php 
		if(isset($_POST)){
		$u="DELETE FROM users WHERE username='".$_POST["fname"]."' ";
		$res=mysqli_query($con,$u) or die("Query unsuccessful".mysqli_error($con));
		}
		 ?>
	}
</script>