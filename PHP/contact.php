<?php
$message_sent = false;

$name = $email = $gender = $comment = $website = "";
$emailErr= "";

if(isset($_POST['submit'])){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email_from = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $email_to = 'hamhamjottform@outlook.com';
        //Nella emailja
        $email_subject = "Weboldal contact - $subject.\n";
        $message = "Firstname: $firstname \n Lastname: $lastname \n\n üzenet: \n $message";
        $headers = "From: $email_from \r\n";

        $secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
        $responseKey = $_POST['g-recaptcha-response'];
        $UserIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?
                secret=$secretKey&
                response=$responseKey&
                remoteip=$UserIP";
        
        $response = file_get_contents($url);
        $response = json_decode($response);

        if($response->success){
            mail($email_to,$email_subject,$email_body, $headers);
            echo "Message sent Sucessfully";
        }
        else{
            echo "<span>Invalid Captcha, Please try again";
        }
    }
    else{
        $emailErr = "Invalid email format";
    }
}

?>