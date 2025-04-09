
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="vote.php" method="Post">
            <h1>Enter the name</h1>
            <input type="text" value="vote" name="s4" id="">
            <h1>Enter type</h1>
            <input type="text" value="click here" name="s3">
            <h1>Enter the Status</h1>
            <input type="text" value="click here" name="s1>
            <?php
    $s1=$_POST['Status'];
if(isset($_POST['result'])){
    $s2=$_POST['result'];
}
if(isset($_POST['type'])){
    $s3=$_POST['result'];
}
if(isset($_POST['name'])){
    $s4=$_POST['result'];
}
$conn= new mysqli('localhost','root','','voting');
if($conn->connect_error){
    die("failed to connect : ".$con->connect_error);
}else{
    
    $stmt->bind_param("sss",$s1,$s3,$s4);
    $stmt->store_result();
    echo '<script>alert("Voted successfully")</script>';
    $stmt->close();
    $conn->close();
}
?>
<h2>Click here to submit</h2>
<input type="submit" value="submit">
        </form>
    </div>
</body>
</html>