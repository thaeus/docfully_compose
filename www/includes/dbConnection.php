<?php
$hostname = "docfully_mysql";//"127.0.0.1";
$username = "docfully_web_app";//@35.236.12.238";
//$password = "1234";//'root';
$db = "docfully_web";
/**Current database:       docfully_web
Current user:           docfully_web_app@35.236.12.238
SSL:                    Cipher in use is AES256-SHA
Current pager:          stdout
Using outfile:          ''
Using delimiter:        ;
Server version:         5.7.14-google-log (Google)
Protocol version:       10
Connection:             35.236.84.212 via TCP/IP
TCP port:               3306 */

 $password = "1111dfc882e9fd1e65c53becdcab0c1b662645ec23c0";
  //$password = "tiger";

 	//1. Create a database connection - %dbhandle is a handle
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to CONNECT to MySQL");

	//2. Select a database to use
	$db_select = mysqli_select_db($dbhandle, "docfully_web")
//	$db_select = mysqli_select_db($dbhandle, "docfully")
	or die("Could not select examples");
 /**$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
); */
 
 ?>
