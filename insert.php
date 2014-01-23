<html>
<head>
<style type="text/css">
body {background-image:url('272764_unnamed--2a54127648.jpg');}
p {font-family:'Comic Sans';font-size:15pt;color:aqua;font-style:italic}
</style> 
</head>
<body><center>
<?php
$uname=$_GET["uname"];
$email=$_GET["email"];
$password=$_GET["pword"];
mysql_connect("localhost","root","");
mysql_select_db("fans");
$res=mysql_query("insert into userinfo values('$uname','$email','$password')");
if($res)
{
print"<p>$uname is now a registered user<br /><a href=login.html>click to login</a></p> ";
}
else
{
print"<p>$uname already exists for another user</p><br /><a href=register.html>try again</a>";
}
?>
</center>
</body>
</head

