<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
echo $name=$_SESSION['hname'];
if(isset($_POST['btn']))
{

	

      $fname = $_FILES['file']['name'];
     $file_tmp =$_FILES['file']['tmp_name'];
   

  move_uploaded_file($_FILES['file']['tmp_name'],"files/".$fname);
  
	$qry=mysqli_query($conn,"Insert into book values ('','$uname','$test','$fname','$name')");
	if($qry)
	{
	
	echo "<script>alert('Upload sucessfully')</script>";
	
	}
	else
	{
	
		echo "failed";
	
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
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
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
          <td><strong><a href="hospitalhome.php">Home</a></strong></td>
        </tr>
        <tr>  <td><strong><a href="addoxygen.php">Add Patient Details </a></strong></td>
        </tr>
        <tr>
          <td><strong><a href="viewuser1.php">View Patient</a></strong></td>
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
      <td width="83%" colspan="6" valign="top"><div align="center" class="style2">Add Patient Details</div>          
        <form  method="post" action="#"  enctype="multipart/form-data">
  <table width="38%" border="0" align="center">

  
   <tr>
     
      <td width="38%" height="45">Select Patient Name</td>
      <td width="62%"><select name="uname" required>
      
	  <option value="">Select</option>
	  
	  <?php
	
	    $q1=mysqli_query($conn,"select * from  register where hname='$name';");
	 while($r1=mysqli_fetch_array($q1)){
	 
	 
	
	  ?>
	  <option value="<?php echo $r1['uname']?>"><?php echo $r1['uname']?></option>
	
	  <?php
	
	  }
	  ?>
	  </select>
	  </td>
      
    </tr>
	
	
	
	 <tr>
     
      <td height="43"> About Report</td>
      <td>
        <input name="test" type="text" id="test" required/>
      </td>
     
    </tr>
	
	  <tr>
     
      <td height="43">Upload Report</td>
      <td>
        <input name="file" type="file" id="file" required/>
      </td>
     
    </tr>
	
	<tr>
      <td height="51">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>

</body>
</html>
 
