<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
	<style type="text/css">
		#main
		{
			width: 100%;
			height: 100vh;
		}
		#main #cal
		{
			width:400px;
			height: 500px;
			border:1px solid black;
			border-radius: 10px;
			margin-top: 120px;
		}
		span
		{
			font-weight: bold;
			margin-left: 20px;
		}
		input
		{
			padding-left: 20px;
		}
		button
		{
			margin-left: 70px;
		}
		h3
		{
			color: #12a197;
		}
	</style>
</head>
<body>
<div id="main">
	<div id="cal" class="container">
		<form action="cal_submit.php" method="POST">
			<h3 class="center-align">Calculator</h3>
			<span>Amount: </span> <input type="text" name="amount" placeholder="Amount">
			<span>Rate: </span> <input type="text" name="rate" placeholder="Rate">
			<span>Time: </span> <input type="text" name="time" placeholder="Time">
			<button class="btn btn-warning"> Submit</button><button class="btn btn-warning"> Clear</button>
			<br>
			<label for="result" name="result" value="<?php echo $int?>"></label>
		</form>
	</div>
</div>
</body>
</html>