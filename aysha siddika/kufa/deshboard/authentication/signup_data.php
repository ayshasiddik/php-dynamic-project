<?php
session_start();
$name=htmlspecialchars($_POST['user_name']);
$email=htmlspecialchars($_POST['user_email']);
$password=htmlspecialchars($_POST['user_password']);
$confirm_password=htmlspecialchars($_POST['user_confirm_password']);

//email uniqe check...
$conect_database=mysqli_connect('localhost','root','','kufa');
$email_check="SELECT COUNT(*) AS result FROM admins WHERE email='$email'";
$email_checck_db=mysqli_query($conect_database,$email_check);
$email_check_db_array=mysqli_fetch_assoc($email_checck_db);


$flag=false;

if($name){
    $remove_word_speach_name=str_replace(" ","",$name);
    if(ctype_alpha($remove_word_speach_name)){
          if((str_word_count($name))<=3){


           $_SESSION['name_data']=$name;
           
        }else{
             $flag=true;
            $_SESSION['name_error']='3 tar besi word dewya jaito nah';
        }
    }else{
        $flag=true;
         $_SESSION['name_error']='number diso';
        }
}else{
       $flag=true;
       $_SESSION['name_error']='apni name den ni';
  
}
//input email check.....
if($email){
   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    if($email_check_db_array['result']){
        $flag=true;
        $_SESSION['email_error']='ai email already ase';
    }else{
       $_SESSION['email_data']=$email;
        header('location:./signin.php');
    }
   }else{
    $flag=true;
    $_SESSION['email_error']='apnar mail valid nah';

   }
}
else{
    $flag=true;
    $_SESSION['email_error']='apni email den ni';
}
//input password check....
 if($password){
   //if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
       //echo"$password";
 //  }
   //else{
   // $flag=true;
    //$_SESSION['password_error']='apni password vul disen';
   //}
 }else{
    $flag=true;
    $_SESSION['password_error']='apni password den ni';
 }
 //input confirm pssword check...
 if($confirm_password){
     if($confirm_password===$password){
        //echo"$confirm_password";
     }
     else{
        $flag=true;
    $_SESSION['confirm_password_error']='apnar password ti mile ni';
     }
 }
 else{
    $flag=true;
    $_SESSION['confirm_password_error']='apni confirm password den ni';
 }


if($flag){
    header('location:./signup.php');
}
else{
    $password_hashing=sha1($password);
    $conect_database=mysqli_connect('localhost','root','','kufa');
    $datbase="INSERT INTO admins(name, email,password) VALUES('$name','$email','$password_hashing')";
    mysqli_query($conect_database,$datbase);
    $_SESSION["signin_popup"]="Welcome $name";
    header('location./signin.php');
}

?>