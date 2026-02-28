<?php
include("dbconnect.php");
session_start();
extract($_POST);
echo $fname=$_SESSION['un'];
if(isset($_POST['btn1']))
{
$qry=mysqli_query($conn,"update query set status='1',answer='$ans' where advisorname='$fname'");
if($qry)
{
?>
<script language="javascript">
	alert("Answer send to your User");
	//window.location.href="nutritiondetails.php";
	</script>
	<?php
}
else
{
?>
<script language="javascript">
alert("Send Unsuccessfully..");
window.location.href="answer.php";
</script>
	<?php
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FARMING ASSISTANT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<style type="text/css">
<!--
.style10 {
	font-size: 14px;
	color: #000000;
}
.style11 {color: #000000}
.style13 {font-size: 14}
.style36 {font-size: 12px; font-weight: bold; }
.style29 {font-size: 14; font-weight: bold; }
-->
</style>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Nullamlacus dui ipsum</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="topbox">
        <h2>Teachers Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="teachername">Username:
              <input type="text" name="teachername" id="teachername" value="" />
            </label>
            <label for="teacherpass">Password:
              <input type="password" name="teacherpass" id="teacherpass" value="" />
            </label>
            <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="teacherlogin" id="teacherlogin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <div class="topbox last">
        <h2>Pupils Login Here</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="pupilname">Username:
              <input type="text" name="pupilname" id="pupilname" value="" />
            </label>
            <label for="pupilpass">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="pupillogin" id="pupillogin" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">Modern Agriculture Development </a></h1>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WEB SERVICE</p>
    </div>
    <div id="topnav">
      <ul>
       <li ><a href="ahome.php">Home</a></li>
        <li><a href="answer.php">Answer</a></li>
        <li class="active"><a href="fview.php">Farmer Details</a></li>
        <li><a href="index.php">LogOut </a></li>
       
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    <img src="images/im-human-resources-management-1000x500.jpg" width="970" height="300" />
	<br />
    <h1>Welcome To Farmer Login </h1>
    <p align="justify">&nbsp; </p>
    <form id="form1" name="form1" method="post" action="">
      <p align="center" class="style23 style10"><strong>Farmer Details  </strong></p>
      <table width="100%" border="1">
        <tr>
          <td width="11%" height="32"><div align="center" class="style29">Name</div></td>
          <td width="4%"><div align="center" class="style29">Age</div></td>
          <td width="8%"><div align="center" class="style29">Gender</div></td>
          <td width="16%"><div align="center" class="style29">MobileNumber</div></td>
          <td width="11%"><div align="center" class="style29">EmailId</div></td>
          <td width="9%"><div align="center" class="style29">Address</div></td>
          <td width="9%"><div align="center" class="style29">District</div></td>
          <td width="7%"><div align="center" class="style29">State</div></td>
          <td width="12%"><div align="center" class="style29">AadhaarNo</div></td>
          <td width="13%"><div align="center" class="style29">LandDetails</div></td>
        </tr>
        <?php
   
			   $ert=mysqli_query($conn,"select * from freg");
while($row=mysqli_fetch_array($ert))
	 	 {
		 

	 ?>
        <tr>
          <td height="33"><div align="center"><?php echo $row['UserName'];?></div></td>
          <td><div align="center"><?php echo $row['Age'];?></div></td>
          <td><div align="center"><?php echo $row['Gender'];?></div></td>
          <td><div align="center"><?php echo $row['MobileNumber'];?></div></td>
          <td><div align="center"><?php echo $row['EmailId'];?></div></td>
          <td><div align="center"><?php echo $row['Address'];?></div></td>
          <td><div align="center"><?php echo $row['District'];?></div></td>
          <td><div align="center"><?php echo $row['State'];?></div></td>
          <td><div align="center"><?php echo $row['AadhaarNo'];?></div></td>
          <td><div align="center"><?php echo $row['LandDetails'];?></div></td>
        </tr>
        <?php
	}
	
	?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
    <p align="justify"><br />
      <strong> </strong></p>
  </div>
</div>
<br />
<br />
<!-- ####################################################################################################### -->
<div class="wrapper col4"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">HRMS</a></p>
    <p class="fl_right">Desing by <a target="_blank" href="" title="Free Website Templates"></a><br class="clear" />
  </p>
  </div>
</div>
</body>
</html>