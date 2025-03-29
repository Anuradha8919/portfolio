
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

// database krishna
$conn = new mysqli('localhost', 'root', '', 'portfolio_db',3307);

if($conn->connect_error){
    die('Connection Failed'.$conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into users(name,email,subject,message)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$subject,$message);
    $stmt->execute();
    echo "Message sent Successfully";
    $stmt->close();
    $conn->close();
}
?>