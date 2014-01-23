<html><body bgcolor="lightgreen"><center>

<?php
$celeb=$_GET["celebrity"];
mysql_connect("localhost","root","");
mysql_select_db("fans");
$res=mysql_query("select * from celebinfo");
$votes=0;
while($a=mysql_fetch_row($res))
{
	if($a[0]==$celeb)
	{
		$votes=$a[1]+1;
		print"<b>updated no of votes  for $celeb is $votes</b>";
	}
	
}
$res=mysql_query("update celebinfo set no_votes='$votes' where cname='$celeb'");
?>
</center></body></html>

