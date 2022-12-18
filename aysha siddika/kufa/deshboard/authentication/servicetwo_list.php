
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
                                                            <th scope="col">Service Icon</th>
                                                            <th scope="col">Percentange</th>
                                                            <th scope="col">Service Title</th>
                                                            <th scope="col">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conect_database=mysqli_connect('localhost','root','','kufa');
                                                        $servicetwoo_data_quary="SELECT * FROM `servicestwoo`";
                                                        $servicetwoo_data_quary_db=mysqli_query($conect_database,$servicetwoo_data_quary);
                                                        $serial=1;
                                                       foreach ( $servicetwoo_data_quary_db as  $service) {?>
                                                        <tr>
                                                        <th scope="row"><?=$serial++?></th>
                                                        <td>
                                                            <span class="card-text badge badge-primary m-1 ">
                                                             <i class="<?=$service['service_icon']?> fs-5 " aria-hidden="true"></i></span>
                                                         </td>
                                                         <td>
                                                            <?=$service['service_value']?>
                                                        </td>
                                                        <td>
                                                            <?=$service['service_tittle']?>
                                                        </td>
                                                        <td>
                                                            <a href ="./servicetwo_update.php?id=<?=$service['id']?>"
                                                            class="btn btn-warning">edit</a>
                                                                
                                                            <a href="./servietwo_delet.php?id=<?=$service['id']?>" 
                                                            class="btn btn-danger" >delete</a>
                                                           
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
