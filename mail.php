<?php
$to = "tech1@bacttraining.com";
$subject = "test mail from citizenships";
$txt = "Hello world!";
$headers = "From: debowfadi@gmail.com" . "\r\n" .
"CC: fadi.debow16@gmail.com";

mail($to,$subject,$txt,$headers);
?> 