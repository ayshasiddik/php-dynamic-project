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
                                            
                                                <form action="./image_service_add_data.php?" method="post" enctype="multipart/form-data" >
                                              
                                              
                                                
                                                <?php
                                                $id=$_GET['id'];
                                                $conect_database=mysqli_connect('localhost','root','','kufa');
                                                $imageservice_select_querry="SELECT * FROM `imageservices` WHERE id='$id'";
                                                $imageservice_select_querry_db=mysqli_query($conect_database, $imageservice_select_querry);
                                                $imageservice_select_querry_db_arry=mysqli_fetch_assoc($imageservice_select_querry_db);
                                                
                                                ?>
                                                 <input hidden type="number" name="id" value="<?=$imageservice_select_querry_db_arry['id']?>">
                                                <label>service tittle</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon_value" name="service_tittle" 
                                                value="<?=$imageservice_select_querry_db_arry['service_tittle']?>" >
                                                
                                                <label>service heading</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="service_heading" 
                                                value="<?=$imageservice_select_querry_db_arry['service_heading']?>" >

                                               

                                                <label>service destription</label>
                                                <textarea class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample"cols="30" rows="5" name="service_description"
                                                placeholder=""
                                                > <?=$imageservice_select_querry_db_arry['service_description'] ?></textarea>

                                                <label>service status</label>
                                                <select class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample" name="services_status"
                                                > 
                                                <option value="active"<?=($imageservice_select_querry_db_arry['services_status']==='active')? 'selected':''?>>active</option>
                                                <option vlaue="inactive"<?=($imageservice_select_querry_db_arry['services_status']==='inactive')?
                                                'selected':''?> 
                                                >inactive</option>
                                                </select>

                                                <label>image uploade</label>
                                                <input type="file" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="service_image" >

                                                
                                                
                                               <button class="btn btn-info" style="width:100%;padding:10px" name="update_service">Update service</button>
                                                </form>
                                            </div>
                                        </div>
                                   
<?php
       require_once("./includes/footer.php");
?>   

