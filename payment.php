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
	#mail,#amount{
		margin-top:3%;
		margin-left:40%;
		font:italic bold 18px/30px Georgia, serif;
		color:#266E69;
	}
	#Email,#rs{
		margin-top:2%;
		margin-left:33.5%;
		font: italic bold 11px/30px Georgia,serif;
		width:20%;
		height:5%;
	}
	#next,#back{
		margin-left:33.5%;
		width:20%;
		height:5%;
		background-color:#266E69;
		color:white;
		font: italic bold 15px/30px Georgia,serif;
	}
</style>
<body>
	<div id="row">
		<h3 id="head">Welcome to Payment Page</h3>
		<br>
		<form action="payment.php" method="post" id="form">
			<label for="mail" id="mail">E-mail</label><br>
			<textarea type="email" name="Email" id="Email" placeholder="E-mail" required></textarea><br><br>
			<label for="amount" id="amount" >Amount</label><br>
			<textarea type="number" id="rs" name="rs" placeholder="Amount" required></textarea><br><br><br>
			<button id="next" name="next">Next</button>
		</form>
		<button id="back" onclick="BackMethod()">Back</button>
	</div>
	<script>
		function BackMethod()
		{
			window.history.back();
		}
	</script>
	<?php
		session_start();
		unset($_SESSION['amount']);
		unset($_SESSION['Email']);
		if(isset($_POST['rs'])&& isset($_POST['Email']))
		{
			$timestart=time();
			$amount=$_POST['rs'];
			$mail=$_POST['Email'];
			$_SESSION['amount']=$amount;
			$_SESSION['Email']=$mail;
			$_SESSION['timestart']=$timestart;
			$url="selectMode.php";
			header('Location: '.$url);
			exit();
		}
	?>
</body>
</html>