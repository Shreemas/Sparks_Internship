<html>
  <head>
     <title>View Customers</title>
     <style>
     	tr:nth-child(even)
     	{
     		background-color: #0d1137;;
     	}
     	tr,td
     	{
     		padding:10px;
     	}
     	
     </style>
  </head>

  <body style="display:flex;justify-content:center;align-items:center;flex-direction:column;background-color:#a67687;color:#c6d7eb;">
      <button style="float:center;border:1px solid #c6d7eb;;padding:15px;border-radius: 20px;font-size: 30px;margin-bottom: 20px;margin-top:20px;background-color: #a67687;color:#c6d7eb;" onclick="window.location.href='home.html'">Go to home</button>
  	<h2 style="text-align: center;font-size:40px;">Customer details</h2>
  	<table style="display:flex;justify-content:center;align-items:center;					font-size: 30px;width: 100%;border-collapse: collapse;" >
  		
  		<tr  bgcolor="">
  			<th>Name</th>
  			<th>Details</th>
  			<th>Transfer</th>

  		</tr>

<?php
   $conn=mysqli_connect('localhost','root','','SparksDB');
   if(!($conn))
   	 die("Connection failed".mysqli_connect_error());
   $r1="select name from customers";
   $r2=mysqli_query($conn,$r1);
   while($row=mysqli_fetch_array($r2))
   {
   	  $name=$row['name'];
   	  print "<tr>";
   	  print "<td>".$row['name']."</td>";

   	  print "<td>
   	  <button style=background-color:#a67687;border-radius:20px;padding:10px;border-color:#c6d7eb;>
   	  <a style=text-decoration:none;color:#c6d7eb;font-size:20px;
      href=view_individual.php?name=$row[name]>
   	  View
   	  </a>
   	  </button></td>";

   	   print "<td>
   	  <button style='background-color:#a67687;border-radius:20px;padding:10px;border-color:#c6d7eb;'>
   	  <a style='text-decoration:none;color:#c6d7eb;font-size:20px;' href=transfer_money.php?name=$row[name]>
   	  Transfer
   	  </a>
   	  </button></td>";
   	  print "</tr>";


   }
?>
	
</body>
</html>