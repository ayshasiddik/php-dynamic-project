<?php
session_start();


if(isset($_POST['add'])){
$image=$_FILES['image']['name'];

$comment=$_POST['comment'];
$tittle=$_POST['info_tittle'];
$subtittle=$_POST['info_subtittle'];


$flag=false;

if($image & $comment & $tittle & $subtittle){
    
}else{
    $flag=true;
    $_SESSION['empty_error']="compeletd testimonial item";
}

      if(isset($_FILES['image']['name'])){
    
         $image_name=$_FILES['image']['name'];
         $image_name_explode=explode(".",$image_name);
         $image_name_explode_extensions=end($image_name_explode);
       if(($image_name_explode_extensions==="png")||($image_name_explode_extensions==="jpg")||($image_name_explode_extensions==="jpeg")){
          $image_new_name=time().".".$image_name_explode_extensions;
           $tmp_name=$_FILES['image']['tmp_name'];
          $fullpath="./uploade/Tsmlpic/". $image_new_name;
          move_uploaded_file($tmp_name,$fullpath);
           $conect_database=mysqli_connect('localhost','root','','kufa');
          $testimonial_service_insert_quary="INSERT INTO `testimonialservices`(`p_image`, `comments`, `info_tiitle`, `info_subtitle`) VALUES ('$image_new_name','$comment','$tittle','$subtittle')";
         mysqli_query($conect_database,$testimonial_service_insert_quary);
          header("location:./testimonial_list.php");
    
}  
}
if($flag){
  header("location:./testimonial_add.php");
}
}

if(isset($_POST['update_testimonial'])){
  $image=$_FILES['image']['name'];

$comment=$_POST['comment'];
$tittle=$_POST['info_tittle'];
$subtittle=$_POST['info_subtittle'];


    $id=$_POST['id'];
    if(isset($_FILES['image'])){
             $conect_database=mysqli_connect('localhost','root','','kufa');
              $image_service_select_quary="SELECT `p_image` FROM `testimonialservices` WHERE id='$id'";
               $image_service_select_quary_db=mysqli_query($conect_database,$image_service_select_quary);
               $old_image_name=mysqli_fetch_assoc( $image_service_select_quary_db)['p_image'];
               $fullpath="./uploade/Tsmlpic/".$old_image_name;
                unlink($fullpath);
                $image_name=$_FILES['image']['name'];
                $image_name_explode=explode(".",$image_name);
                $image_name_explode_extensions=end($image_name_explode);
            if(($image_name_explode_extensions==="png")||($image_name_explode_extensions==="jpg")||($image_name_explode_extensions==="jpeg")){
                $image_new_name=time().".".$image_name_explode_extensions;
                $tmp_name=$_FILES['image']['tmp_name'];
                $fullpath="./uploade/Tsmlpic/". $image_new_name;
                move_uploaded_file($tmp_name,$fullpath);
                  //database 
                  $conect_database=mysqli_connect('localhost','root','','kufa');
                  $update_image_service_quary="UPDATE `testimonialservices` SET `p_image`='$image_new_name',`comments`='$comment',`info_tiitle`='$tittle',`info_subtitle`='$subtittle' WHERE id='$id' ";
                    $update_servicetwo_quary_db=mysqli_query($conect_database, $update_image_service_quary);
                    header("location:./testimonial_list.php");
        
      }
  
    }else{
        $conect_database=mysqli_connect('localhost','root','','kufa');
        $update_image_service_quary="UPDATE `testimonialservices` SET `comments`='$comment',`info_tiitle`='$tittle',`info_subtitle`='$subtittle' WHERE id='$id' ";
          $update_servicetwo_quary_db=mysqli_query($conect_database, $update_image_service_quary);
          header("location:./testimonial_list.php");
         
       }

}

if(isset($_POST['uplode_image'])){

if(isset($_FILES['footer_image']['name'])  ){
    
  $image_nameone=$_FILES['footer_image']['name'];
 


  $image_name_explodeone=explode(".",$image_nameone);


  $image_name_explode_extensionsone=end($image_name_explodeone);


if(($image_name_explode_extensionsone==="png")||($image_name_explode_extensionsone==="jpg")||($image_name_explode_extensionsone==="jpeg") 

){
   $image_new_nameone=time().".".$image_name_explode_extensionsone ;


    $tmp_nameone=$_FILES['footer_image']['tmp_name'];
   
   $fullpathone="./uploade/footer/". $image_new_nameone;
   
   move_uploaded_file($tmp_nameone,$fullpathone);
 

    $conect_database=mysqli_connect('localhost','root','','kufa');
   $testimonial_service_insert_quary="INSERT INTO `footerimages` ( `imageone`) VALUES ('$image_new_nameone')";
  mysqli_query($conect_database,$testimonial_service_insert_quary);
   header("location:./image_list.php");
 
  
  
 
 
  }
}
}







?>