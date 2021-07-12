<?php
$read_data = $conn->query("SELECT * FROM directions");
foreach($read_data as $data)
{
  echo "Direction: " . $data["direction"];
  
}
?>