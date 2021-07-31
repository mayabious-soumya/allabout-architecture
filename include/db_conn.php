<?php
//global $conn;
$dbName = 'allabout';
$userName = 'root';
$passwordValue = '';
//$conn = mysql_connect('localhost',$userName,$passwordValue);
//		mysql_select_db($dbName);
		
$conn=mysqli_connect("localhost",$userName,$passwordValue,$dbName);

$strSiteUrl = 'https://planmyad.com/';		
function getDatatable($sql)
{
	global $conn;
	
	//$result=mysql_query($sql,$conn);
	//$result = $conn->query($strSql);
	$result=mysqli_query($conn,$sql);
	$return=array();
	$count=0;
	
	while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		foreach($row as $key=>$val)
				{
					$return[$count][$key]=$val;
				}
			$count++;	
	}
	return $return;
}	

function execute_query($sql)
{
	global $conn;
	//$result=mysql_query($sql,$conn);
	$result=mysqli_query($conn,$sql);
	$return=false;
	if($result)
	{
		$return=true;
	}
	return $return;
}	

function execute_query_id($sql)
{
	global $conn;
	$result=mysqli_query($conn,$sql);
	$id = mysqli_insert_id($conn);
	$return=0;
	if($result)
	{
		$return=$id;
	}
	return $return;
}

function execute_sp($sp_name,$in_param_xml)
{
	try {
			global $dbName;
			global $userName;
			global $passwordValue;
			//opens php pdo connection
			$result=array();
			$count=0;
			
			//$this->open_connection_pdo();
			$con_string="mysql:host=localhost;dbname=".$dbName;
			
			$con_pdo=new PDO($con_string,$userName, $passwordValue);
			if(!con_pdo)
			{
				die(mysql_error());
			}
			
			$sql = 'CALL '.$sp_name.'(:in_param_xml)';
			$stmt = $con_pdo->prepare($sql);
			$stmt->bindParam(':in_param_xml', $in_param_xml, PDO::PARAM_STR);
			$stmt->execute();
			$results = array();
			do
			{
    			$results []= $stmt->fetchAll();
			} while ($stmt->nextRowset());
			
			$return_array['status']=$results[0][0][1];
			for($i=1;$i<count($results);$i++)
			{
				if(is_array($results[$i]) && count($results[$i]) > 0)
				{
					$return_array['datatable_'.$i]=$results[$i];
				}
			}
			
	}
	catch (PDOException $pe)
	{
		die("Error occurred:" . $pe->getMessage());
	}
	$stmt->closeCursor();
	unset($stmt);
	
	//$this->close_connection_pdo();
	$con_pdo=null;
	
	
	return $return_array;
	
	//return $results;
}
		
?>