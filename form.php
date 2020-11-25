<?php
        include("includes/db.php");
        include("admin/includes/functions.php");

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
    
        // Load Composer's autoloader
        require 'vendor/autoload.php';

if(isset($_POST['action'])){
    $action = $_POST['action'];      
    $category = array();
        if( $action == "create_enquiry" ){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $name = $_POST['contact_name'];
        $company_name = $_POST['company_name'];
        $your_message = $_POST['your_message'];
        $categories = join(', ', $_POST['category']);
        $email = $_POST['email'];

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'amamsingh1407@gmail.com';              // SMTP username
            $mail->Password   = 'Sih@2020';                             // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, 'Mailer');
            $mail->addAddress('ashutosh.tambe@somaiya.edu', 'Company');
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Enquiry';
            $mail->Body    = 'Name: '.$name . '<br>Email: '.$email . '<br>Company Name: '.$company_name . '<br>Message: '.$your_message .'<br>I would like to receive information about the '.$categories;

            $mail->send();
            echo $categories;

            } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    }
?>  