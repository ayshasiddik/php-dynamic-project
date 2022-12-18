<?php
$id=($_GET['id']);

//delet queary
$conect_database=mysqli_connect('localhost','root','','kufa');
$contactmails_delet_querry="DELETE FROM `contactmails` WHERE id='$id'";
$servicetwo_delet_querry_db=mysqli_query($conect_database,$contactmails_delet_querry);
header("location:./contact_mail_list.php");
?>