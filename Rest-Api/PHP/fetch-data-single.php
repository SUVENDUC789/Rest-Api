<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");

    $data = json_decode(file_get_contents("php://input"), TRUE);
    $student_id = $data["sl"];

    include "dbcon.php";

    $sql = "SELECT * FROM `students` WHERE SL = {$student_id}";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $output = json_encode($data);
        echo $output;
    }else{
        echo json_encode(array('message'=>'No data found','status'=> FALSE));
    }

?>