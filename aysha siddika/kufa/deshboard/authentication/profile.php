
<?php
   require_once("./include/header.php");
   
  
?>
        <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1 class="text-primary">PROFILE</h1>
                                </div>
                            </div>
                        </div>
         <div class="container">
            <div class="row  justify-content-center">
            <div class="col-md-8">
            <div class="example-container " style="padding: 10px;">
                   <form action="profile_data.php" method="post" enctype="multipart/form-data">
                   <h4 class="text-info text-center">Update profile</h4>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name_new" 
                         value="<?=isset($_SESSION['name_data']) ?  $_SESSION['name_data']:" " ?>"
                        > 
                      

                        </div>
                        <?php
                           if(isset( $_SESSION['name_error'])){?>

                       <p class="text-danger"><?= $_SESSION['name_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['name_error']);
                          ?>
                        <div class="input-group mb-3">
                        <input type="tel" class="form-control" name="phone_number" 
                        
                        placeholder="phone number"
                        
                        > 
                        </div>
                        <?php
                           if(isset( $_SESSION['phone_error'])){?>

                       <p class="text-danger"><?= $_SESSION['phone_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['phone_error']);
                          ?>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="address" 
                        placeholder="address"
                         
                        > 
                        </div>
                        <?php
                           if(isset( $_SESSION['address_error'])){?>

                       <p class="text-danger"><?= $_SESSION['address_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['address_error']);
                          ?>
                        
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="office_address" 
                        placeholder="office_address"
                         
                        > 
                        </div>
                        <?php
                           if(isset( $_SESSION['office_address_error'])){?>

                       <p class="text-danger"><?= $_SESSION['office_address_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['office_address_error']);
                          ?>
                          <button type="submit" class="btn btn-info"  name='update'>Update</button>
                          <br>
                          <br>
                        <p>upload profile picture</p>
                        <div class="input-group mb-3">
                        <input type="file" class="form-control" name="profile_picture"> 
                        </div>
                        <button type="submit" class="btn btn-info"  name='update_pic'>Update profile picture</button>
                        <?php
                        if(isset($_SESSION['success_name_value'])){?>
                            <p class="text-info"><?=$_SESSION['success_name_value']?></p>
                        <?php
                       
                        }
                        unset($_SESSION['success_name_value'])
                        ?>
                        <br>
                        <br>
                        <h4 class="text-info text-center">uplode social link</h4>
                          <div class="input-group mb-3">
                        <input type="url" class="form-control" name="facebook" 
                        placeholder="facebook"
                         
                        > </div>
                          <div class="input-group mb-3">
                        <input type="url" class="form-control" name="twitter" 
                        placeholder="twitter"
                         
                        >  </div>
                         <div class="input-group mb-3">
                        <input type="url" class="form-control" name="instgram" 
                        placeholder="instragam"
                         
                        >  </div>
                         <div class="input-group mb-3">
                        <input type="url" class="form-control" name="plink" 
                        placeholder="plink"> 
                         </div>
                        <button type="submit" class="btn btn-info"  name='update_link'>Upload social link</button>
                        <?php
                        if(isset($_SESSION['success_link_value'])){?>
                            <p class="text-info"><?=$_SESSION['success_link_value']?></p>
                        <?php

                        }
                        unset($_SESSION['success_link_value'])
                        ?>
                        <br>
                        <br>
                        <br>
                        <h4 class="text-info text-center">change password</h4>
                       <div class="input-group mb-3">
                        <input type="password" class="form-control" name="old_password" placeholder="old password"> 
                        </div>
                        <?php
                           if(isset( $_SESSION['old_password_error'])){?>

                       <p class="text-danger"><?= $_SESSION['old_password_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['old_password_error']);
                          ?>
                        <div class="input-group mb-3">
                        <input type="password" class="form-control" name="new_password" placeholder="new password"> 
                        </div>
                        <?php
                           if(isset( $_SESSION['new_password_error'])){?>

                       <p class="text-danger"><?= $_SESSION['new_password_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['new_password_error']);
                          ?>
                        <div class="input-group mb-3">
                        <input type="password" class="form-control" name="confirm_password" placeholder="confirm password"> 
                        </div>
                        <?php
                           if(isset( $_SESSION['confirm_password_error'])){?>

                       <p class="text-danger"><?= $_SESSION['confirm_password_error']?></p>
                        <?php
                         }
            
                       unset( $_SESSION['confirm_password_error']);
                          ?>
                        
                        <button type="submit" class="btn btn-info" name='change_password' >Change Password</button>
                        <?php
                        if(isset($_SESSION['success_value'])){?>
                            <p class="text-info"><?=$_SESSION['success_value']?></p>
                        <?php

                        }
                        unset($_SESSION['success_value'])
                        ?>
                        
                        
                        </form> 
                 </div>                 
                </div>
            </div>
         </div>
                            
     <?php
        require_once("./include/footer.php");
     ?>            