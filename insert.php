<?php

if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit']))
{


$link = mysqli_connect("localhost", "root", "", "glowydbms");


if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$subject = mysqli_real_escape_string($link, $_POST['subject']);


$sql = "INSERT INTO feed (name,email,subject) VALUES ('$name', '$email', '$subject')";
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
    header("location:alert.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
}
?>