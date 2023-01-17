
<?php
 $dbh = new PDO( "sqlsrv:server=DESKTOP-76MODEJ ; Database = blood", "", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")); 
// $sth = $dbh->prepare("exec InsertDonnarData( ?, ?, ?, ?,?, ? ,?,?) ");

$sql = 'exec InsertDonnarData( ?, ?, ?, ?,?, ? ,?,?)';
$stmt = $dbh->prepare($sql);

$second_name = "Rickety Ride";
$weight = 0;

$stmt->bindParam(1, $second_name, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 32);
$stmt->bindParam(2, $weight, PDO::PARAM_INT, 10);
$stmt->bindParam(3, $weight, PDO::PARAM_INT, 10);
$stmt->bindParam(4, $weight, PDO::PARAM_INT, 10);
$stmt->bindParam(5, $weight, PDO::PARAM_INT, 10);
$stmt->bindParam(6, $weight, PDO::PARAM_INT, 10);
$stmt->bindParam(7, $weight, PDO::PARAM_INT, 10);
$stmt->bindParam(8, $weight, PDO::PARAM_INT, 10);






// $sth->bindParam(1, $FullName );
// $sth->bindParam(2, $MobileNumber);
// $sth->bindParam(3, $EmailId);
// $sth->bindParam(4, $Gender);
// $sth->bindParam(5, $Age);
// $sth->bindParam(6, $BloodGroup);
// $sth->bindParam(7, $Address);
// $sth->bindParam(8, $Message);
?>