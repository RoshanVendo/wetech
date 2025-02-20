<?php
// Log webhook requests
file_put_contents("webhook.log", file_get_contents("php://input") . PHP_EOL, FILE_APPEND);

// Force Git to use the correct SSH key
putenv("GIT_SSH_COMMAND=ssh -i /var/www/sunniva-solar.de/home/c543261_w3_ssh1/.ssh/id_rsa -o IdentitiesOnly=yes");

// Run Git pull
exec("/usr/bin/git -C pull origin main 2>&1", $output);

echo implode("\n", $output);
?>
