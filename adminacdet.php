<html>

<head>

<title> Banking Project </title>

</head>

<body bgcolor=#008080>

<img src="Images\online banking h1png.png"> <br><br>
<?php
include("connection.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  //echo("working");
  $v1=$_POST['text1'];
  $v2=$_POST['text2'];
  $v3=$_POST['text3'];
  $v4=$_POST['text4'];
  //echo $v1." ".$v2;
  $sqlvar="insert into actypeTab values('$v1','$v2','$v3',$v4)";
  $result=$conn -> query($sqlvar);
  if($result)
  {
    $res="Record Inserted";
  }
  else
  {
   $res="Record not Inserted, some problem";
  }
}
?>

<form name=form1 method="post"action="adminacdet.php">

  <table width="80%" border=1 cellspacing=5 cellpadding=5 align=center>

  <tr> <td colspan=2> Ac Type Details Entry </td> </tr>

  <tr> <td> AcName </td> <td> <input type=text name=text1> </td> </tr>

  <tr> <td > AcDetails </td> <td> <input type=text name=text2> </td> </tr>
  <tr> <td > Facilities </td> <td> <input type=text name=text3> </td> </tr>
  <tr> <td >MinBalance </td> <td> <input type=text name=text4> </td> </tr>

  <tr> <td><a href=adminmainpage.php>Previous</a> </td> <td> <input type=submit name=Login style="height:45px; width:150px"> </td> </tr>
  <tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>
</form>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="Images\head11 png.png">

</body>
</html>
