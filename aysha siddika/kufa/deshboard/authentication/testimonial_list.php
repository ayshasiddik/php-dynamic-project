
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
                                                           

                                                            <th scope="col">Comment</th>
                                                            <th scope="col">Tiitle</th>
                                                            <th scope="col">Subtittle</th>
                                                            <th scope="col">Actions</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conect_database=mysqli_connect('localhost','root','','kufa');
                                                        $testimonial_data_quary="SELECT * FROM `testimonialservices`";
                                                        $testimonial_data_quary_db=mysqli_query($conect_database, $testimonial_data_quary);
                                                        $serial=1;
                                                      foreach ($testimonial_data_quary_db as  $service) {?>
                                                        <tr>
                                                        <th scope="row"><?=$serial++?></th>
                                                        <td>
                                                        
                                                        
                                                        <img src="./uploade/Tsmlpic/<?=$service['p_image']?>"alt="" height="100" width="100">
                                                         </td>
                                                        
                                                        <td><?=$service['comments']?></td>
                                                        <td><?=$service['info_tiitle']?></td>
                                                        <td><?=$service['info_subtitle']?></td>
                                                        <td>
                                                        <a href ="./testimonial_update.php?id=<?=$service['id']?>"class="btn btn-warning">edit</a> <a href="./testimonial_delet.php?id=<?=$service['id']?>" class="btn btn-danger" name="delet" >delete</a>
                                                           
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