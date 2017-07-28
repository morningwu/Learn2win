<?php

function register_user_student($student_email,$student_password,$student_name,$student_age,$student_school,$student_level){

  $student_name     = mysql_real_escape_string(htmlentities($student_name));
  $student_password   = md5($student_password);

  mysql_query("INSERT INTO `users`(
    `email`, 
    `password`,
    `student_name`,
    `age`,
    `school`,
    `level`
    )
    
    VALUES (
    '$student_email',
    '$student_password',
    '$student_name',
    '$student_age',
    '$student_school',
    '$student_level')");

  echo '<meta HTTP-EQUIV="REFRESH" content="0; url=account.php">';
}

function user_exist_student($student_email){
  $student_email = mysql_real_escape_string($student_email);

  $total = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '{$student_email}'");

  return (mysql_result($total, 0) == '1') ? true : false;
}
function check_user_student($student_email,$student_password){

  $student_email      = mysql_real_escape_string(htmlentities($student_email));
  $student_password     = md5($student_password);
  
  $total = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '{$student_email}' AND `password` = '{$student_password}'");

  return (mysql_result($total, 0) == '1') ? true : false;

} 
function check_student_login(){
  if(isset($_SESSION['student_name']) === true){

    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=sorry-student.php">';
  }

}
?>