<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

	if(isset($_POST['btn']))
	{
	$max_qry = mysqli_query($conn,"select max(id) from hospital");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysqli_query($conn,"insert into hospital values('$id','$name','$spec','$loc','$address','$email','$phone','$uname','$password')");
		if($qry)
		{
		echo"<script> alert('Inserted sucessfully')</script>";
		
		}
		else
		{
		echo "<script> alert('Enter the fields correctly')</script>";
		}
		}
?>


 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style3 {font-size: 18px}
.style5 {	font-size: 24;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>    <td height="101" bgcolor="#CCCCCC"><span class="style1">PATIENT INFORMATION  SYSTEM</span></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td colspan="2" valign="top" bgcolor="#F5F5F5"><table width="85%" border="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><strong><a href="index.php">Home</a></strong></td>
          </tr>
          <tr>
            <td><strong><a href="admin.php">Admin</a></strong></td>
          </tr>
          <tr>
            <td><strong><a href="hospital.php">Hospital</a></strong></td>
          </tr>
		  <tr>
            <td><strong><a href="user.php">Patient</a></strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
      </table></td>
      <td width="83%" colspan="6"><div align="center"><img src="files/002.jpg" alt="[" width="1000" height="300" />
      </div>
        <table width="100%" border="0" align="center">
          <tr>
            <td colspan="5 " align="center"><strong>Enter Hospital Details </strong></td>
	  </tr>
          <tr>
            <td colspan="5">&nbsp;</td>
	  <td width="21%"></td>
      <tr>
        <td width="8%">&nbsp;</td>
        <td width="18%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="21%">&nbsp;</td>
        <td width="17%">&nbsp;</td>
      </tr>
          <tr>
            <td height="31">&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style6">Hospital Name</span></td>
        <td><label>
          <input name="name" type="text" id="name" required/>
          </label></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          
          <tr>
            <td height="35">&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style6">Specialization</span></td>
        <td><input name="spec" type="text" id="spec" required/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          
          <tr>
            <td height="35">&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style6">Location</span></td>
        <td><input name="loc" type="text" id="loc" required/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          
          <tr>
            <td height="35">&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style6">Address</span></td>
        <td><textarea  name="address" id="address" required></textarea></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          
          <tr>
            <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style6">Email Id </span></td>
        <td><input name="email" type="text" id="email" required/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          
          
          
          
          <tr>
            <td height="32">&nbsp;</td>
        <td>&nbsp;</td>
        <td><span class="style6">Contact no</span></td>
        <td><input name="phone" type="text" id="phone" required/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          <tr>
            <td height="30">&nbsp;</td>
        <td>&nbsp;</td>
        <td>User Name </td>
        <td><label>
          <input name="uname" type="text" id="uname" required/>
          </label></td>
      </tr>
          <tr>
            <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Password</td>
        <td><input name="password" type="password" id="password" required/></td>
      </tr>
          <tr>
            <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
          <tr>
            <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="btn" type="submit" id="btn" value="Submit" />
          <input type="reset" name="Submit2" value="Reset" /></td>
      </tr>
          <tr>
            <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
	    <td>&nbsp;</td>
        <td>&nbsp;</td>
	    </tr>
        </table>
      </td></tr>
  </table>
</form>
</body>
</html>
