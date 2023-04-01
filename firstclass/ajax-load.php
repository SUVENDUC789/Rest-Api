<?php

$con=mysqli_connect("localhost","root","","todo");
$sql="SELECT * FROM `users`";

$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

$output="";

if($num>0){

    $output='<table border="1">
                    <tr>
                    <th><b>Id</b></th>
                    <th><b>Name</b></th>
                    <th><b>Password</b></th>
                    <th><b>Date & Time</b></th>
                    <th><b>Gender</b></th>
            </tr>';
    
    for($i=0;$i<$num;$i++){
        $row=mysqli_fetch_assoc($result);
        $output.='    <tr>
        <td><i>'.$row['sl'].'</i></td>
        <td><i>'. $row['uname'].'</i></td>
        <td><i>'. $row['pass'].'</i></td>
        <td><i>'. $row['datetime'].'</i></td>
        <td><i>'. $row['gender'].'</i></td>
        </tr>';
    }    
    
    $output.='</table>';

    
    
}else{
    $output="No data found !!";
}

echo $output;
?>


