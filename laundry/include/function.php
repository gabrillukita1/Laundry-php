<?php 



function Serv_Type()
{
   $conn_STUDENT = $GLOBALS['db'];
   $sel="SELECT * from services_type";
  $data=$conn_STUDENT->query($sel);
  return $data;
}

function Get_item($Serv_type)
{
   $conn_STUDENT = $GLOBALS['db'];
	$sel="SELECT * from services_uploade where Services_Type='".$Serv_type."'";
	$info=$conn_STUDENT->query($sel);
	return $info;
}


function Get_item_detail($type,$item)
{
   $conn_STUDENT = $GLOBALS['db'];
	$sel="SELECT * from services_uploade where Services_Type='".$type."' and Services_name='".$item."'";
	$info=$conn_STUDENT->query($sel);
	return $info;
}

?>