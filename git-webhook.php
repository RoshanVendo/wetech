<?php
// Log webhook requests
file_put_contents("webhook.log", file_get_contents("php://input") . PHP_EOL, FILE_APPEND);

// Run Git pull
exec("git reset --hard origin/main");
exec("git pull origin main");
echo "vera level";
?>
