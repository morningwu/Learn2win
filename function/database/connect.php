<?

$dbhost = 'localhost';
$dbuser = 'root';
$dbpsw = 'root';

$mysql_errors = "Error connecting to Database";

mysql_connect($dbhost,$dbuser,$dbpsw) or die($mysql_errors);
mysql_select_db('learn2win');

?>