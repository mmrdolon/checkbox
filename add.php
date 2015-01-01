
<?php
echo '<pre>';
print_r($_POST);
echo '<pre>';


$Fullname = $_POST['full_name'];

/*

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

*/
$Hobby = '';


if((array_key_exists('hobby_reading',$_POST)&& !empty($_POST['hobby_reading'])))
{
 $Hobby .= $_POST['hobby_reading'].',';
}

if((array_key_exists('hobby_playing',$_POST)&& !empty($_POST['hobby_playing'])))
{
    $Hobby .= $_POST['hobby_playing'].',';
}
if((array_key_exists('hobby_gardening',$_POST)&& !empty($_POST['hobby_gardening'])))
{
    $Hobby .= $_POST['hobby_gardening'].',';
}
if((array_key_exists('hobby_travelling',$_POST)&& !empty($_POST['hobby_travelling'])))
{
    $Hobby .= $_POST['hobby_travelling'].',';
}

$Hobby = rtrim($Hobby, ',');
//$Hobby = substr($Hobby,0,-1);

echo $Hobby;


echo "<br>";
echo "<br>";

$Food = $_POST['food'];

$Food = implode(",",$Food);

echo $Food;

echo "<br>";
echo "<br>";

$Joblocation = $_POST['job_location'];


$Joblocation = implode(",",$Joblocation);

echo $Joblocation;



$Created = $_POST['created_date'];
$Modified = $_POST['modified_date'];


/*
echo

var_dump($Hobby_reading);
var_dump($Hobby_playing);
var_dump($Hobby_gardening);
var_dump($Hobby_travelling);

var_dump($Joblocation);

//echo $birth_day;
*/
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "multiple") or die('cannot connect');
$query = "INSERT INTO `multiple`.`information` (`id`,
`full_name`,`hobby`,`food`,`job_location`,`created_date`,`modified_date`)
VALUES (NULL ,'$Fullname', '$Hobby','$Food','$Joblocation',NOW(),'')";
//echo $query;
mysqli_query($link, $query);
//header('location:list.php');