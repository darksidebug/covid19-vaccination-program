<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use PDOException;

class QrController extends Controller
{
    //
    private $host = "localhost";
    private $db_name = "southern_tracing_covid";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try
        {
            $this->conn = new PDO('mysql:host='. $this->host . ';dbname='. $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo 'Connection Error: '. $e->getMessage();
        }
        return $this->conn;
    }

    public function getdata(Request $request){
        $db = $this->connect();

        $returnData = array('status'=> '', 'message'=>'');

        $qrcode = $request->get('qrcode');

        if(!empty($qrcode)){
            try{
                $query = "SELECT qr_code, first_name, middle_name, last_name, contact_number,address FROM person WHERE qr_code = :qrcode";
                $stmt = $db->prepare($query);
                $stmt->bindParam(':qrcode', $qrcode);
                $stmt->execute();

                $count = $stmt->rowCount();
                $result = $stmt->fetchAll();

                if($count > 0){
                    $returnData['status'] = 'success';
                    $returnData['data'] = $result;
                }
                else{
                    $returnData['status'] = 'invalid';
                    $returnData['message'] = 'Qr Code not found!';
                }

            }catch(PDOException $error){
                $returnData['status'] = 'error';
                $returnData['message'] = $error->getMessage();
            }
        }else{
            $returnData['status'] = 'qrcode';
            $returnData['message'] = 'QR Code Empty';
        }

        return response()->json($returnData);
    }

}
