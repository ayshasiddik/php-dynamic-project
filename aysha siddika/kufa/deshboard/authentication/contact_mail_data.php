<?php
session_start();
$name=($_POST['name']);
$email=($_POST['email']);
$massage=($_POST['massage']);

$flag=false;

if($name){
    $remove_word_speach_name=str_replace(" ","",$name);
    if(ctype_alpha($remove_word_speach_name)){
            
    }else{
        $flag=true;
        $_SESSION['name_error']="number not allow";
    }
}else{
    $flag=true;
   $_SESSION['name_error']="fill the name feild";
}

if($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

    }else{
        $flag=true;
    $_SESSION['email_error']="invalid email";
    }
}else{
    $flag=true;
    $_SESSION['email_error']="fill the email feild";
}
if($massage){

}else{
    $flag=true;
    $_SESSION['massage_error']="fill the massage feild";
}

if($flag){
    header("location:./fontand/fontand.php");
}
else{
    $conect_database=mysqli_connect('localhost','root','','kufa');
    $insert_contact_mail="INSERT INTO contactmails (name,email,massage) VALUES('$name','$email','$massage')";
    $insert_contact_mail_db= mysqli_query($conect_database,$insert_contact_mail);
    
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ayshasiddika102636@gmail.com';                     //SMTP username
    $mail->Password   = 'lcamalvpysuadszy';                               //SMTP password
    $mail->SMTPSecure = 'tls';                                 //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('siddikaaysha279@gmail.com', 'aysha');     //Add a recipient
   
    
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$name";
    $mail->Body    = "$massage";
   

    $mail->send();
    echo 'Message has been sent';
    header("location:./fontand/fontand.php#contact");
    $_SESSION['success_data']="Your mail is successfully send";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>