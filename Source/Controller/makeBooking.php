
<?php
if(isset($_POST['name']) && isset($_POST['department']) 
    && isset($_POST['email']) && isset($_POST['datefrom']) && 
    isset($_POST['dateto']) && isset($_POST['chk_group']) && 
    isset($_POST['reason'])) 
{
date_default_timezone_set('Europe/London');    
$to      = 'itsupport@thelowry.com'; 
$subject = 'Booking';
$headers = 'From:' . $_POST['email'] . "\r\n" .
        'Cc:' . $_POST['email'] . "\r\n" .
    'Reply-To:' . $_POST['email'] . "\r\n" . 
    'X-Mailer: PHP/' . phpversion();
$message = "Name: " . $_POST['name'] . "\nDepartment: " . 
    $_POST['department'] . "\nEmail: " . $_POST['email'] . 
    "\nDate From: " . $_POST['datefrom'] . "\nDate To: " . 
    $_POST['dateto'] . "\nEquipment Required: \n" . 
    implode("\n", $_POST['chk_group']) . "\nReason: " . $_POST['reason'];
$message + wordwrap($message, 70);
try{
    if(mail($to, $subject, $message, $headers))
    {
        header("Refresh: 3; url=http://booking.lowry.com/");
        echo "Booking was successful, redirecting to booking form...";
    }else{
        echo("Mail could not be sent");
    }
}
catch(Exception $error_string)
{
    echo($error_string);
}

}else{
    echo("You missed some info press back to complete the form.");
}
?>
