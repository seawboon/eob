<?php

date_default_timezone_set('Asia/Kuala_Lumpur');
//$conn = mysqli_connect("localhost","root","","tce_db") or die(mysql_error());
//$conn = mysqli_connect("localhost","tcebabyregnov2018","tcebabyregnov2018@tce","tcebabyregnov2018") or die(mysql_error());

define('DB_NAME', 'eando_new');
/** MySQL database username */
define('DB_USER', 'eando_new');
/** MySQL database password */
define('DB_PASSWORD', 'W52bvUxMQfSukj2v');
/** MySQL hostname */
define('DB_HOST', 'eando-rds-mysql.cdgxsp2fticz.ap-southeast-1.rds.amazonaws.com');

//$conn = mysqli_connect("eando-rds-mysql.cdgxsp2fticz.ap-southeast-1.rds.amazonaws.com","eando_new","W52bvUxMQfSukj2v","eando_new") or die(mysql_error());
$conn = mysqli_connect(constant('DB_HOST'), constant('DB_USER'), constant('DB_PASSWORD'), constant('DB_NAME')) or die(mysql_error());
$tbl = 'eno_andaman_interest';

?>
