<?php
if(isset($_POST['Status'])){
    $s1=$_POST['result'];
}
if(isset($_POST['result'])){
    $s2=$_POST['result'];
}
if(isset($_POST['type'])){
    $s3=$_POST['result'];
}
if(isset($_POST['name'])){
    $s4=$_POST['result'];
}
$dbserver='localhost';
$dbuser='root';
$pass='';
$dbname="voting";
$conn= mysqli_connect($dbserver,$dbuser,$pass,$dbname);
if($conn){
    echo"connected succ";
}else{
    echo"no connection";
}?>