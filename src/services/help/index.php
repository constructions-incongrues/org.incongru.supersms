<?php
// Dependencies
require_once(__DIR__.'/../../lib.php');

// Get services list
$services = getServices(__DIR__.'/..');

if (is_null($body)) {
    // If no service name is provided, list available services
    echo sprintf('SERVICES : %s', implode(', ', array_keys($services)));
} else {
    if (in_array($body, array_keys($services))) {
        // Existing service
        if (isset($services[$body]['help'])) {
            // Service provides help
            require_once($services[$body]['help']);
        } else {
            // Service do not provide help
            echo sprintf('NO HELP FOR SERVICE "%s"', $body);
        }
    } else {
        // Unknown service
        echo sprintf('UNKNOWN SERVICE "%s"', $body);
    }
}
