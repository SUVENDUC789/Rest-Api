<?php
$con=mysqli_connect("localhost","root","","test");
// echo var_dump($con);
?>

<h1>Students data</h1>
<table border="1">
    <tr>
        <th>SL</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of admission</th>
    </tr>

    <?php
        $sql="select * from students";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if ($num==0){
            echo '<h2>No Data found !</h2>';
        }else{

            // echo $num;
            for($i=0;$i<$num;$i++)
            {
                $row=mysqli_fetch_assoc($result);
                echo '<tr>
                <td>'.$row['sl'].'</td>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['datetime'].'</td>
                </tr>';
    
            }
        }
    ?>

</table>