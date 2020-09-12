<?php
session_start();
$conn=mysqli_connect('localhost','root','root@host1982');
mysqli_select_db($conn,'registration');

$user= $_POST['userId'];
$pas= $_POST['pass'];
 
$s=" select * from register where email='$user'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo" Username already taken";
}else{
    $reg=" insert into register(email,password) values('$user' , '$pas')";
    mysqli_query($conn,$reg);
    echo" Registration Successfull";
    //<button type="submit" class="btn btn-primary" >Scholarship Form</button>
}
    
?>