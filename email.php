<?php
if (isset($_POST['submit'])) {
  $fname = $_POST['c_fname'];
  $lname = $_POST['c_lname'];
  $visitor_email = $_POST['c_email'];
  $message = $_POST['c_message'];
$email_subject = $_POST['c_subject']


	$email_body = "You have received a new message from the user $fname $lname.\n".
                            "Here is the message:\n $message".
            
  $to = "portrayalofsciencepodcast@gmail.com";

  $headers = "From: $to_from \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  echo "email sent.";
}
?>
