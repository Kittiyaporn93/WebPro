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
    $customerld = $_REQUEST['customerid'];
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName ="bookstore";
    $conn = mysqli_connect($hostname, $username, $password);
    if (!$conn)
        die("ไม่สารมารถติดต่อกับ MySQL ได้" );
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถล็อกฐานข้อมูล bookstore ได้ ");

    $sql ="delete from customer where customerid='$customerid' ";
    mysqli_query($conn, $sql) or die ("delete จากตาราง customer มีข้อผิดพลาดเกิดขึ้น" .mysqli_roror());
    mysqli_close($conn); 
    header("location:CustomerList.php");
    ?>
</body>
</html>