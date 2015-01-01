
<?php
echo '<pre>';
print_r($_POST);
echo '<pre>';


$Fullname = $_POST['full_name'];

if (isset($_POST['hobby_reading']) && !empty($_POST['hobby_reading'])) {

    $Hobby .=$_POST['hobby_reading'].',';

}
if (isset($_POST['hobby_playing']) && !empty($_POST['hobby_playing'])) {

    $Hobby .= $_POST['hobby_playing'].',';

}
if (isset($_POST['hobby_gardening']) && !empty($_POST['hobby_gardening'])) {

    $Hobby .= $_POST['hobby_gardening'].',';

}
if (isset($_POST['hobby_travelling']) && !empty($_POST['hobby_travelling'])) {

    $Hobby .= $_POST['hobby_travelling'].',';

}

$Hobby = rtrim($Hobby, ',');
//$Hobby = substr($Hobby,0,-1);

echo $Hobby;
exit;

$Food = $_POST['food'];
$Joblocation = $_POST['job_location'];
$Created = $_POST['created_date'];
$Modified = $_POST['modified_date'];

var_dump($Hobby_reading);
var_dump($Hobby_playing);
var_dump($Hobby_gardening);
var_dump($Hobby_travelling);

var_dump($Joblocation);

//echo $birth_day;

$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "multiple") or die('cannot connect');
$query = "INSERT INTO `multiple`.`information` (`id`,
`full_name`,`hobby`,`job_location`,`created_date`,`modified_date`)
VALUES (NULL ,'$Fullname', '$Hobby','$Joblocation',NOW(),'')";
//echo $query;
mysqli_query($link, $query);
//header('location:list.php');