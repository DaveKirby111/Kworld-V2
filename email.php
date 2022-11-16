<?php

$messagesent = false;

    if (isset(
        $_POST['email']) && 
        $_POST['email'] != ''
        ) {

            if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {


                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $to = "dkirby111@aol.com";
                $body = " ";
                
                
                $body = $message; 

                mail($to, $email, $body, $subject); 

                echo "Your Email has been sent.";

                $messagesent = true;

            }

}

    
    

?>