<?php
error_reporting(0);
switch ($_SERVER["REQUEST_METHOD"] == "POST")
{
	case $b=$_POST['b']:
	$sql = "INSERT INTO directions (direction)
VALUES ('$b')";
echo "<br>";
       echo "Backward";
	     break;
		 
		 case $f=$_POST['f']:
		 $sql = "INSERT INTO directions (direction)
VALUES ('$f')";
echo "<br>";
       echo "Forward";

	     break;
	
        case $r=$_POST['r']:
		$sql = "INSERT INTO directions (direction)
VALUES ('$r')";
       echo "Right";
	     break;
		 
		case $l=$_POST['l']:
		$sql = "INSERT INTO directions (direction)
VALUES ('$l')";
		 echo "Left";
	     break;
	
	case $s=$_POST['s']:
	$sql = "INSERT INTO directions (direction)
VALUES ('$s')";
    echo "Stop";
	break;
		 
	default:
	 echo  "off";
	
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





if (mysqli_query($conn, $sql)) {
	echo "<br>";
echo "تم إرسال معلومات بنجاح \n";
echo "<br>";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>