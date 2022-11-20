<?php




    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $website = $_POST['website'];


    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            ini_set ("SMTP",$website);
            ini_set ("sendmail_from", $email);
            $receiver = "zaozao03@gmail.com";
            $subject = "From: $name <$email> ";
            
            $body = "Test";
          
            $sender = "From $email";
            // if(mail($receiver, $subject, $body, $sender)){
            //     echo "Your message has been sent";
            // }
            // else{
            //     echo "Sorry, failed to send your message!";
            // }
        }
        else{
            echo "Enter a valid email address!";
        }
    }
    else{
        echo "Email and password field is required!";
    }
?>