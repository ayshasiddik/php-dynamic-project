<?php
   require_once("./include/header.php");
   
  
?>
              <div class="row justify-content-center">
              <div class="col-md-6">
                                <div class="card ">
                                    <div class="card-header">
                                        <h5 class="card-title">Update service</h5>
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
                                            
                                                <form action="./testimonial_add_data.php" method="post" enctype="multipart/form-data" >
                                              
                                              
                                                
                                                <?php
                                                $id=$_GET['id'];
                                                $conect_database=mysqli_connect('localhost','root','','kufa');
                                                $testimobial_select_querry="SELECT * FROM `testimonialservices` WHERE id='$id'";
                                                $testimonial_select_querry_db=mysqli_query($conect_database,  $testimobial_select_querry);
                                                $testimonial_select_querry_db_arry=mysqli_fetch_assoc($testimonial_select_querry_db);
                                                
                                                ?>
                                                 <input hidden type="number" name="id" value="<?= $testimonial_select_querry_db_arry['id']?>">
                                                 <label>Uplode image</label>
                                                <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="image">


                                                <label>Comments</label>
                                                <textarea class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample"cols="30" rows="5" name="comment"
                                                placeholder=""
                                                >   value="<?=$testimonial_select_querry_db_arry['comments']?>"</textarea>

                                                <label>info tittle</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="info_tittle"  value="<?=$testimonial_select_querry_db_arry['info_tiitle']?>" >
                                                <label>info subtittle</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="info_subtittle"  value="<?=$testimonial_select_querry_db_arry['info_subtitle']?>" >

                                             
                                                
                                               <button class="btn btn-info" style="width:100%;padding:10px" name="update_testimonial">Update testimonial</button>
                                                </form>
                                            </div>
                                        </div>
                                   
<?php
       require_once("./includes/footer.php");
?>   

