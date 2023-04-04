<?php
$con = mysqli_connect("localhost","root","","test");
// echo var_dump($con);
?>
<?php
$sql="select * from students ORDER BY SL DESC";
$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);
?>

<?php

if($num==0)
echo "<h1 class='text-center'>No data found.</h1>";

else {
    echo '<h1 class="text-center alert-success">Studets data</h1>
    <table class="table table-hover">
    <tr>
        <th>SL</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of addmision</th>
    </tr>';
}
?>



<?php

// echo $num;

for($i=0;$i<$num;$i++){
    $row=mysqli_fetch_assoc($result);

    echo '<tr>
    <td>'.$row['sl'].'</td>
    <td>'.$row['first_name'].'</td>
    <td>'.$row['last_name'].'</td>
    <td>'.$row['datetime'].'</td>
    </tr>';
}
?>

</table>