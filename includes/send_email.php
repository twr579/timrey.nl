<?php
    // Include required PHPMailer files
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';
    
    // Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    
    // My email address
    define("MY_EMAIL", "***");

    // Keys correspond to form fields, values will be filled with error messages if the user doesn't fill in a field or provides an invalid email address
    $errors = array(
        "name" => "",
        "email" => "",
        "subject" => "",
        "message" => ""
    );

    // Keys correspond to form fields, values will be filled in with the input provided by the user for each field
    $params = array(
        "name" => "",
        "email" => "",
        "subject" => "",
        "message" => ""
    );

    // Email address regular expression from emailregex.com (99.99% works!)
    $email_regex = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD';

    // Set to false and do not send email if any errors occur
    $valid = true;

    if(isset($_POST["email_submit"])) {
        /* 
        This function trims whitespace at the beginning and end of strings, unquotes quoted strings, and replaces HTML special characters to prevent bad stuff from happening
        */
        function validateFormData($formData) {
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        foreach($_POST as $key => $value) {
            // Ignore the submit button
            if($key === "email_submit") {
                continue;
            }
            
            // Set errors for empty fields or an invalid email, otherwise insert the form data into the params array
            if(empty($value)) {
                $errors[$key] = "Please enter your $key";
                $valid = false;
            } else if ($key === "email" && !preg_match($email_regex, $value)) {
                $errors["email"] = "Please enter a valid email address";
                $valid = false;
            } else {
                $params[$key] = validateFormData($_POST[$key]);
            }
        }
        
        if($valid) {
            // Create an instance of PHPMailer
            $mail = new PHPMailer();
        
            // Server settings
            $mail->isSMTP();                                // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                 // Set the SMTP server to send through
            $mail->SMTPAuth = true;                         // Enable SMTP authentication
            $mail->Username = MY_EMAIL;                     // SMTP username                  
            $mail->Password = '***';                        // SMTP password
            $mail->SMTPSecure = 'tls';                      // Enable TLS encryption
            $mail->Port = 587;                              // TCP port to connect to; 587 for TLS
            
            // Recipients
            $mail->setFrom($params["email"], $params["name"]);
            $mail->addAddress(MY_EMAIL);
            $mail->addReplyTo($params["email"], $params["name"]);
            
            // Content
            $mail->isHTML(true);                            // Set email format to HTML
            $mail->Subject = $params["subject"];
            $mail->Body = "<h2>Name:</h2>" . $params["name"] . "<h2>Email:</h2>" . $params["email"] . "<h2>Message:</h2>" . nl2br($params["message"]);
            
            // Try to send the email and output a different message depending on the result
            if(!$mail->send()) {
                $result = "There was an error sending your message. Please try again.";
            } else {
                $result = "Got it, thanks!";
                $params = array(
                    "name" => "",
                    "email" => "",
                    "subject" => "",
                    "message" => ""
                );
            }
            
            // Close the SMTP connection
            $mail->smtpClose();
        }
    }
?>

