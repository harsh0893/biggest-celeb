<html>
<head><title>meet ur celeb!!</title>
<style type="text/css">
body {background-image:url('272764_unnamed--2a54127648.jpg');}
h1 {font-family:Helvetica;font-size:30pt;font-weight:bold;color:purple;font-style:italic}
pre {font-family:'Comic Sans';font-size:15pt;color:aqua;font-style:italic}
p,td {font-family:'Comic Sans';font-size:15pt;color:aqua;font-style:italic}
</style>
</head>
<body><center>
<p><?php
 $uname=$_GET["uname"];
 print"$uname"; ?>
 is now logged in</p>
<h1>how long can you wait to meet your favourite celeb!</h1>
<p>
                                       the wait is over!!  the day u have been waiting for!!
                                                 meet the man of your dreams!!
   this contest lets u rate ur favourite celeb and at the end of the week the celeb with the highest ratings becomes the star of the week.
at the end of the month the celeb with the highest rating will meet his biggest fan who would have voted the most for that celeb during the
month.
</p>
<p>start voting for ur favourite celeb!!</p>
<form method="get" action="celebup.php">
<table cellspacing="50"><tr align="center"><td><img src="download1.jpg" /></td><td><img src="download2.jpg"/></td><td><img src="download3.jpg"/></td></tr>
	<tr align="center"><td><input type="checkbox" name="celebrity" value="robert downy junior"/>robert downy junior</td>
	     <td><input type="checkbox" name="celebrity" value="matt damon"/>matt damon</td>
             <td><input type="checkbox" name="celebrity" value="jonathan meyers"/>jonathan meyers</td></tr>
</table>
<center><input type="submit" value="submit"/></center>
</form>
</center>
</body>
</html>
