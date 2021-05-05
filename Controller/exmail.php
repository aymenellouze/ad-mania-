<?php     
$to_email = 'ahmed.koubaa@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: <aymen.ellouze.2000@gmail.com>';
mail($to_email,$subject,$message,$headers);
?>