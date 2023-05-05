<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from hospital where uname='$uname' && password='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
$rt=mysqli_fetch_array($qry);
$name=$rt['name'];
$_SESSION['hname']=$name;
?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:hospitalhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

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
      <td width="83%" colspan="6"><table width="46%" border="0" align="center"><img src="files/002.jpg" width="1000" height="300">
        <tr>
          <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Hospital Login</font> </div></td>
        </tr>
        <tr>
          <td width="48%">&nbsp;</td>
          <td width="52%">&nbsp;</td>
        </tr>
        <tr>
          <td></tr>
        
        <tr>
          <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
          <td><label>
            <input name="uname" type="text" id="uname" required/>
          </label></td>
        </tr>
        <tr>
          <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
          <td><label>
            <input name="password" type="password" id="password" required/>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td rowspan="2"><label>
            <input name="btn" type="submit" id="btn" value="Login" />
            <input type="reset" name="Submit2" value="Cancel" />
            <a href="hospitalregister.php">Register</a> </label></td>
        </tr>
      </table>
      
   
</form>
</body>
</html>
