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
    $list=$_POST['list'];
    $alllist=implode(",",$list);
    $model=$_POST['model'];
    $address=$_POST['address'];
    
    $sql_query=" INSERT INTO par(name,phoneno,email,brand,list,model,address) VALUES('$name','$phoneno','$email','$brand','$alllist','$model','$address')";
   
    if(mysqli_query($conn,$sql_query))
   {
    echo"register successfully";
   }
   else{
    echo"error:" .$sql."".mysqli_error($conn);
   }
   mysqli_close($conn);
    
}
?>