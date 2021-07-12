<?php
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

//جلب جميع المعلومات المخزنة في الجدول
$read_data = $conn->query("SELECT * FROM directions");
foreach($read_data as $data)
{
  echo "<br><br> Direction:<br> " . $data["direction"];
  
}
?>
