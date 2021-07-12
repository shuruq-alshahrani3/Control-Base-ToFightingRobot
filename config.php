<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $motor1=$_POST['motor1'];
	$motor2=$_POST['motor2'];
	$motor3=$_POST['motor3'];
	$motor4=$_POST['motor4'];
	$motor5=$_POST['motor5'];
	$motor6=$_POST['motor6'];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control_arm";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO motors (motor1, motor2, motor3 ,motor4 ,motor5 ,motor6)
VALUES ('$motor1', '$motor2', '$motor3' , '$motor4', '$motor5' , '$motor6')";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح \n";
echo "<br>";
echo $motor1;
echo "<br>";
echo $motor2;
echo "<br>";
echo $motor3;
echo "<br>";
echo $motor4;
echo "<br>";
echo $motor5;
echo "<br>";
echo $motor6;
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>