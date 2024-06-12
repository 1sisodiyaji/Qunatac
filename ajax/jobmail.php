<?php
require_once '../vendor/autoload.php'; 

// Define your recipient list (replace with your actual email addresses)
$recipients = array(
        "resumes@accord-soft.com", 
        "adroitblr@vsnl.com", 
        "want2b@aditi.com", 
        "info@agnisoft.com", 
        "ashok@altcorp.com", 
        "hrd@altair.soft.net", 
        "apxhr@apex.soft.net", 
        "anzithrd@anz.com", 
        "gatisoft@blr.vsnl.net.in", 
        "hr@india.aspectdv.com", 
        "murugesh@aztec.soft.net", 
        "shrieks@aztecsoft.com", 
        "joinus@axes-mach01.dscc.com", 
        "bitplus@bgl.vsnl.net.in", 
        "baehal@giasbg01.vsnl.net.in", 
        "bflsvs@bfl.soft.net", 
        "shenoy@bbyb.com", 
        "btiblr@vsnl.com", 
        "cdland@blr.vsnl.net.in", 
        "bedifferentall@ctp.com", 
        "resume@cbsinc.com", 
        "resumes@cgs.cgsmith.soft.net", 
        "crvcon@vsnl.com", 
        "corpd@vsnl.com", 
        "hr-rapid5@cosystems.com", 
        "psblore.crescent@axcess.net.in", 
        "careers@cybercash.co.in", 
        "delphi@blr.vsnl.net.in", 
        "hrdblr@india.dharma.com", 
        "cs.murali@digital.com", 
        "snova@giasbg01.vsnl.net.in", 
        "jobs@EnThink.com", 
        "ermg@vsnl.com", 
        "fseadm@yahoo.com", 
        "mari@ftdpl.com.sg", 
        "kishore@esseven.com", 
        "jobs@embeddedwireless.com", 
        "arif@corp.hcltech.com", 
        "resumes@india.hp.com", 
        "hsshr@hss.hns.com", 
        "ibmjobs@in.ibm.com", 
        "PraveenN@icode.com", 
        "hr-india@icode.com", 
        "isit@bgl.vsnl.net.in", 
        "talent-india@iisweb.com", 
        "chois@innomedia.soft.net", 
        "careers@inf.com", 
        "info@intraksys.com", 
        "info@ipcellindia.com", 
        "careers@its.soft.net", 
        "prasanth@kalkitech.com", 
        "TOI_BLR@kindlesystems.com", 
        "excitement@kshema.com", 
        "lsiblr@bgl.vsnl.net.in", 
        "lssindia@giasbg01.vsnl.net.in", 
        "resumes@lgsi.co.in", 
        "tk@lucent.com", 
        "jobs-blr@megasoftus.com", 
        "cranja@meridian.it.com", 
        "info@mcdnet.ems.vsnl.net.in", 
        "navinkumars@hotmail.com", 
        "merit@bgl.vsnl.net.in", 
        "pradeepk@microland.co.in", 
        "medha@giasbg01.vsnl.net.in", 
        "rana@giasbg01.vsnl.net.in", 
        "careers@netsol.co.in", 
        "tspahwa@hewitt.com", 
        "arunt@giasbga.vsnl.net.in", 
        "career@novell.com"
    
);

// Define your SMTP server details
$smtp_server = "smtp.gmail.com";
$smtp_port = 587; // This is a common port for SMTP with TLS encryption
$smtp_username = "07singhaman123@gmail.com";
$smtp_password = "rhjpqdbjrcjzcvhl";

// Define your email content
$subject = "Your Custom Subject";
$message = "This is your custom message body.";

// Function to send email with SMTP
function send_email($to, $subject, $message) {
  global $smtp_server, $smtp_port, $smtp_username, $smtp_password;

  // Include PHPMailer library
  require 'PHPMailer/PHPMailerAutoload.php'; 

  $mail = new PHPMailer(true);

  try {
    // Set mailer to use SMTP
    $mail->isSMTP(); 
    $mail->Host = $smtp_server;
    $mail->Port = $smtp_port;
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 

    // Set SMTP username and password
    $mail->Username = $smtp_username;
    $mail->Password = $smtp_password;

    // Set email content
    $mail->setFrom('07singhaman123@gmail.com', 'Aman singh');
    $mail->addReplyTo('noreply@yourdomain.com', 'No Reply');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->isHTML(true); 
    $mail->Body = $message;

    // Send email
    if ($mail->send()) {
      echo "Email sent to $to successfully!<br>";
    } else {
      echo "Error sending email: " . $mail->ErrorInfo . "<br>";
    }
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "<br>";
  }
}

// Loop through recipients and send email
foreach ($recipients as $recipient) {
  send_email($recipient, $subject, $message);
}
?>
