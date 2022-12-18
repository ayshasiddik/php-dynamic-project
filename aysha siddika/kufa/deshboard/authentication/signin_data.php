<?php
session_start();

 //
$email=($_POST['email']);
$password=sha1($_POST['password']);



//email password checking quary ....
$conect_database=mysqli_connect('localhost','root','','kufa');
$email_password_check="SELECT COUNT(*) AS result FROM admins WHERE email='$email' AND password='$password' ";
$email_password_check_db=mysqli_query($conect_database,$email_password_check);
$email_password_check_db_convert_arry=mysqli_fetch_assoc($email_password_check_db);


//valid email hole name r id check in database...

$valid_email_name_quarry="SELECT id, name FROM admins WHERE email='$email'";
$valid_email_name_quarry_db=mysqli_query($conect_database, $valid_email_name_quarry);
$valid_email_name_quarry_db_to_array=mysqli_fetch_assoc($valid_email_name_quarry_db);
 $name= $valid_email_name_quarry_db_to_array['name'];
 $id= $valid_email_name_quarry_db_to_array['id'];



$flag=false;
//quary checking condition...
if($email_password_check_db_convert_arry['result']){
    $_SESSION['valied_email']= "$email";
    $_SESSION['valied_name']= "$name";
    $_SESSION['valied_id']= "$id";
    header('location:./home.php');
}else{
      $_SESSION['login_error']="Your email and password are  Incorrect!";
       header('location:./signin.php');
}

//email checking....
if($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
         echo"$email";
     }else{
        $flag=true;
        $_SESSION['email_error']='invalid email';
      }
  
}else{
      $flag=true;
       $_SESSION['email_error']='apni eamil den ni plz retry';
   
}

//password checking...
if($password){ 
       echo"$password";
}else{
       $flag=true;
       $_SESSION['password_error']='apni password den ni plz retry';
   
}

if($flag){
    header('location:./signin.php');
}


?>