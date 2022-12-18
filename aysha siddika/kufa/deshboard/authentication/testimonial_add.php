<?php
   require_once("./include/header.php");
   
  
?>
              <div class="row justify-content-center">
              <div class="col-md-6">
                                <div class="card ">
                                    <div class="card-header">
                                        <h5 class="card-title">Add Testimonial</h5>
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
                                        <?php
                                         if(isset( $_SESSION['sucess_data'])){?>
                                            <div class="alert alert-success text-center" role="alert">
                                            <p><?=  $_SESSION['sucess_data']?></p>
                                        </div>
                                        <?php
                                        }
                                       unset( $_SESSION['sucess_data']);
                                        ?>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="./testimonial_add_data.php" method="post" enctype="multipart/form-data">
                                               
                                               
                                                
                                                <label>Uplode image</label>
                                                <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="image" >


                                                <label>Comments</label>
                                                <textarea class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample"cols="30" rows="5" name="comment"
                                                placeholder=""
                                                >  comment!</textarea>

                                                <label>info tittle</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="info_tittle" >
                                                <label>info subtittle</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="info_subtittle" >

                                              <button class="btn btn-info" style="width:100%;padding:10px" name="add">Add</button>

                                           <br>
                                           <br>
                                              
                                               
                                              <h5 class="card-title text-center text-success">Uploade footer Image</h5>

                                              <br>
                                              <br>
                                    
                                                <label>Uplode footer Image</label>
                                                <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="footer_image" >


                                            

                                              <button  class="btn btn-info" style="width:100%;padding:10px" name="uplode_image">uploade footer image</button>




                                              
                                              
                                          
                                                </form>

                                            </div>
                                        </div>


<?php
                                            
   require_once("./include/header.php");
   
  
?>                                  


                                        


