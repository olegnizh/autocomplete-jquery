<?php

	@include "dbconfig.php";
	//
	$term = $_GET["term"];
	$socr = $_GET["socr"];
	$sql = "SELECT DISTINCT NAME FROM kladr WHERE socr='".$socr."' and name LIKE '".$term."%' ORDER BY name";
	$result = mysqli_query($con,$sql) or die(mysqli_error());
	$json = array();
		while($row=mysqli_fetch_array($result))
		{
			$json[]=array(
                    'value'=>$row["NAME"],
                    'label'=>$row["NAME"]
                        );
		}
		echo json_encode($json);
		//echo json_encode($json, JSON_UNESCAPED_UNICODE);
		
mysqli_close($con);		
//header('Content-Type: application/json');
//header('Content-Type: text/html; charset=utf-8');
//print_r($json);
?>