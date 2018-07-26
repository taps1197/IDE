<?php
//error_reporting(0);
//error_reporting(E_ALL ^ E_NOTICE);
$r=$_GET['radio'];
$q = $_GET['query'];
$dir='mydir';
if(!file_exists($dir)) 
{ 
$oldmask=umask(0);
mkdir($dir,777);
}
if ($q!="")
{
	if($r!="undefined")
	{
	  	$file=fopen($dir.'/input.txt','w');
	  	fwrite($file,$q);
	  	fclose($file);
		if($r=="c")
			shell_exec('sh /opt/lampp/htdocs/copy.sh');
		if($r=="c++")
			shell_exec('sh /opt/lampp/htdocs/copyc.sh');
		if($r=="j")
		{
			$filecontents = file_get_contents('mydir/input.txt');
			$words = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
			$filejava=fopen('class.txt','w');
			fwrite($filejava,$words[1]);
			shell_exec('sh /opt/lampp/htdocs/copyj.sh');
			fclose($filejava);
		}
		if($r=="p")
			shell_exec('sh /opt/lampp/htdocs/copyp.sh');

		$file=fopen("output.txt","r");
		while(! feof($file))
		{
			echo fgets($file);
		}
		fclose($file);
	}
	else
	echo "select a language";
}
else
echo "enter some code";
?>
