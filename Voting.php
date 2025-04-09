<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <h1 class="m1">Welcome to Online Voting Platform</h1>
    <h2>Choose the parties which you wanna caste your vote</h2>
    <div><center>
        <img src="https://th.bing.com/th/id/OIP.v0Cw6Gydr5bjYPAQrKRljwHaHa?rs=1&pid=ImgDetMain" alt="left" height="200px" width="200px">
        <ol>
            <li>Name</li>
            <?php
            $conn = mysqli_connect("localhost","root","","login");
            if($conn->connect_error){
                die("connection failed:".$conn->connect_error);
            }
            $sql ="SELECT name from student";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row['name'];
                }
                echo "</table>";
            }
            $conn->close()
             ?>
             
            <li>Number</li> <?php 
                        $conn = mysqli_connect("localhost","root","","login");
                        if($conn->connect_error){
                            die("connection failed:".$conn->connect_error);
                        }
                        $sql ="SELECT number from student";
                        $result=$conn->query($sql);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo "<tr><td>".$row['number'];
                            }
                            echo "</table>";
                        }
                         ?>
                         
            <li>Email:</li> <?php 
                        $sel='SELECT *from student';
                        $query=mysqli_query($conn,$sel);
                        $result=mysqli_fetch_assoc($query);
                        echo $result['email'];
                         ?>
        </ol>
    </div>
    <div>
        <h2>Choose the party to Vote</h2>
    </div>
    <div>
        <form action="dash.php" method="post">
        <img src="https://www.kindpng.com/picc/m/247-2478665_bjp-logo-png-photo-bharatiya-janata-party-transparent.png" alt="left" width="200px" height="200px">
        <h3>Click here to vote</h3
            <input type="submit" name=>
       
    
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Indian_National_Congress_logo.svg/1067px-Indian_National_Congress_logo.svg.png" alt="" width="200px" height="200px">
        <h3>Click here to vote</h3>
        
            <input type="submit">
        
    
        <img src="https://th.bing.com/th/id/OIP.4cebG13o9S9cU2hKSIwBlAHaHa?rs=1&pid=ImgDetMain" alt="" width="200px" height="200px">
        <h3>Click here to vote</h3>
            <input type="submit">
            </center>
        </form
        
    </div>

</body>
</html>