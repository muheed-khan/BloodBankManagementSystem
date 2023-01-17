
<?php

$dbh = new PDO( "sqlsrv:server=DESKTOP-76MODEJ ; Database = blood", "", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
$my = "11";
// $sql = "exec InsertDonnarData '$my','03113591838','ahsanmalik@test.com','male',19, 'O-ve',
// 'sanasnnasasmasa','snmansabsanbas' ";


$statement = $dbh->prepare($sql);


// $statement->bindParam(':FullName', "Ahsan",PDO::PARAM_STR);
// $statement->bindParam(':MobileNumber', "91288172",PDO::PARAM_STR);
// $statement->bindParam('EmailId',"test@test.com" ,PDO::PARAM_STR);
// $statement->bindParam(':Gender',"female",PDO::PARAM_STR);
// $statement->bindParam(':Age',23,PDO::PARAM_INT);
// $statement->bindParam(':BloodGroup',"a-ve" ,PDO::PARAM_STR);
// $statement->bindParam(':Address',"sjnskjandsd" ,PDO::PARAM_STR);
// $statement->bindParam(':Message',"sjnjsnsjd" ,PDO::PARAM_STR);
$statement->execute();

?>
<!-- 
@FullName varchar(100),
@MobileNumber char(11),
@EmailId varchar(100),
@Gender varchar(20),
@Age int,
@BloodGroup varchar(20),
@Address varchar(255),
@Message text
 -->