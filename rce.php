<?php
$var = $_GET['cmd'];
if(isset($var))
{
	echo "Display /etc/passwd contents via command execution!<br>";
	$var = str_replace("cat","oops",$var);
	$var = str_replace("/cat","oops",$var);
	$var = str_replace("/etc/","oops",$var);
	$var = str_replace("passwd/","oops",$var);
	$var = str_replace("ls","oops",$var);
	$var = str_replace("uname","oops",$var);
	$var = str_replace(";","oops",$var);
	$var = str_replace("|","oops",$var);
	$var = str_replace("&&","oops",$var);
	system($var);
}
else{
echo "Noice..";
}

?>
