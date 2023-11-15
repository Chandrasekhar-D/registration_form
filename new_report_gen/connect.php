<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $pinCode=$_POST['pinCode'];
    $password=$_POST['password'];



$con = new mysqli('localhost','root','','registrations_data');

if($con){
    // echo "Connection successful !";
    $sql="INSERT INTO details_of_form (name,email,gender,mobile,city,state,country,pinCode,password) VALUES ('$name','$email','$gender','$mobile','$city','$state','$country','$pinCode','$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}
}

?>