<?php

echo 'hello -01<br>';

require_once'config.php';




try
{
$oConn = new PDO("mysql:host=".$sHost.";dbname=".$sDb, $sUsername, $sPassword);

echo 'mid-01 <br>';
$oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo 'mid-after <br>';

$oStmt = $oConn->prepare('SELECT data FROM hello_world');
$oResult = $oStmt->fetchAll();
foreach ($oResult as $aRow) {
print_r($aRow['data']);
}


} catch(PDOException $e) {
echo 'ERROR:'.$e->getMessage();
}



echo 'bye -01';


?>
