<html>
<head><title>logging in</title></head>
<body>
<?php
$uname=$_GET["uname"];
$password=$_GET["pword"];
mysql_connect("localhost","root","");
mysql_select_db("fans");
$res=mysql_query("select * from userinfo where uname='$uname' and pword='$password'");
if($res)
{
print"<p>$uname is now logged in</p>";
print"<form method=get action=howlong.php>";
print"<input type=hidden name=uname value=$uname/>";
print"<input type=submit value='start voting'/><form>";
}
else
{
print"<p>login failed</p><br /><a href=login.html>try again</a>";
}
?>
</body>
</html>
