<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link type="text/css" rel="stylesheet"  href="reg.css"/>
<table width="100%" border="2">
        <tr> 
       
	  <td><strong><font color="#6600CC">First name</font></strong></td>
          <td><strong><font color="#6600CC">Last name</font></strong></td>
          <td><strong><font color="#6600CC">Email</font></strong></td>
          <td><strong><font color="#6600CC">Password</font></strong></td>
          <td><strong><font color="#6600CC">Address</font></strong></td>
	  <td><strong><font color="#6600CC">Address</font></strong></td>
       <td><strong><font color="#6600CC">State</font></strong></td>
        <td><strong><font color="#6600CC">Zipcode</font></strong></td>
         <td><strong><font color="#6600CC">Phone Number</font></strong></td>
         </tr>

         <?PHP
	$servername = "localhost";
$username = "root";
$password = "Password123";
	$db_name = "regform";
	
	$conn = @mysql_connect($servername,$username,$password); 
	mysql_select_db($db_name,$conn);

	$sql = "SELECT * from regform where Firstname='Bharath'";
	$result = mysql_query($sql);
	
	
	while($row = mysql_fetch_array($result))
    {
    ?>
    
        <tr> 
          <td><?php echo $row['Firstname']; ?></td>
          <td><?php echo $row['Lastname']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Password']; ?></td>
          <td><?php echo $row['Address']; ?></td>
          <td><?php echo $row['Address2']; ?></td>
           <td><?php echo $row['State']; ?></td>
            <td><?php echo $row['Zipcode']; ?></td>
             <td><?php echo $row['Phonenumber']; ?></td> 
                   
        </tr>
	<?php
	}
	?>
</table>
</br>
<center>
    <a href="index.html"><button name = "home" type="button" class="register">Home</button></a>
</center>
<body>
</body>
</html>