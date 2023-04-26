<?php
include("./../users/conn.php");

header('Content-Type:application/json');
if($_SERVER['REQUEST_METHOD']=="POST"){

    $request=json_decode(file_get_contents("php://input"));

$title=$request->title;
$url=$request->url;

    $sql="INSERT INTO content (id,title,url) values(null,'$title','$url')  ";
    $res=$conn->query($sql);
    
    if($res===TRUE){
        $response=array("success"=>true);
    }
    else{
        $response=array("success"=>false);
    }
    
    
    echo json_encode($response); 
    }
    else{
        http_response_code(404);
        $response=array("message"=>"error","success"=>false);
        echo json_encode($response);
        die();
    }
?>