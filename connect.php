<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$age = $_POST['age'];
$mno = $_POST['mobile'];


$conn = new mysqli('localhost','root','','assignment 5');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else{
    echo "connection successfull\n";
    $stmt = $conn->prepare("insert into registrants(Name, Gender, Email_id, Age, Mobile_no) 
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssii",$name,$gender,$email,$age,$mno);
    $stmt->execute();
    echo " Registered successfull";
    $stmt->close();
    $conn->close();
}

$connect = new mysqli('localhost','root','','assignment 5');
$sql = "SELECT * from registrants";
$output = mysqli_query($connect,$sql);
$json_array = array();
while($row = mysqli_fetch_assoc($output))
{
    $json_array = $row;
}

$json_data = json_encode($json_array);
file_put_contents('data.json',$json_data);

?>
