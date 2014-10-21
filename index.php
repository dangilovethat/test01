<?php

echo 'hello from Azure1<br>';

require_once'config.php';




try
{
$oConn = new PDO("mysql:host=".$sHost.";dbname=".$sDb, $sUsername, $sPassword);

echo 'mid-01 <br>';
$oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


print_r(PDO::getAvailableDrivers());
echo '<br>';
$sql = "SELECT * FROM hello_world";

$q   = $oConn->query($sql) or die("failed!");

while($r = $q->fetch(PDO::FETCH_ASSOC)){

  echo $r['data'];

# close the connection
$oConn = null;

}


echo '<br>';
echo 'mid-after <br> ';
/*
$oStmt = $oConn->prepare('SELECT data FROM hello_world');
$oResult = $oStmt->fetchAll();
foreach ($oResult as $aRow) {
print_r($aRow['data']);
}
*/

} catch(PDOException $e) {
echo 'ERROR:'.$e->getMessage();
}



echo 'bye -01';


?>
