<html>
<style>
	#row{
		width:100%;
		height:100%;
		border:2px solid black;
		background-color:lightblue;
	}
	#head,#Name{
		color:#266E69;
		padding-left:35%;
		font: italic  bold 20px/30px Georgia, serif;
	}
	#left{
		float:left;
		background-color:lightblue;
		margin-top:8%;
		width:100%;
		height:100%;
	}
	#donate{
		animation:blinkingText 1.2s infinite;
		color:#266E69;
		padding-left:30%;
		font: italic  bold 18px/30px Georgia, serif;
	}
	@keyframes blinkingText{
		0%{
			color:#266E69;
		}
		49%{
			color:#449c96;
		}
		69%{
			color:#8bc9c1;
		}
		100%{
			color:#266E69;
		}
	}
	#yes,#no{
		margin-left:35%;
		width:20%;
		height:5%;
		background-color:#266E69;
		color:white;
		font: italic bold 15px/30px Georgia,serif;
	}
	#yes{
		margin-top:8%;
	}
	#no{
		margin-top:3%;
	}
</style>
<body>
	<div id="row">
		<div id="Name">
			Sushma Kumari Shaw<br>
			Payment GateWay Integration
		</div>
		<div id="head">
			<br>Welcome to Payment Page
		</div>
		<div id="row1">
			<div id="left">
				<label for="donate" id="donate">Want To Donate Money? To The Organization </label><br>
				<button id="yes" onclick="window.location.href='payment.php';">Yes</button><br>
				<button id="no" onclick="window.location.href='index2.php';">No</button>
			</div>
		</div>
	</div>
</body>
</html>
