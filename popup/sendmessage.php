<?php
$MailToAddress = "marketing@learn2win.com.hk"; 
$redirectURL = "thanks.php"; 
$missing_fields_redirectURL = "http://www.learn2win.com.hk";
$MailSubject = "Learn2win Trial Application";
$MailFrom = "marketing@learn2win.com.hk";
$MailToCC = ""; 
$Message = "";
    if (!is_array($HTTP_POST_VARS))
    return;
reset($HTTP_POST_VARS);
	while(list($key, $val) = each($HTTP_POST_VARS)) {
		$GLOBALS[$key] = $val;
		if (is_array($val)) { 
			$Message .= "<b>$key:</b> ";
			foreach ($val as $vala) { 
				$vala =stripslashes($vala);
				$Message .= "$vala, ";
			} 
			$Message .= "<br>";
		} 	
		else {
			$val = stripslashes($val);
			if (($key == "Submit") || ($key == "submit")) { } 	
			else {
			if ($key == "name") $key = "姓名";
			if ($key == "tel") $key = "電話";
			if ($key == "email") $key = "電郵地址";
			if ($key == "kid_level") $key = "子女年級";
			
	
	
			if ($val == "") { $Message .= "<strong>$key:</strong> - <br>\r\n"; }
			else {
			if ($key == "x" || $key == "y" || $val == "No"){ }
			else {
					$Message .= "<strong>$key:</strong>&nbsp;&nbsp;$val<br/>\r\n"; }
				}
			}
		}
	} 
$Message = "<font size=\"4\">".$Message."</font>";
mail( $MailToAddress, $MailSubject, $Message, "Content-Type: text/html; charset=utf-8\r\nFrom: ".$MailFrom."\r\nBCc: ".$MailToCC);
header("Location: ".$redirectURL);
?>
<html>
<head>
<title></title>
</head>
<body>
</body>
</html>
