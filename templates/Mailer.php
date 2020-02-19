<?php 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer 
{
    const API_KEY = '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';

    private function getBaseEmail()
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP            
        $mail->Host       = 'smtp.gregoiredegaine.fr';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'apikey';                               // SMTP username
        $mail->Password   = self::API_KEY;                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
        
        //à ne pas oublier pour éviter les problèmes d'accent ! 
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('gregoire.delangenhagen@student.campus.accademy', 'Grégoire Portfolio');
        return $mail;
    }

    public function alertForm($name, $emailp, $commentp)
    {
        try {
            $mail = $this->getBaseEmail();
            $mail->addAddress('greg_degaine@hotmail.fr','Grégoire');     // Add a recipient 

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Nouvelle recommandation de la part de '.$name.' voici son email: '.$emailp. '';// Bien penser à changer la variable en une différente de celle de la base de donnée
            $mail->Body    = '<h1>Yessss tu as recu une Nouvelle recommandation de '.$name.' voici son message: <br>'.$commentp.'   </h1>';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}