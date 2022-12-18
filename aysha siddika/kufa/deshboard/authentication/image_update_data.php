<?php
 $id=$_POST['id'];
if(isset($_POST['update_image'])){
   
 
  
  
  
      
      if(isset($_FILES['image']['name'])){
               $conect_database=mysqli_connect('localhost','root','','kufa');
                $image_service_select_quary="SELECT `imageone` FROM `footerimages` WHERE id='$id'";
                 $image_service_select_quary_db=mysqli_query($conect_database,$image_service_select_quary);
                 $old_image_name=mysqli_fetch_assoc( $image_service_select_quary_db)['imageone'];
                 
                 $fullpath="./uploade/footer/".$old_image_name;
                  unlink($fullpath);

                  $image_name=$_FILES['image']['name'];
                  $image_name_explode=explode(".",$image_name);
                  $image_name_explode_extensions=end($image_name_explode);
              if(($image_name_explode_extensions==="png")||($image_name_explode_extensions==="jpg")||($image_name_explode_extensions==="jpeg")){
                  $image_new_name=time().".".$image_name_explode_extensions;
                  $tmp_name=$_FILES['image']['tmp_name'];
                  $fullpath="./uploade/footer/". $image_new_name;
                  move_uploaded_file($tmp_name,$fullpath);
                

                    //database 
                    $conect_database=mysqli_connect('localhost','root','','kufa');
                    $update_image_service_quary="UPDATE `footerimages` SET `imageone`='$image_new_name' WHERE id='$id'";
                    $update_servicetwo_quary_db=mysqli_query($conect_database, $update_image_service_quary);
                      header("location:./image_list.php");
          
        }
    }
}
?>