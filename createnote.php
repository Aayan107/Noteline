<?php
session_start();
include('connection.php');

//get user_id
$user_id = $_SESSION['user_id'];

//get the current time
$time = time();

//run a query to create new note
$sql = "INSERT INTO notes(`user_id`,`note`,`time`) VALUES ($user_id,'_','$time')";
$result = mysqli_query($link, $sql);

if(!$result){
    echo 'error';
    echo "<br>1";
}
else
{
    //mysqli_insert_id returns the auto generated id used in the last query
    echo mysqli_insert_id($link);  
    echo "<br>2"; 
}
?>