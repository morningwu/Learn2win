<?

$dbhost = 'localhost';
$dbuser = 'learn2wi_morning';
$dbpsw = '113117515';

$mysql_errors = "Error connecting to Database";

mysql_connect($dbhost,$dbuser,$dbpsw) or die($mysql_errors);
mysql_select_db('learn2wi_main');

?>