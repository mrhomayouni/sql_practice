<?php
echo "ok";
$mysqli = new mysqli("localhost", "root", "", "practice");
if(isset($_POST["send"])){
    $id = $_POST["num"];
    $sql2 = "SELECT `id` FROM `user`";
    $stmt = $mysqli->prepare($sql2);
    $stmt->execute();



}
$sql = "DELETE FROM `user` WHERE `id`=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();



?>

<form action="" method="post">
    <input type="number" name="num">
    <input type="submit" value="send" name="send">
</form>
