
<!DOCTYPE html>
<html>
<head>
	<title>Your Cars</title>
	<link rel="icon" type="image/jpg" href="logo.png">
</head>
<style type="text/css">
	.fsSubmitButton
{
padding: 10px 20px 11px !important;
font-size: 31px !important;
background-color: #F36C8C;
font-weight: bold;
text-shadow: 3px 4px #F36C8C;
color: #ffffff;
border-radius: 100px;
-moz-border-radius: 100px;
-webkit-border-radius: 100px;
border: 1px solid #F36C8C;
cursor: pointer;
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
}
</style>
<body>
	<center>
		<div class="container-fluid">
			<img src="name.png" align="center" alt="logo">
		</div>
	</center>
	<br><br>
<?php


//session_start();

$type=$_GET['type'];
$dtp=$_GET['date_pick'];
$driver=$_GET['btn1'];
//$dtd=$_GET['date_drop'];
//echo $type.'<br>';
//echo $dt.'<br>';

$usrnam='root';
$passwd='';
$host='localhost';
$count=0;
//require_once 'form1.php';

$link=mysqli_connect('localhost','root','') or die("Database1 not found<br>");
mysqli_select_db($link,'MASTER') or die("Database2 not found<br>");

$query="SELECT * FROM CARS WHERE TYPE='$type' AND DOA<='$dtp'";
$result=mysqli_query($link,$query);
//if(mysqli_num_rows($result)==0)
//{
//	echo 'No vehicle avaible<br>';
//}
//$recent = mysqli_query($link, $query);
//if($result=mysqli_query($link,$query))
//{
?>
<div>
		<center>
			<img src="book1.jpg" alt="bookcar" style="height: 280px">
		</center>
</div>
<center>
<form action="Confirm2.php" method="get">

	<table cellpadding="5" style="width: 650px; background-color: pink; border-style: solid; background-image: url(book2.png) height 100%; width: 80%">
		<font style="font-family: Georgia; font-size: 30px; font-weight: 20">
		<tr>
			<td><b><p style="font-family: Georgia; font-size: 25px; color: green">SELECT</p></b></td>
			<td><b><p style="font-family: Georgia; font-size: 25px; color: green">Type of Cab</p></b></td>
			<td><b><p style="font-family: Georgia; font-size: 25px; color: green">Model</p></b></td>
			<td><b><p style="font-family: Georgia; font-size: 25px; color: green">Will be avaible from</p></b></td>
			<td><b><p style="font-family: Georgia; font-size: 25px; color: green">Rate/km</p></b></td>
		</tr>
<?php
if(mysqli_num_rows($result)!=0)
{
		
while($arr=mysqli_fetch_assoc($result))
{ $count=$count+1;
	$model=$arr['MODEL'];
	$type=$arr['TYPE'];
	$doa=$arr['DOA'];
	$rate=$arr['RATE'];
	?>
		
		<tr>
			<td><input type="radio" name="booknow" value="<?php echo $model ?>"></td>
			<td><?php echo "<b><p style='font-family: ComicSans MS; font-size: 22px; color: white'>".$type."</p></b>";?></td>
			<td><?php echo "<b><p style='font-family: ComicSans MS; font-size: 22px; color: white'>".$model."</p></b>";?></td>
			<td><?php echo "<b><p style='font-family: ComicSans MS; font-size: 22px; color: white'>".$doa."</p></b>";?></td>
			<td><?php echo "<b><p style='font-family: ComicSans MS; font-size: 22px; color: white'>".$rate."</p></b>";?></td>
		</tr>

<?php
}
}
else
{
	echo "NO CARS AVAILABLE !!<br>";
}
if(isset($_GET['booknow']))
{
	$value1=$_GET['value1'];
}
?>
		</font>
</table>
	<input type="submit" name="confirm" value="BOOK NOW" class="fsSubmitButton">
</form>
	</center>
</body>
</html>