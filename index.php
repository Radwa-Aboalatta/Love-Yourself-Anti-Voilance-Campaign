<?php 

$firstname=$_REQUEST['fist name'];
$lastname=$_REQUEST['last name'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$country=$_REQUEST['country'];
$Tellusaboutyourexperience=$_REQUEST['Note'];

if(isset($_POST['btntest']))
{

    $host="localhost";
    $user="root";
    $db="bis_loveyourself";

    @$conn = mysqli_connect($host,$user,$db);

    $insert="insert into userexperincewithbts values('$firstname','$lastname','$gender','$email','$country','$Tellusaboutyourexperience')";

    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style='color:green;' >your registration is done!</h1>");
    }
    else{
        echo("<h1 style='color:red;' >your registration is failed!</h1>");
    }

}





?>