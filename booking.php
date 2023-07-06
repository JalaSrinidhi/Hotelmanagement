<?php
// Start the sessio
session_start();
// Check if the session is started
if (session_status() === PHP_SESSION_ACTIVE) {
    echo "Session is started.";
} else {
    echo "Session is not started.";
}
?>
