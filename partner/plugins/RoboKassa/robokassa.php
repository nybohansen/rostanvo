<?php
/**
 * Processes RoboKassa request
 */

require_once '../../scripts/bootstrap.php';

Gpf_Session::create(new Pap_Tracking_ModuleBase());
    
$tracker = RoboKassa_Tracker::getInstance();
$tracker->process();
?>
