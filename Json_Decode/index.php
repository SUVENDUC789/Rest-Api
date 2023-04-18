<?php

$json_String = 'test.json';

$json_data=file_get_contents($json_String);

$arr = json_decode($json_data,TRUE);

echo '<table border="1px solid black">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
        </tr>';

foreach($arr as list( "id"=> $id , "name"=> $name , "age"=> $age )){
    echo "<tr>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$age}</td>
        </tr>";
}

echo '</table>';

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

?>