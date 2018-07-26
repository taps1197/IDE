<?php
header('Access-Control-Allow-Origin:*');
$con = mysqli_connect('localhost','root','','test1') or die("Error");
$q=$_GET['q'];

$var =array();
$sql="SELECT link FROM path WHERE name='$q'";
$result=mysqli_query($con,$sql);
while ($obj=mysqli_fetch_object($result)) {
	# code...
	$var[]=$obj;
}
$qe= json_encode($var);
$qa =json_decode($qe,true);
$res = $qa[0]['link'];

$myfile = fopen($res, "r") or die("Unable to open file!");
echo fread($myfile,filesize($res));
fclose($myfile);

?>