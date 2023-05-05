<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from admin where uname='$uname' && password='$pass'");
$num=mysqli_num_rows($qry);
if($num==1)
{
header("location:admin.php");
}
else
{
?>
<script language="javascript">
	alert("UserName && password Wrong ");
	window.location.href="index.php";
	</script>
<?php
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
  text-align: center;
}
.style3 {font-size: 18px}
.style5 {
	font-size: 24;
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="0">
  <tr><td height="101" bgcolor="#CCCCCC"><span class="style1">PATIENT INFORMATION  SYSTEM</span></td>
  </tr>
</table>
<form name="form1" method="post" action="">
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
      <td width="83%" colspan="6"><p align="center"><img src="files/001.jpg" width="1000" height="300"></p>
        <p class="style3"><span class="style5">Welcome To Patient Information System </span></p>
        <p>New technologies have improved the ability of electronically storing, transferring and sharing medical data
         also changed. At the same time, they also create serious questions about who has access to this information and
          how they are protected. The aim of PIS is to store the detailed information about the Patient like treatment 
          details, date of joining and allocated doctor. The major modules in this system are allocating the bed,
           allocating the doctor to the patient. Patient Information System project is a web portal. Main idea behind 
           developing this application is to provide a solution for hospitals to manage patient’s records and details
            in single software. Hospital management system application can manage information of patient’s details.
             The manual handling of the record is time consuming and highly prone to error. The patient also can view 
             their medical report and prescription details using this application. 
         The system also provides excellent security of data at every level of user system interaction facilities.</p>
      </td>
    </tr>
  </table>
</form>
<table width="100%" border="0">
  <tr>
    <td bgcolor="#CCCCCC"><div align="center">@2020 Designed By B20.</div></td>
  </tr>
</table>
</body>
</html>
