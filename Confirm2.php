<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style type="text/css">
	#adv{
		height: 380px;
		width: 1000px;
		opacity: 1;
		border-style: ridge;
		border-color: black;
		border-radius: 10px;
	}
	#car{
		height: 260px;
		width: 370px;
		border-style: solid;
		border-radius: 15px;
		border-color:  red;

	}
	#para2{
		font-family: Apple Chancery;
		font-size: 34px;
		color: black;
	}
	#dt1{
		font-size: 30px;
	}
	#para1{
		font-family: Apple Chancery;
		font-size: 30px;
		color: green;
		margin-left: 100px;
	}
	#para3{
		font-family: Apple Chancery;
		font-size: 30px;
		color: green;
		margin-left: 470px;
	}
	.myclass1{
		display: inline-block;
	}
	.myclass2{
		display: inline-block;
	}
	.myclass3{
		display: inline-block;
	}
	.myclass4{
		display: inline-block;
		
	}
	.myclass5{
		display: inline-block;
		
	}
</style>
<head>
	<title>Confirm Your Booking</title>
	<link rel="icon" type="image/jpg" href="logo.png">
</head>
<body>
<section class="sec1">
	<center>
		<div class="container-fluid">
			<img src="name.png" align="center" alt="logo">
		</div>
	</center>
	<br><br>
</section>
<?php

$detail=$_GET['booknow'];
$usrnam='root';
$passwd='';
$host='localhost';

$link=mysqli_connect('localhost','root','') or die("Database1 not found<br>");
mysqli_select_db($link,'MASTER') or die("Database2 not found<br>");

$query="SELECT * FROM CARS WHERE MODEL='$detail'";
$result=mysqli_query($link,$query);
//echo $detail.'<br>';

$arr=mysqli_fetch_assoc($result);
$model=$arr['MODEL'];
$type=$arr['TYPE'];
$rno=$arr['REG_NO'];
$cap=$arr['CAPACITY'];
$rate=$arr['RATE'];
$loc=$arr['IMAGE'];
?>
<section>
	<div class="container-fluid">
	<?php 

	$cmd='<img src="'.$loc.'" alt="'.$model.'" id="car" align="left">';
	echo $cmd;

	?>

	<?php

	echo '<p id="para1" class="myclass1">Model:</p> ';
	echo '<p id="para2" class="myclass1">'.$model.'</p> ';
	echo '<p id="para1" class="myclass1">Registration No.:</p> ';
	echo '<p id="para2" class="myclass1">'.$rno.'</p><br>';
	echo '<p id="para1" class="myclass2">Rate:</p> ';
	echo '<p id="para2" class="myclass2">'.$rate.'/km</p><br> ';
	echo '<p id="para1" class="myclass2">Capacity:</p> ';
	echo '<p id="para2" class="myclass2">'.$cap.'</p><br> ';
	echo '<p id="para1" class="myclass3">Booking Starts:</p> ';
	echo '<input type="date" name="bookdt" id="dt1" class="myclass3"><br>';
	echo '<p id="para3" class="myclass4">Booking Ends:   </p>';
	echo '<input type="date" name="enddt" id="dt2" class="myclass4"><br>';
	echo '<p id="para3" class="myclass5">Email-ID:   </p>';
	echo '<input type="text" name="email" id="em" class="myclass5">';


	?>

	</div>
		</section>
		<br><br><br>	
<section>
	<center>
		<form action="Confirm3.php">
			<input type="submit" name="confirm" value="CONFIRM" >
		</form>
	</center>
</section>
<br><br>
<section>
	<center>
		<img src="advantage.png" alt="advantages of car rental" id="adv">
	</center>
</section>
</body>
</html>