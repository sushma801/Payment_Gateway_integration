<?php
session_start();
	if(!isset($_SESSION['amount']))
		{
			header("Location:payment.php");
			exit();
		}
	//CREATING CONNECTION
	$conn=mysqli_connect('localhost','root','','payment');
	//STORING THE OLD VARIABLE VALUE
	$amount=$_SESSION['amount'];
	$to_email=$_SESSION['Email'];
	$time1=$_SESSION['timestart'];
	$name=strtoupper($_POST['Hname']);
	$_SESSION['name']=$name;
	$Card_number=$_POST['card_number'];
	$cvv=$_POST['cvvE'];
	$month=$_POST['Emon'];
	$year=$_POST['Eyear'];
	$pin=$_POST['pin'];
	$time=time();
	//CREATING NEW VARIABLE FOR THE TRACK OF Balance
	$oldbalance="";
	$newbalance="";
	$oldbalanceCompany="";
	$newbalanceCompany="";
	//QUERY FOR DATABASE IT SELECT A ROW WHICH SATISFIEY THE CARD DETAILS
	$sql="SELECT  * FROM credit_card WHERE Name='".$name."' AND card_no='".$Card_number."' AND month='".$month."' AND year='".$year."' 
	AND cvv='".$cvv."' AND pin='".$pin."' limit 1";
	
	$result=$conn->query($sql);
	//IF ANY ROW SATISFIEY THE CARD DETAILS THEN STORE OLD Balance OF THAT CANDIDATE ELSE GIVE ERROR MESSAGE
	if($result=$conn->query($sql))
	{
		while($row=$result->fetch_assoc())
		{
			$oldbalance=$row['balance'];
		}
	}
	else
	{
		print "Something Went Wrong!";
	}
	//THE ORGANIZATION IN WHICH Balance IS TO BE SEND
	$sql2="SELECT balance FROM organization WHERE company='HappyWorld' AND 
		account_No='0000001234568033' ";
		if($result1=$conn->query($sql2))
		{
			while($row=$result1->fetch_assoc())
			{
				$oldbalanceCompany=$row['balance'];
			}
		}
	//IF CANDIDATE OLD Balance IS GREATER THAN THE AMOUNT HE ENTERED FOR Donation THEN FOLLOWING OPERATION PERFORMED ELSE GIVE ERROR MESSAGE
	if($oldbalance>$amount)
	{
		$newbalance=$oldbalance-$amount;
		$sql1="UPDATE credit_card SET balance='".$newbalance."' WHERE card_no='".$Card_number."' AND 
		cvv='".$cvv."' AND month='".$month."' AND year='".$year."'";
		$newbalanceCompany=$oldbalanceCompany+$amount;
		$sql3="UPDATE organization SET balance='".$newbalanceCompany."' WHERE account_No='0000001234568033'";
		
		if($conn->query($sql1)==TRUE && $conn->query($sql3))
		{
			print '<script type="text/javascript">';
			print 'alert("Transaction Successful");';
			print 'alert("Thank You for Donation");';
			print 'window.location.href="conformation.php"';
			print '</script>';
		}
	}
	else if($oldbalance<$amount){ 
		print '<script type="text/javascript">';
		print 'alert("In-sufficient Balance");';
		print 'window.location.href="index2.php"';
		print '</script>';
	}
?>