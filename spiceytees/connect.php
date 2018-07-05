<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Mysqli Test";

$dbname = 'proddb';
$dbuser = 'dbadmin';
$dbpass = 'JN8fvM8XJzf5aWZ6';
//$dbhost = 'Production-Web-ALB-v00-1519171921.eu-west-2.elb.amazonaws.com';
$dbhost = 'prod-mysql-v00.clxevf67v7i9.eu-west-2.rds.amazonaws.com';
$dbport = '3306';
$charset = 'utf8' ;

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);

//print_r($con);


$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($con,$test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
mysqli_close($con);
?>