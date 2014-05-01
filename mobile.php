<?php

// Include and instantiate the class
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ($detect->isMobile()) print"YES Mobile Device!";
else print"NO Mobile Device.";

?>
