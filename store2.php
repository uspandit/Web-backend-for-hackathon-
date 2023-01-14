<?php
session_start();
$server='localhost';
$username='root';
$password='';
$database='users';
$con= mysqli_connect($server,$username,$password,$database);
if(!$con){
    echo'Failed to connect to database';
}
else{
    $m1name=$_POST['name'];
    $m1email=$_POST['eaddress'];
    $m2name=$_POST['name2'];
    $m2email=$_POST['eaddress2'];

    $teamname = $_SESSION['teamname'];

    $sql = "UPDATE `users_data` 
    SET `member_1_name`='$m1name',`member_1_email`='$m1email',`member_2_name`='$m2name',`member_2_email`='$m2email'
    WHERE `Team_name`='$teamname'";

    $result=mysqli_query($con,$sql);

    if($result){
        echo 'Data added to database';
    }
    else{
        echo 'enter again with same team name';
    }
}
session_destroy();
?>