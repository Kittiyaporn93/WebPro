<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    <?php
    $customerID = $_REQUEST['customerID'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName ="bookstore1";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สารมารถติดต่อกับ MySQL ได้" );
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถล็อกฐานข้อมูล bookstroe ได้ ");
    ?>
</body>
</html>