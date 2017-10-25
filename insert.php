<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

mysql_connect("localhost","root","Password123") or die(mysql_error());
echo "connection to the database was successful........!<br>";
$dbase_name="regform";
mysql_select_db($dbase_name) or die(mysql_error());
echo "<br>database  " .$dbase_name."    is selected<br>";
   $Firstname = $_POST['fname'];
   $Lastname = $_POST['lname'];
   $Email = $_POST['ename'];
   $Password= $_POST['Pass1'];
   $Address = $_POST['address'];
   $Address2 = $_POST['address2'];
   $State = $_POST['State'];
   $Zipcode = $_POST['zipcode'];
   $Phonenumber= $_POST['Phone'];
   $query="insert into regform values('".$Firstname."','".$Lastname."','".$Email."','".$Password."','".$Address."','".$Address2."','".$State."','".$Zipcode."','".$Phonenumber."')";
mysql_query($query) or die(mysql_error());
 echo " values are inserted into RegistrationForm table.....";

?>
<center>
    <a href="index.html"><button name = "home" type="button" class="register">Home</button></a>
</center>
