<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Image</title>
</head>
<body>
    <link rel="stylesheet" href="./style1.css">
    <form action="login1.html" method="post">
<?php
$userdata=null;
$email=$_POST['email'];
$password=$_POST['password'];
$con =new mysqli("localhost","root","","login");
if($con->connect_error){
    die("failed to connect : ".$con->connect_error);
}
else{
    $stmt = $con->prepare("select * from student where email =?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result =$stmt->get_result();
    if($stmt_result->num_rows>0){
       $data=$stmt_result->fetch_assoc();
       if($data['password'] ===$password){
        echo '<script>alert("Login Successfull !!!");</script>';
            header("location: voting.php");
       }
       else{
        echo '<script>alert("<h2>invalid email or password</h2>");
        </script>';
       } }
       elseif($stmt_result->num_rows > 0) {
        // Email and password already exist
        echo "Email and password already exist.";}
       else{
        echo "<h2>Database might be empty or Invalid email or password</h2>";
        echo '<script>alert("Invalid Email or Password");
        </script>';
        
       }
}
?> <center>
<h2>Click here to continue
</h2>
<input type="submit" value="click here">
</center>
</form>
</body>
</html>


