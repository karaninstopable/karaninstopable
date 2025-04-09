<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="v.php"><h1>Enter the name</h1>
        <input type="text" value="" name="s3" id="" placeholder="Name">
        <h1>Enter type</h1>
        <input type="text" value="" name="s4" placeholder="Type">
        <h1>Enter the Status</h1>
        <input type="text" value="" name="s1" placeholder="Status">
        <br>
        <hr>
        <input type="submit" value="Click here">
    </form>
        
</body>
</html>
<?php
include("v.php");
require 'v.php';
if(isset($_POST['submit'])){
    $s1=$_POST['Status'];
        $s2=$_POST['result'];
        $s3=$_POST['name'];
        $s4=$_POST['type'];
        $query = "INSERT into votingres values('$s3','$s4','$s1')";
        $stmt->bind_param("sss", $s3, $s4, $s1);
        $stmt->execute();
        echo '<script>alert("Registration Successful !!!")</script>';
        mysqli_query($conn,$query);
        mysqli_close($conn);
        echo
        '<script>alert(voted successfully)</script>';
}
?>
