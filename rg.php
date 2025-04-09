<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head><center>

<body>
  <div>
<form action="login1.html" method="post">
<h2>Click here to contine</h2>
<input type="submit" value="Click Here">
<?php
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$adhar=$_POST['number'];
$conn=new mysqli('localhost','root','','login');
if($conn->connect_error){
  die("connection failed".$conn->connect_error);  
  
}
else {
    // Check if email and password already exist
    $stmt = $conn->prepare("SELECT * FROM student WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email and password already exist
        echo '<script>alert("Email and password already exits")</script>';
        echo "<h1>Email and password already exist.</h1>";
    } else {
        // Insert new record
        $stmt->close();
        $stmt = $conn->prepare("INSERT INTO student(name,number,email,password) VALUES(?,?,?,?)");
        $stmt->bind_param("siss", $name, $adhar, $email, $password);
        $stmt->execute();
        echo '<script>alert("Registration Successful !!!")</script>';
    }

    $stmt->close();
    $conn->close();
}
?>
</center></form>
  </div>
</body>
</html>


