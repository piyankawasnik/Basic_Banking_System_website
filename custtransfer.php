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

 echo(date('Y/m/d'));

if($_SERVER['REQUEST_METHOD']=='POST')
{
  //echo("working");
  $v1=$_SESSION['acno'];
  $v2=$_POST['text2'];
  $v3=$_POST['text3'];

  $nvar=1001;
  $sqlvar="select max(tranno) + 1 from tranTab";
  $result=$conn -> query($sqlvar);
  if($row=$result->fetch_row())
  {
    $nvar=$row[0];
  }
 if($nvar===null){$nvar=1001;}
 //echo($nvar);
$d1=date('Y/m/d');
  //echo $v1." ".$v2;
  $sqlvar="insert into tranTab values($nvar,'$d1',$v1,0,$v2,'$v3')";

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

<form name=form1 method="post"action="custtransfer.php">

  <table width="80%" border=1 cellspacing=5 cellpadding=5 align=center>

  <tr> <td colspan=2>Transfer Money </td> </tr>

  <tr> <td>To AcNo </td> <td> <input type=text name=text1> </td> </tr>

  <tr> <td > Amount</td> <td> <input type=text name=text2> </td> </tr>
  <tr> <td > TransferDetails</td> <td> <input type=text name=text3> </td> </tr>


  <tr> <td><a href=custmainpage.php>Previous</a> </td> <td> <input type=submit name=Login style="height:45px; width:150px"> </td> </tr>
  <tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>
</form>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="Images\head11 png.png">

</body>
</html>
