<!DOCTYPE html>
<html>
<head>
	<title>View Individual</title>
	<style>
		span
		{
			padding:5px;
		}
	</style>
</head>
<body style="display: flex;flex-direction:column;justify-content: center;align-items: center;background-color:  #a67687;color:#c6d7eb;">
	<button style="border:1px solid #c6d7eb;padding:15px;border-radius: 20px;background-color:#a67687;color:#c6d7eb;font-size: 30px;margin-bottom: 20px;margin-top:20px;" onclick="window.location.href='view_customers.php'">Back</button>

    <?php
    //#0d1137;
       $conn=mysqli_connect('localhost','root','','SparksDB');
       if(!($conn))
         die("Unable to establish connection".mysqli_connect_error());
       $name=$_GET['name'];
       $r1="select * from customers where name='$name'";
       $email=mysqli_query($conn,$r1);
       $row=mysqli_fetch_array($email);
       print "<div style='border-radius:20px;width:60%;border:2px solid #c6d7eb;padding:20px;background-color:#a67687; 
       display:flex;justify-content:center;align-items:center;font-size:30px;'>";
       print "<img style='border-radius:50px;' src=user.png>";
       print "<span>Name :".$name."<span>";
       print "<br>";
       print "<span>E-mail :".$row['email']."</span>"; 
       print "<br>";
       print "<span>Balance  :".$row['balance']."</span>";
       print "</div";
       

    
    ?>
   
  
</body>
</html>