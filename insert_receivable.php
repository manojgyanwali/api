<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,
Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
$data=json_decode(file_get_contents("php://input"),true);

$name=$data['names'];
$address=$data['addresses'];
$amount=$data['amounts'];
$contact_no=$data['contacts'];
$note=$data['noteses'];
$date=$data['dates'];





include('config.php');
$sql="insert into   receivable (name,address,amount,contact_no,notes,date) values
 ('{$name}','{$address}',{$amount},{$contact_no},'{$note}','{$date}')";

if(mysqli_query($conn,$sql))
{
    echo json_encode(array('message'=>'record inserted.','status'=> true));
}


else
{
echo json_encode(array('message'=> ' record not inserted.','status'=>false));
}
 



?>