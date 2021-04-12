<!DOCTYPE html>
<html>
<head>
	<title>All Transaction table</title>
	<style>
		tr:nth-child(even)
		{
           background-color:#0d1137;;
		}
		
	</style>
</head>
<body style="display: flex;justify-content: center;align-items: center;flex-direction: column;background-color:#a67687;color:#c6d7eb;">
	<h1>All transction table</h1>
	<table style="font-size: 25px;" >
		<tr>
			<th>Receiver name</th>
			<th>Amount</th>
        </tr>
   <?php
          $conn=mysqli_connect('localhost','root','','SparksDB');
          if(!($conn))
          {
          	die("Connection failed".mysqli_connect_error());
          }
          $q1="select * from transfers";
          $q2=mysqli_query($conn,$q1);
          while($row=mysqli_fetch_array($q2))
          {
          	print "<tr>";
          	print "<td>".$row['r_name']."</td>";
          	print "<td>".$row['amount']."</td>";
          	print "</tr>";
          }
   ?>
   <button style="border-radius:20px;padding: 10px;font-size: 30px;background-color:#a67687;color:#c6d7eb;border-color:#c6d7eb" onclick="window.location.href='home.html'">Home</button>
</body>
</html>