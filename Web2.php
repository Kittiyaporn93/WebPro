<html>

<head>
    <title>แสดงข้อมูล</title>
</head>

<body>
    <?php
    $fullname = $_POST['fullname'];
    $customerAddress = $_POST['customerAddress'];
    $email = $_POST['email'];
    $call = $_POST['call'];

    if (empty(trim($fullname)) || empty(trim($customerAddress)) || empty(trim($email)) || empty($call)) 
    {
        echo "<script> alert('กรุณากรอกข้อมูลให้ครบถ้วน');
    history.back(); </script>";
        exit();
    } 
    else if (!preg_match("/^[กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮะฤา ิ ี ุ ู ฺเแโใไๅ ั ำๆ ็ ่ ้ ๊ ์a-zA-Z ]+$/", $fullname)) 
    {
        echo "<script> alert('Not use some charecter');
        history.back(); </script>";
        exit();
    }
    else if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL))
    {
        echo "<script>alert('$email is not a valid email address'); history.back(); </script>";
        exit();
    }
    else if(!ctype_digit(trim($call)))
    {
        echo"<script>alert('กรุณากรอก หมายเลขโทรศัพท์ให้ถูกต้อง'); history.back(); </script>";
    }
   

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookStore";

    $conn = mysqli_connect($hostname,$username,$password);
    echo '<center>';
    if(!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");

    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");

    $sql = "insert into customer(customerName, customerAddress, customerEmail, customerTelephone) values ('$fullname', '$customerAddress', '$email', '$call')";
    
    mysqli_query($conn,$sql) or die("insert ลงตาราง customer มีข้อผิดพลาดเกิดขึ้น".mysqli_error());

    echo '<br><br><h2>บันทึกข้อมูลลูกค้าชื่อ'.$fullname.'เรียบร้อย</h2>';
    echo "ชื่อ-นามสกุล : <i> $fullname </i> <br/>";
    echo "ที่อยู่ : <i> $customerAddress </i> <br/>";
    echo "อีเมล : <i> $email </i> <br/>";
    echo "หมายเลขโทรศัพท์ : <i> $call </i> <br/>";
    ?>
</body>

</html>