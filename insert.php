<?php
$mysqli = new mysqli("localhost", "root", "", "practice");
//unsafe query
$aga=rand(10,100);
$rand=rand(1,50);
$fname="ali$rand";
$lname="alavi$rand";
$email="ali.$rand.@gmail.com";
/*
//unsafe query
$sql="INSERT INTO `user`(`name`, `family`, `email`, `age`) 
VALUES ('ali','alavian','ali@gmail.com',$aga)";
mysqli_query($mysqli, $sql);
if(mysqli_query($mysqli, $sql)){
    echo "ok";
}
*/
//safe query
$sql2="INSERT INTO `user`(`name`, `family`, `email`, `age`) VALUES (?,?,?,?)";
$stmt = $mysqli->prepare($sql2);
$stmt->bind_param("sssi",$fname,$lname,$email,$aga);
$stmt->execute();
echo $stmt->insert_id;
//var_dump($stmt);
