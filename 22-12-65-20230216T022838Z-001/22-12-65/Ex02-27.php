<html>

<head>
    <title> การสร้างฟอร์ม </title>
</head>

<body>
<?php
        if(isset($_POST['sunmit']))
        {
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
    }
    //else
    //{
?>
    <h2>แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
    <form action="Ex02-27.php" method="post" name="form1" id="form1">
        รหัสนักศึกษา : <input type="text" name="idstudent" maxlength="13" /><br />
        ชื่อ-นามสกุลนักศึกษา : <input type="text" name="Sdname" size="40" /><br />
        รหัสผ่าน : <input type="password" name="password" maxlength="6" size="6" /><br />
        เพศ : <input type="radio" name="sex" value="ชาย" /> ชาย
        <input type="radio" name="sex" value="หญิง" /> หญิง <br />
        งานอดิเรก :
        <input type="checkbox" name="Box1" value="อ่านหนังสือ" /> อ่านหนังสือ
        <input type="checkbox" name="Box2" value="ดูโทรทัศน์" /> ดูโทรทัศน์
        <input type="checkbox" name="Box3" value="เล่นกีฬา" /> เล่นกีฬา<br />
        สี:
        <input type="checkbox" name="ckhcolor[]" value="Red" /> Red
        <input type="checkbox" name="ckhcolor[]" value="Black" /> Black
        <input type="checkbox" name="ckhcolor[]" value="Bronw" /> Bronw<br/>
        อัพโหลดข้อมูล : <input type="file" name="file" /> <br />
        <input type="submit" name = "sunmit"/>
        <input type="reset" value="Clear Data" />
        </form>
    <?php
        //}
    //?>    
</body>
</html>