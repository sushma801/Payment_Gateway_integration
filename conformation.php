<html>
	<style>
		#left{
			padding-left:5%;
			float:left;
			background-color:lightblue;
			font: italic  bold 15px/30px Georgia, serif;
			border:1px solid black;
			width:100%;
			height:100%;
		}
		#ok{
			margin-top:5%;
			margin-left:35%;
			width:10%;
			height:5%;
			background-color:#266E69;
			color:white;
			font: italic  bold 20px/30px Georgia, serif;
		}
	</style>
	<body>
		<div id="left">
		<?php
			session_start();
			$name=$_SESSION['name'];
			$amount=$_SESSION['amount'];
			print 'Dear '.$name.',<br><br>';
			print str_repeat("&nbsp;",30);
			print 'We are thankfull for your Donattion of Amount '.$amount.'Rs. in the Happy world Organization.<br><br>';
			print str_repeat("&nbsp;",140);
			print 'Thanks From Team of Happy World<br><br>';
			session_destroy();
		?>
			<input type="submit" value="OK" id="ok" onclick='window.location.href="index.php"'>
		</div>
		
	</body>
</html>