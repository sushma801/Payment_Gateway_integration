<html>
<style>
	#row{
		width:100%;
		height:100%;
		border:2px solid black;
		background-color:lightblue;
	}
	#head{
		margin-top:3%;
		margin-left:32%;
		font:italic bold 25px/30px Georgia, serif;
		color:#266E69;
	}
	#card{
		margin-top:10%;
		margin-left:38%;
		width:20%;
		height:5%;
		background-color:#266E69;
		color:white;
		font: italic bold 15px/30px Georgia,serif;
	}
</style>
<body>
	<div id="row">
		<h3 id="head">Select The way you want to continue</h3>
		<form action="Credit_Card_Info.php" method="post">
			<button for="card" id="card"  name="card">Credit Card</button>
		</form>
	</div>
	<?php
		session_start();
		if(!(isset($_SESSION['amount']) && isset($_SESSION['Email'])))
		{
			header("Location:payment.php");
			exit();
		}
		$amount=$_SESSION['amount'];
		$email=$_SESSION['Email'];
		$time=$_SESSION['timestart'];
		$url="Information.php";
	?>
</body>
</html>