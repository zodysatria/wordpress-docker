require_once db_config.php;
$con = mysql_connect(DB_HOST, DB_USER, DB_NAME) or
die("Could not connect: " . mysql_error());
mysql_select_db("xxx");