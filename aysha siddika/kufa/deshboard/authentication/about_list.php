
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
                                                            
                                                            <th scope="col"> Icon</th>
                                                            <th scope="col">persentange</th>

                                                            <th scope="col"> Tittle</th>
                                                            
                                                            <th scope="col">Service Description</th>
                                                            
                                                            <th scope="col">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conect_database=mysqli_connect('localhost','root','','kufa');
                                                        $aboutservice_data_quary="SELECT * FROM `abouts`";
                                                        $aboutservice_data_quary_db=mysqli_query($conect_database,  $aboutservice_data_quary);
                                                        $serial=1;
                                                        foreach ($aboutservice_data_quary_db as $service) {?>
                                                        <tr>
                                                        <th scope="row"><?=$serial++?></th>
                                                      
                                                        <td><i class="<?=$service['service_icon']?>"></i></td>
                                                        <td><?=$service['service_value']?></td>
                                                        <td><?=$service['service_tittle']?></td>
                                                        
                                                        <td><?=$service['service_description']?></td>
                                                       <td>
                                                        <span><a href ="./about_update.php?id=<?=$service['id']?>"class="btn btn-warning">edit<a></span><a href="././about_delet.php?id=<?=$service['id']?>" class="btn btn-danger" >delete</a>
                                                           
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
<?php
        require_once("./include/footer.php");
     ?>  