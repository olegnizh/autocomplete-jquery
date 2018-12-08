<?php
require_once("dbinit.php");
//
if (isset($_REQUEST['namesocr']))
{
	$dbConnection = new Connection();
	//$sqlquery     = "SELECT code AS id, concat(name, ' ', id) AS value from class_mkb WHERE node_count=0 AND name LIKE '".$_REQUEST['codemkb']."%'";
	$sqlquery     = "SELECT DISTINCT SCNAME AS id, SOCRNAME AS value from SOCRBASE WHERE SOCRNAME LIKE '".$_REQUEST['namesocr']."%'";
	$getData      = $dbConnection->runQuery($sqlquery);
    //
    echo json_encode($getData);
}
?>