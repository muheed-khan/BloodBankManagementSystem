<?php 
// // DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','bbdms');
// // Establish database connection.
// try
// {
// $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// }
// catch (PDOException $e)
// {
// exit("Error: " . $e->getMessage());
// }


try
{
    $dbh = new PDO( "sqlsrv:server=DESKTOP-76MODEJ ; Database = blood", "", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));  

// $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

// $serverName = "DESKTOP-76MODEJ"; //serverName\instanceName

// // Since UID and PWD are not specified in the $connectionInfo array,
// // The connection will be attempted using Windows Authentication.
// $connectionInfo = array( "Database"=>"blood");
// $dbh = sqlsrv_connect( $serverName, $connectionInfo);

// if($dbh ) {
// //   echo "Connection established.<br />";
// }else{
//   echo "Connection could not be established.<br />";
//   die( print_r( sqlsrv_errors(), true));
// }

?>