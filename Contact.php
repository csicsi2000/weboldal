<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <meta charset="utf-8" lang="en" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/navbar.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/Contact.css"/>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <title>Balog Nella - Contact</title>
    </head>
    <body>
        <script src="Js/common.js"></script>
        <script>
            function ValidateEmail(inputText)
            {
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                if(inputText.value.match(mailformat))
                {
                    event.preventDefault();
                }
            }
        </script>
        
        <div id="nav-placeholder"></div>
        <div class="afterNav">
           

            <div class="contact-form">  
                <h2>CONTACT ME</h2>
                
                
                <form name="form1" action="php/contact.php" method="POST">
                    <div class="flexbox">
                        <div class="inputdiv">
                            <input type="text"  name="firstname" value="" class="oneline" required>
                            <label for="firstname" class="label-name"><span class="content">First Name</span></label>    
                        </div>  
                        <div class="space"></div>
                        <div class="inputdiv">
                            <input type="text"  name="lastname" value="" class="oneline" required>
                            <label for="firstname" class="label-name"><span class="content">Last Name</span></label>    
                        </div> 
                    </div>
                    <div class="inputdiv">
                        <input type="text" name="email" value="" required><p><?php echo $emailErr; ?></p>
                        <label for="firstname" class="label-name"><span class="content">Email Adress</span></label>    
                    </div>
                    <div class="inputdiv">
                        <input type="text" name="subject" value="" required>
                        <label for="firstname" class="label-name"><span class="content">Subject</span></label>    
                    </div>
                    <div class="inputdiv message">
                        <input type="text" name="message" value="" required id="message">
                        <label for="firstname" class="label-name"><span class="content">Message</span></label>    
                    </div>
                    <div class="inputdiv recaptcha">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    </div>
                    <div class="inputdiv">   
                        <button type="submit" name="submit"  class="submit-btn" onclick="ValidateEmail(document.form1.message)">Send Message</button>
                    </div>
                        <div class="status">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>