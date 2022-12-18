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
                                            <div class="example-content">
                                                <form action="./service_update_data.php?" method="post">
                                               <div class="card ">
                                               
                                                <div class="card-body" style="overflow-y:scroll; height:100px; width:100% " >
                                                <?php
                                                include_once('./fontand/icon.php');
                                                foreach ($fonts as $font) { ?>
                                                    <span class="card-text badge badge-primary m-1 "style="cursor: pointer ">
                                                    <i class="<?= $font?> fs-5 icon_click" id="<?=$font?>" aria-hidden="true"></i></span>
                                               <?php 
                                                }
                                                ?>
                                                    
                                                </div>
                                               </div>
                                              
                                                </div>
                                                <?php
                                                $id=$_GET['id'];
                                                $conect_database=mysqli_connect('localhost','root','','kufa');
                                                $service_select_querry="SELECT * FROM `services` WHERE id='$id'";
                                                $service_select_querry_db=mysqli_query($conect_database, $service_select_querry);
                                                $service_select_querry_db_arry=mysqli_fetch_assoc($service_select_querry_db);
                                                
                                                ?>
                                                 <input hidden type="number" name="id" value="<?=$service_select_querry_db_arry['id']?>">
                                                 <label>service icon</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" id="icon_value" name="service_icon"
                                                value="<?=$service_select_querry_db_arry['service_icon'] ?>"
                                                 >
                                                
                                                <label>service title</label>
                                                <input type="text" class="form-control form-control-solid-bordered m-b-sm" aria-describedby="solidBoderedInputExample" name="service_tittle" 
                                                value="<?=$service_select_querry_db_arry['service_tittle'] ?>">

                                                <label>service status</label>
                                                <select class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample" name="service_status" value=" <?=$service_select_querry_db_arry['service_status'] ?>"
                                                > 
                                                <option value="active">active</option>
                                                <option vlaue="inactive">inactive</option>
                                                </select>

                                                <label>service destription</label>
                                                <textarea class="form-control form-control-solid m-b-sm" aria-describedby="solidInputExample"cols="30" rows="5" name="service_description"
                                                placeholder=""
                                               
                                                > <?=$service_select_querry_db_arry['service_description'] ?></textarea>
                                                
                                               <button class="btn btn-info" style="width:100%;padding:10px">Update service</button>
                                                </form>
                                            </div>
                                        </div>
                                   
<?php
       require_once("./includes/footer.php");
?>   
<script>
     $(document).ready(function(){
         $('.icon_click').click(function(){
            $('#icon_value').val($(this).attr('id'))
            
         })
     })
</script>
