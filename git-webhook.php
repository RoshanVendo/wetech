<?php
// Log webhook requests
file_put_contents("webhook.log", file_get_contents("php://input") . PHP_EOL, FILE_APPEND);

// Run Git pull
exec("git pull origin main", $output);
echo implode("\n", $output);
?>
