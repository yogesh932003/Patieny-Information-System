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
}
.style2 {font-size: 24px}
.style4 {font-size: 18px; font-weight: bold; }
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
          <td><strong><a href="adminhome.php">Home</a></strong></td>
        </tr>
        <tr>
          <td><strong><a href="viewhospital.php">View Hospital</a></strong></td>
        </tr>
        <tr>
          <td><strong><a href="viewuser.php">View Patient</a></strong></td>
        </tr>
        <tr>
          <td><strong><a href="index.php">Logout</a></strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="544">&nbsp;</td>
        </tr>
      </table></td>
       <td width="83%"  valign="top"><div align="center" class="style2">Download Your Reports</div>          
        <p>&nbsp;</p>
       <table width="100%" align="center" style="height:200px;">
	
		    <tr>
          <td width="1%">&nbsp;</td>
          
		   <td ><div align="center" class="style6"><strong>id</strong> </div></td>
		        <td ><div align="center" class="style6"><strong>Report Details</strong> </div></td>
		   <td ><div align="center" class="style6"><strong>Hospital Name</strong> </div></td>
		    <td ><div align="center" class="style6"><strong>Download report</strong> </div></td>
				 
	        </tr>
		
		<?php
		
		$qry1=mysqli_query($conn,"select * from  book ");
		while($row1=mysqli_fetch_array($qry1)){
		
		 ?>
		
	
	      <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row1['id'];?></div></td>
			<td><div align="center"><?php echo $row1['test'];?></div></td>
	
		   <td><div align="center"><?php echo $row1['hname'];?></div></td>
			  <td><div align="center"><a href="files\<?php echo $row1['fname'];?>" download>Download Report</a></div></td>
			
			   
			  	 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
					
		
		</tr>
		
        <?php

		}
		
		
	
		
		?>
				
				
				<tr>
		<td colspan="6" align="center">&nbsp;</td>
		</tr>
		
</table>

</body>
</html>
