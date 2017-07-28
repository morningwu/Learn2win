<?php

function register_user($login_email,$password,$name,$nationality,$education_level,$college,$teaching_experience){

	$name 		= mysql_real_escape_string(htmlentities($name));
	$password 	= md5($password);

	mysql_query("INSERT INTO `educators`(
		`login_email`, 
		`password`,
		`group_name`,
		`name`,
		`nationality`,
		`education_level`,
		`college`,
		`teaching_experience`)
		
		VALUES (
		'$login_email',
		'$password',
		$group_name,
		'$name',
		'$nationality',
		'$education_level',
		'$college',
		'$teaching_experience')");

	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=create-course1.php">';
}

function user_exist($login_email){
	$login_email = mysql_real_escape_string($login_email);

	$total = mysql_query("SELECT COUNT(`educators_id`) FROM `educators` WHERE `login_email` = '{$login_email}'");

	return (mysql_result($total, 0) == '1') ? true : false;
}
function check_user($login_email,$login_password){

	$login_email		 	= mysql_real_escape_string(htmlentities($login_email));
	$login_password 		= md5($login_password);
	
	$total = mysql_query("SELECT COUNT(`educators_id`) FROM `educators` WHERE `login_email` = '{$login_email}' AND `password` = '{$login_password}'");

	return (mysql_result($total, 0) == '1') ? true : false;

}	
function check_login(){
	if(isset($_SESSION['name']) === true){

		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=sorry.php">';
	}

}
?>