<html>

<head>
    <title>แบบฟอร์มบันทึกข้อมูลนักศึกษา</title>
</head>

<body>
    <?php
    $idstudent = $_POST['idstudent'];
    $name = $_POST['Sdname'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];

    function studentFrom ($idstudent,$name,$password,$sex){
    echo "รหัสนักศึกษา : ".$idstudent."<br>";
    echo "ชื่อ - นามสกุล : ".$name."<br>";
    echo "รหัสผ่าน : ".$password."<br>";
    echo "เพศ : ".$sex."<br>";

    echo 'งานอดิเรก :  '  ;
    if (!empty($_POST['Box1']))
        echo $_POST['Box1'];
    if (!empty($_POST['Box2']))
        echo ', ' . $_POST['Box2'];
    if (!empty($_POST['Box3']))
        echo ', ' . $_POST['Box3'];
    "<br/>";

    // echo '<br>' . 'สี : ';
    // for ($i=0; $i<count($colors);$i++){
    //     if(trim($_POST['colors'][$i])!= ""){
    //         echo $colors[$i] . "  ";
    //     }
    // }
    }

    studentFrom($idstudent, $name, $password, $sex);
?>
    <br><a href = "Ex02-27.php">Back</a>
    
</body>

</html>