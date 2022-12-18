
<?php
   require_once("./include/header.php");
  
?>
<div class="row justify-content-center">
<div class="col-md-12">
    <div class="card">
<div class="card-body">
    <h4 class="text-info"style="border-bottom:1px solid white">Services List</h4>
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
                                                <table class="table">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th scope="col">id</th>
                                                          
                                                            <th scope="col">Footer Image</th>

                                                           
                                                            <th scope="col">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conect_database=mysqli_connect('localhost','root','','kufa');
                                                        $image_select_data_quary="SELECT * FROM `footerimages`";
                                                        $image_select_data_quary_db=mysqli_query($conect_database, $image_select_data_quary);
                                                        $serial=1;
                                                      foreach ($image_select_data_quary_db as  $service) {?>
                                                        <tr>
                                                        <th scope="row"><?=$serial++?></th>
                                                        <td>
                                                        
                                                        
                                                        <img src="./uploade/footer/<?=$service['imageone']?>"alt="" height="100" width="100">
                                                         </td>
                                                      
                                                        <td>
                                                        <a href ="./images_update.php?id=<?=$service['id']?>"class="btn btn-warning"  >edit</a> <a href="./image_delet.php?id=<?=$service['id']?>" class="btn btn-danger" >delete</a>
                                                           
                                                        </td>
                                                          </tr>
                                                       <?php
                                                            }
                                                        ?>
                                                       
                                                        
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
</div>
</div>   

</div>
</div>             
<?php
        require_once("./include/footer.php");
     ?>  