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
  <tr><td colspan=5 align=left ><h3><a href =custlogin.php >Click here to Login</a> <h3> </td></tr>
<tr><td colspan=5 ><h3>Please select the Account Type then Signup <h3> </td></tr>
<tr><td>id </td><td> AC Name </td><td> Details </td><td> Facilities </td><td> Min Bal </td></tr>
<?php
include("connection.php");

  $sqlvar="select* from actypeTab order by actypename";
  $result=$conn -> query($sqlvar);
  while($row=$result->fetch_row()){
       echo("<tr><td><a href=custsignup.php?actype=".$row[0].">".$row[0]."<a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>");
   }
?>
</table>
<a href=mainpage.php>Previous </a>

<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="Images\head11 png.png">

</body>
</html>
