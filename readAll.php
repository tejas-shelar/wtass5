<?php
include 'connection.php';


$sql = "SELECT * FROM participants";
$query=mysqli_query($conn,$sql);
$num = mysqli_num_rows($query);

$dance_arr = array();
$dance_arr['records'] = array();

if ($num > 0) {
    while($dance = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>". $dance['Name'] . "</td>";
        echo "<td>". $dance['Email'] . "</td>";
        echo "<td>". $dance['Mobile_no'] . "</td>";
        echo "<td>". $dance['Age'] . "</td>";
        echo "<td>". $dance['Gender'] . "</td>";
        echo "<td>". $dance['Performance'] . "</td>";
        echo "<td>". $dance['No_of_members'] . "</td>";
        echo "<td>". $dance['Type'] . "</td>";
        echo "<td>". $dance['Comment'] . "</td>";
        echo "<td>". $dance['Time Stamp'] . "</td>";
        echo "</tr>";
    }
}
?>