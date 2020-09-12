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
   // echo" Registration Successfull";
    //<button type="submit" class="btn btn-primary">Scholarship Form</button>
}
    
?>
<html>
    <head>
        <title>Scholarship Form </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        <div class="container">
           <div class="login-box">
            <div class="row">
            
            <div class="col-md-6 login-left">
            <h2>Scholarship Form </h2>
           
           <form action="dashboard.php" method="post">
               <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control"  name="nam" required>
               </div>
               <br>
               <div class="form-group">
               <label>Father's Name</label>
               <input type="text" class="form-control"  name="fname" required>
               </div>
               <br>
               <div class="form-group">
               <label>Mother's Name</label>
               <input type="text" class="form-control"  name="mname" required>
               </div>
               <br>
               <div class="form-group">
               <label>Mobile number</label>
               <input type="number" class="form-control"  name="mobi" required>
               </div>
               <br>
               <div class="form-group">
               <label>Address</label>
               <input type="text" class="form-control"  name="add" required>
               </div>
               <br>
               <div class="form-group">
               <label>Email Id</label>
               <input type="text" class="form-control"  name="em" required>
               </div>
            <br>
               
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
           </div>
          
                </div>
        </div>
        </div>
    </body>
</html>