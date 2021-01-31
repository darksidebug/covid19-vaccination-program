<?php

include_once './config/Database.php'

$database = new Database();
$db = $database->connect();

$returnData = array('status'=> '', 'message'=>'');

$qrcode = $_POST['qrcode'];

if(!empty($qrcode)){
    try{
        $query = "SELECT qr_code FROM person WHERE qr_code = :qrcode";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':qrcode', $qrcode);

        $count = $stmt->rowCount();

        if($count > 0){
            $returnData['status'] = 'success';
        }
        else{
            $returnData['status'] = 'invalid';
            $returnData['message'] = 'QR not found';
        }

    }catch(PDOException $error){
        $returnData['status'] = 'error';
        $returnData['message'] = $error->getMessage();
    }
}else{
    $returnData['status'] = 'qrcode';
}

echo json_encode($returnData);