
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="icon" type="image/jpg" href="logo.png">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style >
	input[type=text],select{
		width: 60%;
    padding: 12px 20px;
    margin: 8px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	.con{
		width: 35%;
	}
	.cont{
		width: 35%;
		margin-left: 800px;

	}
	.fsSubmitButton
{
padding: 10px 15px 11px !important;
font-size: 18px !important;
background-color: #57d6c7;
font-weight: bold;
text-shadow: 1px 1px #57D6C7;
color: #ffffff;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border: 1px solid #57D6C7;
cursor: pointer;
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
}

	</style>
</head>
<body>
	<center>
		<div class="container-fluid">
			<img src="name.png" align="center" alt="logo">
		</div>
	</center>
	<br><br>
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="home.html">HOME</a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="Contact.html">CONTACT US</a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="#"></a>
		<a class="navbar-brand" href="FAQ.html">FAQ</a>
	</nav>
	<div style="width: 100%"><br>
	<h3 style="font-family: Comic Sans MS;font-size: 40px;margin-left: 250px;">Choose A Ride</h3>
	<br><br>
	<div class="con" style="background-color: #f9f9f9;padding: 10px;margin-left: 250px; position: relative; top: 10px; float: left; width: 300px" >
  		<form action="Confirm1.php" method="get">
			<label for="CAR">CAR</label>
				<br>
				<select id="CAR" name="type" >
    		 		<option value="Luxury">Luxury</option>
    	  			<option value="SUV">SUV</option>
    	  			<option value="Sedan">Sedan</option>
    	  			<option value="Hatchback">Hatchback</option>
   		  			<option value="Crossover">Crossover</option>
   				</select>
    			<br>
    		<br>
    	<label for="dtp">When Do You Need It ?</label><br>
 		<input type="date" id="dtp" name="date_pick" placeholder="When do you need a car?" style="size: 100px">
 		<br><BR>
 		<label for="btn1">Need a Driver?</label><BR>
 		<input type="radio" name="btn1" value="YES">YES<br>
 		<input type="radio" name="btn1" value="NO">NO
   		<br><br>
    	<input type="submit" value="Submit" class="fsSubmitButton">
  		</form>
	</div>
	<div style="float: left; position: relative; margin-left:300px;height: 400px; width: 390px; opacity: 0.8; align-items: center;">
		<div>
			<h3 style="font-family: Comic Sans MS;font-size: 40px;">Guidelines</h3>
			<b><p style="font-family: Georgia; font-size: 30px; color: red">1.Always wear your seatbelt while driving</p></b><br>
			<b><p style="font-family: Georgia; font-size: 30px; color: blue">2.Always follow the traffic rules</p></b><br>
			<b><p style="font-family: Georgia; font-size: 30px; color: green">3.Do not change the lane without giving the indicator</p></b><br>
		</div>
	</div>

</body>
</html>