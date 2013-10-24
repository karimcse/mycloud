<?php
include("db.php");
$name = $_POST['name'];
$f_name = $_POST['f_name'];
$address = $_POST['address'];
$date = $_POST['date'];

$sql = "INSERT INTO `info` (`id`, `name`, `f_name`, `address`, `date`) VALUES (NULL, '".$name."', '".$f_name."', '".$address."', '".$date."')";
$result = mysql_query($sql) or die(mysql_error());
if($result)
{
    echo "Data Successfully Inserted <br>";
    echo "<a href='add_info.php'>Go Back </a>";
}
else
    echo "An Error Occured";



?>
