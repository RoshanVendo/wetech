<?php
// Log webhook requests
file_put_contents("webhook.log", file_get_contents("php://input") . PHP_EOL, FILE_APPEND);

// Define the correct Git directory
$projectDir = "/var/www/clients/client1/web3/web/test/wetech";

// Force Git to use the correct SSH key
putenv("GIT_SSH_COMMAND=ssh -i /var/www/sunniva-solar.de/home/web3/.ssh/id_rsa -o IdentitiesOnly=yes");

// Run Git pull as the correct user
exec("sudo -u web3 /usr/bin/git -C " . escapeshellarg($projectDir) . " pull origin main 2>&1", $output);

echo implode("\n", $output);
?>
