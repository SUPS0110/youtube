<?php
include("./../users/conn.php");
header('Content-Type:application/json');
if($_SERVER['REQUEST_METHOD']=="GET"){
    $sql="SELECT * FROM content ";
    $data=array();
    $res=$conn->query($sql);
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            $data[]=$row;
        }
    }
    $response=array("success"=>true, 'data'=>$data);
    echo json_encode($response); 
    }
    else{
        http_response_code(404);
        $response=array("message"=>"error","success"=>false);
        echo json_encode($response);
        die();
    }
?>