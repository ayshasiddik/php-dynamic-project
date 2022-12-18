
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
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Service Tittle</th>
                                                            <th scope="col">Service Heading</th>
                                                            <th scope="col">Service Description</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conect_database=mysqli_connect('localhost','root','','kufa');
                                                        $imageservice_data_quary="SELECT * FROM `imageservices`";
                                                        $imageservice_data_quary_db=mysqli_query($conect_database, $imageservice_data_quary);
                                                        $serial=1;
                                                        foreach ($imageservice_data_quary_db as $service) {?>
                                                        <tr>
                                                        <th scope="row"><?=$serial++?></th>
                                                        <td><img src="./uploade/gallery/<?=$service['service_image']?>"alt="" height="100" width="100">
                                                         </td>
                                                        <td><?=$service['service_tittle']?></td>
                                                        <td><?=$service['service_heading']?></td>
                                                        <td><?=$service['service_description']?></td>
                                                        <td><span class="badge <?=($service['services_status']=="active")? "badge-success" : "badge-danger"?>"><?=$service['services_status']?></span></td>
                                                        <td>
                                                        <span><a href ="./image_service_upade.php?id=<?=$service['id']?>"class="btn btn-warning">edit<a></span><a href="./image_service_delet.php?id=<?=$service['id']?>" class="btn btn-danger" >delete</a>
                                                           
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