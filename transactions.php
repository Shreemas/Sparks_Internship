<!DOCTYPE html>
<html>
<head>
	<title>Transaction Status</title>
   <style>
      button
      {
         padding:20px;
         font-size: 30px;
         border-radius: 20px;
         margin:30px;
         background-color:#a67687;
         color:#c6d7eb;
         border:1px solid #c6d7eb;
      
   </style>
</head>
<body style="background-color:#a67687;color:#c6d7eb;">
   <div style="display:flex;flex-direction: row;justify-content: center;">
   <button onclick="window.location.href='home.html'">Go to Home</button>
   <button onclick="window.location.href='view_customers.php'">View Customers</button>
   <button onclick="window.location.href='all_transaction_table.php'">All Transactions</button>
   </div>
	<div style="display: flex;justify-content: center;align-items: center;border-radius: 20px;font-size: 30px;">
        
      

      <img style="float:left;" src="check-circle.gif">
      <br>
     <!-- <h2 style="clear:left;">Transaction is successful!!</h2>-->


<?php
   $conn=mysqli_connect('localhost','root','','SparksDB');
   if(!($conn))
   {
      die("Error occured");
   }
   $id=rand(1,100);

   $r_name=$_GET['receiver'];
   $amount=$_GET['amount'];
   $s_name="Tanvi";
   $q2="update customers set balance=balance+'$amount' where name='$r_name'";
   mysqli_query($conn,$q2);
   $q1="INSERT INTO TRANSFERS values('$id','$s_name','$r_name','$amount')";
   mysqli_query($conn,$q1);
   //if(!($q2))
   	 // echo "Error occured";
  ?>
   </div>
</body>
</html>