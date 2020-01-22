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

$address=strip_tags($_REQUEST['address']);
  $mailcheck = spamcheck($_REQUEST['email']);
  $email=strip_tags($_REQUEST['email']);
  $phone = strip_tags($_REQUEST['num']);
  $name = strip_tags($_REQUEST['name']);
	$description = strip_tags($_REQUEST['description']);

  if($name=='' or $address=='' or $description=='' or $phone=='' or $email=='') {
    $_SESSION["msg"]= "<br><p style='color:red;text-align:center'>One or more required inputs missing... Try again!</p><br>";
	header("location: index.php");
    }
	
	else if ($mailcheck==FALSE)
    {
    $_SESSION["msg"]= "<br><p style='color:red;text-align:center'>Invalid email address format. try again!</p><br>";
	header("location: index.php");
    }	
  else{
    $subject="Clean'T Up Booking from - ".$name;
	$details="Sender: ".$name."\n"."Email Address: ".$email."\n"."Phone number: ".$phone."\n\n".$description;
	
    @mail("prince007degreat@yahoo.com", $subject, $details, "From: $email");
    $_SESSION["msg"]= "<br><p style='color:green;text-align:center'><b>Your booking was successful!</b>
<br>We'll get back to you as soon as possible.<br><b style='color:red'>Note! all payments would be made on arrival of workers.</b></p>";
header("location:index.php");
  }
?>