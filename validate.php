<?php
session_start();
$_SESSION['teamname']=$_POST['teamname'];
$server='localhost';
$username='root';
$password='';
$database='users';
$con= mysqli_connect($server,$username,$password,$database);
if(!$con){
    echo'Failed to connect to database';
}
else{
    $teamname=$_POST['teamname'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $leadername=$_POST['leader_name'];
    $collegename=$_POST['college'];
    $sql ="INSERT INTO `users_data` (`Team_name`,`Leader_email`,`Leader_phone`,`Leader_name`,`College_name`)
    VALUES ('$teamname','$email','$phone','$leadername','$collegename')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo'Team name added';
    }
    else{
        echo'Enter Team name again';
    }
}
$mem=$_POST['mem'];
if($mem==1){
    header("Location: https://localhost/IBM/index1.php");
}
if($mem==2){
    header("Location: https://localhost/IBM/index2.php");
}
if($mem==3){
    header("Location: https://localhost/IBM/index3.php");
}
if($mem==4){
    header("Location: https://localhost/IBM/index4.php");
}
if($mem==5){
    header("Location: https://localhost/IBM/index5.php");
}
if($mem==6){
    header("Location: https://localhost/IBM/index6.php");
}
?>