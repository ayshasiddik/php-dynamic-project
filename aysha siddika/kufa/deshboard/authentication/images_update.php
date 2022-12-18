<?php
   require_once("./include/header.php");
   
  
?>
              <div class="row justify-content-center">
              <div class="col-md-6">
                                <div class="card ">
                                    <div class="card-header">
                                        <h5 class="card-title">Update Footer Image</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_SESSION['empty_error'])){?>
                                            <div class="alert alert-danger text-center" role="alert">
                                            <p><?= $_SESSION['empty_error']?></p>
                                        </div>
                                        <?php
                                        }
                                       unset($_SESSION['empty_error']);
                                        ?>
                                      
                                        <div class="example-container">
                                            
                                                <form action="./image_update_data.php" method="post" enctype="multipart/form-data" >
                                              
                                              
                                                
                                                <?php
                                                $id=$_GET['id'];
                                                $conect_database=mysqli_connect('localhost','root','','kufa');
                                                $testimobial_select_querry="SELECT * FROM `footerimages` WHERE id='$id'";
                                                $testimonial_select_querry_db=mysqli_query($conect_database,  $testimobial_select_querry);
                                                $testimonial_select_querry_db_arry=mysqli_fetch_assoc($testimonial_select_querry_db);
                                                
                                                ?>
                                                <div class="image text-center">
                                                <h2 >Your old Images</h2>
                                                 <img src="./uploade/footer/<?=$testimonial_select_querry_db_arry['imageone']?>"alt="" height="100" width="100">
                                                </div>
                                                 <br>

                                                 <input hidden type="number" name="id" value="<?= $testimonial_select_querry_db_arry['id']?>">
                                                 <label>change image</label>
                                                <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="image">


                                                
                                             
                                                
                                               <button class="btn btn-info" style="width:100%;padding:10px" name="update_image">Update Image</button>
                                                </form>
                                            </div>
                                        </div>
                                   
<?php
       require_once("./includes/footer.php");
?>   

