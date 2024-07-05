<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="cycleshop_db";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
 die("connection failed:". mysqli_connect_error());
}
 
 if(isset($_POST['save']))
 {
    $name=$_POST['name'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];
    $brand=$_POST['brand'];
    $service=$_POST['service'];
    $model=$_POST['model'];
    $address=$_POST['address'];

    $sql_query=" INSERT INTO serviceorders(name,phoneno,email,brand,service,model,address) VALUES('$name','$phoneno','$email','$brand','$service','$model','$address')";
   
    if(mysqli_query($conn,$sql_query))
   {
    echo" Register successfully";
   }
   else{
    echo"error:" .$sql."".mysqli_error($conn);
   }
   mysqli_close($conn);
    
}
?>