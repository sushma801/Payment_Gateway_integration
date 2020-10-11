<html>
<script>
		function Activity()
		{
			window.alert("Transactio is Failed");
			window.location.href="index.php";
		}
</script>
<style>
	#row{
		width:100%;
		height:100%;
		border:2px solid black;
		background-color:lightblue;
	}
	#head{
		color:#266E69;
		padding-left:32%;
		font: italic  bold 28px/30px Georgia, serif;
	}
	#left{
		float:left;
		background-color:lightblue;
		margin-top:0;
		width:100%;
		height:90%;
	}
	#name,#card_no,#date,#month,#year,#cvv,#pin1{
		margin-top:2%;
		margin-left:35%;
		color:#266E69;
		font: italic  bold 23px/30px Georgia, serif;
	}
	#Hname,#card_number,#Emon,#Eyear,#cvvE,#pin{
		margin-top:0.6%;
		margin-left:35%;
		margin-bottom:0.6%;
		width:20%;
		height:4%;
		color:#266E69;
		font: italic  bold 11px/30px Georgia, serif;
	}
	#submit,#back{
		margin-left:35%;
		margin-top:0.6%;
		margin-bottom:0.6%;
		width:20%;
		height:5%;
		background-color:#266E69;
		color:white;
		font: italic bold 15px/30px Georgia,serif;
	}
</style>
<body>
<div id="row">
	<h3 id="head">Enter Your Card Details</h3>
	<div id="left">
		<form action="Information.php" method="post">
			<label for="name" id="name">Card Holder Name</label><br>
			<textarea type="text" id="Hname" name="Hname" placeholder="Card Holder Name" required></textarea><br>
			
			<label for="card_no" id="card_no">Enter Card Number</label><br>
			<textarea type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
			maxlength="16" id="card_number" name="card_number" placeholder="Card Number" required></textarea><br>
			
			<label for="date" id="date">Valid Upto</label><br>
			<label for="month" id="month">Month</label><br>
			<textarea type="number" id="Emon" name="Emon" max="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
			maxlength="2" placeholder="MM" required></textarea><br>
			
			<label for="year" id="year">Year</label><br>
			<textarea type="number" id="Eyear" name="Eyear" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
			maxlength="4" placeholder="YYYY" required></textarea><br>
			
			<label for="cvv" id="cvv">CVV</label><br>
			<textarea type="text" maxlength="3" id="cvvE" name="cvvE" placeholder="CVV" required></textarea><br>
			
			<label for="pin" id="pin1">PIN</label><br>
			<input type="password" id="pin" name="pin" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
			maxlength="4" placeholder="PIN" required><br>
			<button type="submit"  name="submit" id="submit">Submit</button>
		</form>
			<button type="submit"  onclick="Activity()" id="back">Back</button>
	</div>
</div>
</body>
</html>