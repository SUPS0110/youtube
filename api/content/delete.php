<?php
include("./../users/conn.php");
header('Content-Type:application/json');
if($_SERVER['REQUEST_METHOD']=="DELETE"){
    $id=$_GET['id'];
    $sql="DELETE FROM content where id=$id";
    $res=$conn->query($sql);
    if($res==true){
        $response=array("message"=>"content deleted","success"=>true);
        echo json_encode($response);
    }
    else{
        http_response_code(404);
        $response=array("message"=>"error","success"=>false);
        echo json_encode($response);
        die();
    }
}
?>