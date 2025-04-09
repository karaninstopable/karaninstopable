<?php
$mail=$_POST['email'];
$pass=$_POST['password'];
$con = new mysqli("localhost","root","","login");
if($con->connect_error){
    die("failed to connect:".$con->connect_error);
}
else{
    $stmt=$con->prepare("select * from student where EMAIL
     =?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result-> fetch_assoc();
        if($data['password']===$pass){
            echo '<script>alert("Condition met!");</script>';
            
            
        }
        else{
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
    else{
        echo "<h2>Invalid Email or Password</h2>";
    }
}
?>