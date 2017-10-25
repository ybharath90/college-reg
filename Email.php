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
	$Email =$_POST["ename"];
        echo $Email;
  
	$servername = "localhost";
$username = "root";
$password = "Password123";
	$db_name = "regform";
	
	$conn = @mysql_connect($servername,$username,$password); 
	mysql_select_db($db_name,$conn);

	$sql = "select * from regform where Email='$Email'";
        $result = mysql_query($sql);
	if (mysql_num_rows($result) > 0)  {
	
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
        }
        else {
     echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email please register')
    window.location.href='reg.html';
    </SCRIPT>");
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
