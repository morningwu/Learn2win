<?php


include ('info.php'); 
include ('function/educator/registration.php'); 

?>
<?php

							      	if(isset($_POST['login'],$_POST['login_password'])){
									  if(empty($_POST['username'])){

									    $errors[] = "Please input your username!" ;
									  }
									  if(empty($_POST['login_password'])){
									    $errors[] = "You should enter your password!";
									  }
									  if(check_user($_POST['login'],$_POST['login_password']) === false){

									    $errors[] = "登入名稱或密碼錯誤！請重新輸入！";
									  }
									  if(empty($errors)){

									  	//$login_email = $_POST['login'];
									  	//$educator_name = mysql_query("SELECT `name` from `educators` WHERE `login_email` = '$login_email'");
									    
									    //$_SESSION['name'] = htmlentities($educator_name);
									    

									   echo '<meta HTTP-EQUIV="REFRESH" content="0; url=create-course.php">';
									    die();
									  }
									}
							      	?>