<?php
   require_once("./include/header.php");
   
  
?>
              <div class="row justify-content-center">
              <div class="col-md-6">
                                <div class="card ">
                                    <div class="card-header">
                                        <h5 class="card-title">Add service</h5>
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
                                                <form action="./image_service_add_data.php" method="post" enctype="multipart/form-data">

                                              

                                                <label>service title</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="service_tittle" >
                                                 
                                                <label>service heading</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="service_heading" >

                                             
                                                <label>service destription</label>
                                                <textarea class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample"cols="30" rows="5" name="service_description"
                                                placeholder=""
                                                >  </textarea>

                                                
                                                <label>service status</label>
                                                <select class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample" name="services_status"
                                                > 
                                                <option value="active">active</option>
                                                <option vlaue="inactive">inactive</option>
                                                </select>

                                                 <label>image uploade</label>
                                            <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="service_image" >

                                               <button class="btn btn-info" style="width:100%;padding:10px" name="add_services">Add service</button>

                                               
                                                </form>
                                            </div>
                                        </div>
                                   
<?php
       require_once("./includes/footer.php");
?>   

