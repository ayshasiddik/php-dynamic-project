<?php
   session_start();
   $name_new=($_POST['name_new']);
   $id= $_SESSION['valied_id'];
   $phone=($_POST['phone_number']);
   $address=($_POST['address']);
   $office_address=($_POST['office_address']);





   $flag=false;
if(isset($_POST['update'])){
    if($name_new){
        $remove_word_speach_name=str_replace(" ","",$name_new);
             if(ctype_alpha($remove_word_speach_name)){
                
              
            }else{
                   $flag=true;
                   $_SESSION['name_error']='number diso';
                  }
   }else{
          $flag=true;
          $_SESSION['name_error']='apni name den ni';
     
}
if($phone){
  
}else{
      $flag=true;
      $_SESSION['phone_error']='apni phone number den ni';
 
}
if($address){
  
}else{
      $flag=true;
      $_SESSION['address_error']='apni address den ni';
 
}
if($office_address){
  
}else{
      $flag=true;
      $_SESSION['office_address_error']='apni office_address_address den ni';
 
}
}
if(isset($_POST['update_pic'])){
  if(isset($_FILES['profile_picture'])){
    //echo $_FILES['profile_picture']['name'];
      $image_name=$_FILES['profile_picture']['name'];
      $image_name_explode=explode(".",$image_name);
      $image_name_explode_end=end($image_name_explode);
      $new_image_name="$id"."."."$image_name_explode_end";
      //echo $new_image_name;
      $tem_name=$_FILES['profile_picture']['tmp_name'] ;
      //print_r($tem_name);
      $file_path='./uploade/profile/'.$new_image_name;
      move_uploaded_file($tem_name,$file_path);
      $conect_database=mysqli_connect('localhost','root','','kufa') ;
      $profile_picture_update_querry="UPDATE admins SET `profile picture`='$new_image_name' WHERE id='$id'";
      $profile_picture_update_querry_db=mysqli_query($conect_database,$profile_picture_update_querry);
      header("location:./profile.php");
 }
 
}
if(isset($_POST['update_link'])){
    $facebook=($_POST['facebook']);
    $twitter=($_POST['twitter']);
    $istagram=($_POST['instgram']);
    $plink=($_POST['plink']);
    $conect_database=mysqli_connect('localhost','root','','kufa') ;
    $link_update_querry="UPDATE admins SET `fblink`=' $facebook',`twlink`='$twitter',`inslink`='$istagram',`plink`='$plink' WHERE id='$id'";
    $link_update_querry_db=mysqli_query($conect_database,$link_update_querry);
    $_SESSION['success_link_value']="link update successfully";
    header("location:./profile.php");
    

}

if(isset($_POST['change_password'])){
    $old_password=($_POST['old_password']);
    $new_password=($_POST['new_password']);
    $confirm_password=($_POST['confirm_password']);
   
    if($old_password){
        $old_password_checking_querry="SELECT password FROM admins WHERE id='$id'";
        $conect_database=mysqli_connect('localhost','root','','kufa') ;
        $name_update_querry_db=mysqli_query($conect_database,$old_password_checking_querry);
        $name_update_querry_db_arry=mysqli_fetch_assoc($name_update_querry_db);

        if(sha1($old_password) === $name_update_querry_db_arry['password']){
            if($new_password){
               if($old_password === $new_password){
                $flag=true;
                $_SESSION['new_password_error']="old password r new password are same";
               }else{
                     if($confirm_password){
                        if($confirm_password === $new_password){
                            $encode_password=sha1($new_password);
                            $conect_database=mysqli_connect('localhost','root','','kufa') ;
                            $password_update_querry="UPDATE admins SET password='$encode_password' WHERE id='$id'";
                            $password_update_querry_db=mysqli_query($conect_database,$password_update_querry);
                            $_SESSION['success_value']="password successfully update";
                            header('location:./profile.php');
                        }else{
                            $flag=true;
                              $_SESSION['confirm_password_error']="confirm password mile ni";
                    }
                }else{
                    $flag=true;
                    $_SESSION['confirm_password_error']="confirm password den ni";
                }
               }
            }else{
                $flag=true;
            $_SESSION['new_password_error']="new password den ni";
            }

        }else{
            $flag=true;
            $_SESSION['old_password_error']="old password mile ni";
        }

    }else{
        $flag=true;
        $_SESSION['old_password_error']="old password den ni";
    }
}
if($flag){
    header("location:./profile.php");
}elseif(isset($_POST['update'])){
    $conect_database=mysqli_connect('localhost','root','','kufa') ;
    $name_update_querry="UPDATE admins SET name='$name_new', `phone_number`='$phone',`address`='$address', `office_address`='$office_address' WHERE id='$id'";
    $name_update_querry_db=mysqli_query($conect_database,$name_update_querry);
    $_SESSION['name_data']=$name_new;
    $_SESSION['success_name_value']="info update successfully";
    header('location:./profile.php');
}


?>