<?php

$RollNumber = $_POST['RollNumber'];
$FullName = $_POST['FullName'];
$Class = $_POST['Class '];
$BirthDate= $_POST['BirthDate'];
$Address= $_POST['Address'];
$Date= $_POST['Date'];

$conn = new mysqli('localhost','root','','register');
if($conn->connect_error){
die(''Connection Failed : '.$conn->connect_error');
}
else{

$stmt=$conn->prepare("insert into register(RollNumber,FullName,Class,BirthDate,Address,Date)
values(?,?,?,?,?,?)");
$stmt->bind_param("issisi",$RollNumber,$FullName,$Class,$BirthDate,$Address,$Date);
echo "string";
$stmt "registration sucessfull...";
$stmt->close();
$conn->close();
}

?>