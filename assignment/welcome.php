<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body style="background-color: #7a2992; text-align: center; margin-top: 100px">
<div id="logo">
        <img src="logo.png" height="300px" width="300px"/>
    </div>
    <?php echo "<h1>HEY !! I AM DONE</h1>"; ?>
    <a href="logout.php" style="color: white; font-size: 20px;">LOGOUT</a>
</body>
</html>