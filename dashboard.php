<?php
session_start();
$conn=mysqli_connect('localhost','root','root@host1982');
mysqli_select_db($conn,'registration');

$n= $_POST['nam'];
$f= $_POST['fname'];
$m= $_POST['mname'];
$mob= $_POST['mobi'];
$ad= $_POST['add'];
$eid= $_POST['em'];


 
$s=" select * from scholarship where email_id='$eid'";
$resul=mysqli_query($conn,$s);
$nu=mysqli_num_rows($resul);
if($nu==1){
    echo" Username already taken ";
    echo"<br>";
}else{
    $re=" insert into scholarship(name,f_name,m_name,mobile,address,email_id) values('$n' , '$f','$m','$mob','$ad','$eid')";
    mysqli_query($conn,$re);
    echo" Registration Successfull ";
    echo"<br>";
    
}

//if( $resul = $mysqli_query( "SELECT id FROM scholarship WHERE email_id ='".$eid."'") ) {
 //   while( $row = $resul->fetch_assoc() ) {
  //      echo $row['id'];
        //echo "id: " . $row["email"]. "<br>";
  ////  }
//}

// Prepare the query
$stmt = "select id from scholarship where email_id ='".$eid."'";

//Execute it...
$result = mysqli_query($conn,$stmt);

// Fetch Results
$row = mysqli_fetch_assoc($result);

// Output single column
echo "Your Unique id is ";
echo $row['id'];

//echo "id is ". $result . " <br>";
    
?>
