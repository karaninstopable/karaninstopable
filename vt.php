<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="rg.php">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=htmlspecialchars($_POST["name"]);
        $no=htmlspecialchars($_POST["number"]);
        $em=htmlspecialchars(($_POST["email"]));
        echo "$name";
        echo "$no";
        echo "$em";
    }
    ?>
</body>
</html>