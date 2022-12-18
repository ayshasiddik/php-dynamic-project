
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
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Massage</th>
                                                            <th scope="col">Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $conect_database=mysqli_connect('localhost','root','','kufa');
                                                        $contactmails_data_quary="SELECT * FROM `contactmails`";
                                                        $contactmails_data_quary_db=mysqli_query($conect_database,$contactmails_data_quary);
                                                        $serial=1;
                                                       foreach ( $contactmails_data_quary_db as  $service) {?>
                                                        <tr>
                                                        <th scope="row"><?=$serial++?></th>
                                                        <td>
                                                           
                                                             <?=$service['name']?>
                                                         </td>
                                                        <td>
                                                            <?=$service['email']?>
                                                        </td>
                                                        <td>
                                                            <?=$service['massage']?>
                                                        </td>
                                                        <td>
                                                            <a href ="./fontand/fontand.php?id=<?=$service['id']?>"
                                                            class="btn btn-warning">edit</a>
                                                                
                                                            <a href="./contact_mail_delet.php?id=<?=$service['id']?>" 
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
