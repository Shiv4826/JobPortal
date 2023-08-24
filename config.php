<?php
try{
    $host="localhost";
$dbname="jobboard";
$user="root";
$pass="Shivam@2000";
$conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}


?>