<?php
session_start();

$service_tittle=$_POST['service_tittle'];
$service_heading=$_POST['service_heading'];
$service_description=$_POST['service_description'];
$service_status=$_POST['services_status'];
$service_image=$_FILES['service_image'];


$flag=false;
//cheking empty all feild
if( $service_tittle & $service_heading & $service_description & $service_status){
   
}
else{
    $flag=true;
    $_SESSION['empty_error']="compeleted the service item";
  
}
//image uploade
if(isset($_POST['add_services'])){
   
    if(isset($_FILES['service_image'])){;
        $image_name=$_FILES['service_image']['name'];
        $image_name_explode=explode(".",$image_name);
        $image_name_explode_extensions=end($image_name_explode);
    if(($image_name_explode_extensions==="png")||($image_name_explode_extensions==="jpg")||($image_name_explode_extensions==="jpeg")){
        $image_new_name=time().".".$image_name_explode_extensions;
        $tmp_name=$_FILES['service_image']['tmp_name'];
        $fullpath="./uploade/gallery/". $image_new_name;
        move_uploaded_file($tmp_name,$fullpath);
        $conect_database=mysqli_connect('localhost','root','','kufa');
        $image_service_insert_quary="INSERT INTO `imageservices`( `service_tittle`, `service_heading`, `service_description`, `services_status`, `service_image`) VALUES ('$service_tittle','$service_heading','$service_description','$service_status','$image_new_name')";
        mysqli_query($conect_database,$image_service_insert_quary);
        header("location:./image_service_list.php");
        
    }
    }
   
}
if(isset($_POST['update_service'])){
    $id=$_POST['id'];
    if(isset($_FILES['service_image'])==($_FILES['service_image']['name'])){
      
     
            
      
        
               $conect_database=mysqli_connect('localhost','root','','kufa');
              $image_service_select_quary="SELECT `service_image` FROM `imageservices` WHERE id='$id'";
               $image_service_select_quary_db=mysqli_query($conect_database,$image_service_select_quary);
               $old_image_name=mysqli_fetch_assoc( $image_service_select_quary_db)['service_image'];
               $fullpath="./uploade/gallery/".$old_image_name;
                unlink($fullpath);
                $image_name=$_FILES['service_image']['name'];
                $image_name_explode=explode(".",$image_name);
               $image_name_explode_extensions=end($image_name_explode);
            if(($image_name_explode_extensions==="png")||($image_name_explode_extensions==="jpg")||($image_name_explode_extensions==="jpeg")){
                $image_new_name=time().".".$image_name_explode_extensions;
                $tmp_name=$_FILES['service_image']['tmp_name'];
                $fullpath="./uploade/gallery/". $image_new_name;
                  move_uploaded_file($tmp_name,$fullpath);
                  //database 
                  $conect_database=mysqli_connect('localhost','root','','kufa');
                  $update_image_service_quary="UPDATE `imageservices` SET `service_tittle`='$service_tittle',`service_heading`='$service_heading',`service_description`='$service_description',`services_status`='$service_status',`service_image`='$image_new_name' WHERE id='$id' ";
                    $update_servicetwo_quary_db=mysqli_query($conect_database, $update_image_service_quary);
                    header("location:./image_service_list.php");
        
      }
  
    }else{
        $conect_database=mysqli_connect('localhost','root','','kufa');
        $update_image_service_quary="UPDATE `imageservices` SET `service_tittle`='$service_tittle',`service_heading`='$service_heading',`service_description`='$service_description',`services_status`='$service_status' WHERE id='$id' ";
          $update_servicetwo_quary_db=mysqli_query($conect_database, $update_image_service_quary);
          header("location:./image_service_list.php");
         
       }

}
if($flag){
    header('location:./image_service_add.php');
}
?>