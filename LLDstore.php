<?php
$server='localhost';
$username='root';
$password='';
$database='users';
$con= mysqli_connect($server,$username,$password,$database);
if(!$con){
    echo'Failed to connect to database';
}
else{
    if (isset($_FILES['LLDfile']['name']))
        {
          $file_name = $_FILES['LLDfile']['name'];
          $file_tmp = $_FILES['LLDfile']['tmp_name'];
            $file=uniqid().'.pdf';
          move_uploaded_file($_FILES['LLDfile']['tmp_name'],'./uploads/'.$file);
        }
    $teamname=$_POST['TeamName'];
    $sql =" UPDATE `users_data` SET `LLD`='$file'
     WHERE `Team_name`='$teamname'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo'Data added to database';
    }
    else{
        echo'enter again with same team name';
    }
}

?>
<!--<a href="./uploads/<?php// echo $files;?>" target="_blank">View PDF</a>-->