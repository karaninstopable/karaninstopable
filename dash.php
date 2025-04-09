<?php
session_start();
$data=$_POST['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary text-light">
    <h1>Welcome</h1>
    <div class="container my-5">
        <a href="Voting.php" class="btn btn-dark text-light px-3">Back</a>
        <a href="l.html" class="btn btn-dark text-light px-3">Logout</a>
        <h1 class="my-10">Voting System</h1>
    </div>
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-4">
                <img src="https://www.kindpng.com/picc/m/247-2478665_bjp-logo-png-photo-bharatiya-janata-party-transparent.png" alt="" height="200px" width="200px">
            </div>
            <div>
                <strong>Group name :</strong><br>
                <strong>Votes :</strong>
                <hr>
            </div>
    </div>
    <div class="col-mid-5 allign=left" >
        <img src="https://th.bing.com/th/id/OIP.v0Cw6Gydr5bjYPAQrKRljwHaHa?rs=1&pid=ImgDetMain" alt="user image" width="200px" height="200px">
        <br>
        <br>
        <strong>Name :</strong>
        <?php echo $data['name']; ?><br>
        <strong>Number</strong>
        <?php echo $data['number']; ?><br>
        <strong>Status</strong><br>
    </div>
</body>
</html>