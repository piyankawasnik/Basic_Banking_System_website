<html>

<head>

<title> Banking Project </title>

</head>
<style>
body {
   font-size:20px;
}

table{
   font-size:20px;
}

</style>
<body bgcolor=#008080>

<img src="Images\online banking h1png.png"> <br><br>
<table align=center border=1 width=80% cellpadding=5 cellspacing=5 >

  <tr><td colspan=5> <h2>Trtansaction List</h2> </td></tr>
<tr><td> Trtan No </td><td> Date </td><td> Ac No </td><td>Debit Amt</td><td>Creadit Amt</td></tr>
<?php
include("connection.php");

  $sqlvar="select* from TranTab order by TranNo desc";
  $result=$conn -> query($sqlvar);
  while($row=$result->fetch_row()){
       echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>");
   }
?>
</table>
<a href=adminmainpage.php>Previous </a>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="Images\head11 png.png">

</body>
</html>
