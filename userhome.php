<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from admin where uname='$uname' && password='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:adminhome.php");
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
  text-align: center;
}
.style2 {font-size: 24px}
.style4 {font-size: 18px; font-weight: bold; }
.style5 {font-weight: bold}
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
          <td><strong><a href="userhome.php">Home</a></strong></td>
        </tr>
       
        <tr>
          <td><strong><a href="view.php">View Details</a></strong></td>
        </tr>
        <tr>
          <td><strong><a href="index.php">Logout </a></strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="544">&nbsp;</td>
        </tr>
      </table></td>
      <td width="83%" colspan="6" valign="top"><div align="center" class="style2">Hospital  Details</div>          
        <p>&nbsp;</p>
        <table width="80%" border="0" align="center">
          <tr>
            <td width="17%" height="30"><div align="center" class="style4 style5">
                <div align="center">Sl.No</div>
            </div></td>
            <td width="17%"><div align="center" class="style4">
                <div align="center">Hospital Name </div>
            </div></td>
            <td width="24%"><div align="center" class="style4">
                <div align="center">Specialization</div>
            </div></td>
            <td width="8%"><div align="center" class="style4">
                <div align="center">Location</div>
            </div></td>
            <td width="8%"><div align="center"><strong>Address</strong></div></td>
            <td width="8%"><div align="center"><strong>Email Id </strong></div></td>
            <td width="8%"><div align="center"><strong>Phone Number </strong></div></td>
          </tr>
          <?php
		  $i=1;
		  $qry=mysqli_query($conn,"select * from hospital");
		  while($row=mysqli_fetch_array($qry))
		  {
		  ?>
          <tr>
            <td height="34"><div align="center"><?php echo $row['id'];?></div></td>
            <td><div align="center"><?php echo $row['name'];?></div></td>
            <td><div align="center"><?php echo $row['Specialization'];?></div></td>
            <td><div align="center"><?php echo $row['Location'];?></div></td>
            <td><div align="center"><?php echo $row['Address'];?></div></td>
            <td><div align="center"><?php echo $row['email'];?></div></td>
            <td><div align="center"><?php echo $row['pnumber'];?></div></td>
          </tr>
          <?php
		  $i++;
		  }
		  ?>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
