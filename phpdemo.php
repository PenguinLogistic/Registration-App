<html>
<body>
<?php

//php for first name
if (isset($_POST["fname"]))
{
  $fname = $_POST["fname"];
  $fname = str_pad($fname, strlen($fname)+1, ", ");
} 
else 
{
  $fname = ",";
}
$log = file_put_contents('logs.txt', $fname, FILE_APPEND | LOCK_EX);

//php for middle name
if (isset($_POST["mname"]))
{
  $mname = $_POST["mname"];
  $mname = str_pad($mname, strlen($mname)+1, ", ");
} 
else 
{
  $mname = ",";
}
$log = file_put_contents('logs.txt', $mname, FILE_APPEND | LOCK_EX);

//php for last name
if (isset($_POST["sname"]))
{
  $sname = $_POST["sname"];
  $sname = str_pad($sname, strlen($sname)+1, ", ");
} 
else 
{
  $sname = ",";
}
$log = file_put_contents('logs.txt', $sname.PHP_EOL , FILE_APPEND | LOCK_EX);
header("Location: http://localhost:8080/Home.html");
exit;
?>
</body>
</html> 