<?php
@session_start();
function spamcheck($field)
  {
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }


  $mailcheck = spamcheck($_REQUEST['email']);
  $email = strip_tags($_REQUEST['email']);
    $phone = strip_tags($_REQUEST['phone']);
    $message = strip_tags($_REQUEST['message']);
	$name = strip_tags($_REQUEST['name']);
	$subject = strip_tags($_REQUEST['subject']);

  if($name=='' or $message=='' or $phone=='' or $email=='') {
   $_SESSION["msg"]= "<br><p style='color:red;'>One or more required inputs missing... Try again!</p><br>";
	header("location: contact.php");
    }
	
	else if ($mailcheck==FALSE)
    {
    $_SESSION["msg"]= "<br><p style='color:red;'>Invalid email address format. Try again!</p><br>";
	header("location: contact.php");
    }	
  else
    {
	//send email
    $subject="Web Enquiry from - ".$name." - ".$_POST['subject'];
	$details="Sender: ".$name."\n"."Email Address: ".$email."\n"."Phone number: ".$phone."\n\n".$message;
	
    @mail("luckyechem@yahoo.com", $subject, $details, "From: $email");
    $_SESSION["msg"]= "<br><p style='color:green;'><b>Your message was delivered successfully!</b>
<br>We'll get back to you as soon as possible.</p><br>";
header("location:contact.php");
  }
?>