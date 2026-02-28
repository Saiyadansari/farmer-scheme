<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uname=$_SESSION['fname'];



	


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
.style11 {color: #000000}
.style12 {color: #0099FF}
.style13 {
	color: #0066FF;
	font-size: 24px;
}
.style18 {color: #000000; font-weight: bold; }
.style30 {color: #0066FF; font-weight: bold; font-size: 18px; }
.style36 {font-size: 12px; font-weight: bold; }
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
        <li><a href="farmerhome.php">Home</a></li>
       
        
       
		<li class="active"><a href="search.php">Search Scheme</a></li>
        <li class="last"><a href="index.php"><strong>Logout</strong></a></li>
		
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
  <div align="center"><img src="images/humanresource_management_system_djs.jpg" width="693" height="100" /></div><br />
    <h1 class="style12">Welcome To Farmer Home </h1>
    <p align="center" class="style30">Scheme Details </p>
    <p align="center">&nbsp;</p>
    <form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0">
        <tr>
          <td width="33%" height="65"><div align="center" class="style9">
              <p class="style17">SeasonName</p>
          </div></td>
          <td width="67%"><p>
              <input name="sname" type="text" id="sname" />
              <input name="btn1" type="submit" id="btn1" value="Search" />
          </p></td>
        </tr>
      </table>
	   <?php
		if(isset($_POST['btn1'])){
		?>
    <table width="100%" border="1">
        <tr>
          <td width="11%" height="32"><div align="center" class="style35">Sl.No</div></td>
          <td width="4%"><div align="center" class="style35">Scheme Name</div></td>
          <td width="8%"><div align="center" class="style35">Amount</div></td>
          <td width="16%"><div align="center" class="style35">Percentage</div></td>
      
        </tr>
        <?php
		
  $i=1;
			   $ert=mysqli_query($conn,"select * from scheme where sname='$sname'");
while($row=mysqli_fetch_array($ert))
	 	 {
		 

	 ?>
        <tr>
          <td height="33"><div align="center"><?php echo $i;?></div></td>
          <td><div align="center"><?php echo $row['sname'];?></div></td>
          <td><div align="center"><?php echo $row['amnt'];?></div></td>
          <td><div align="center"><?php echo $row['per'];?></div></td>
        
        </tr>
        <?php
	}

	?>
	</table>
            <?php
	}

	?>
     
    
      <br />
      <br />
<p align="center"></p>
    </form>
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