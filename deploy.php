<?php
$test = file_put_contents("./logs/test.log", "testing");
echo $test;

$date = date_create();
$payload = date_format($date, 'Y-m-d H:i:s') . "\n" .
           "=========== POST DATA ===========\n\n" .
           var_dump($_POST) .
           "\n\n=========== END POST DATA ===========\n";

file_put_contents("./logs/deploy.log", $payload, FILE_APPEND);

$pull_output = shell_exec("git pull origin production");
file_put_contents("./logs/deploy.log", $pull_output, FILE_APPEND);

echo $pull_output;
echo "\n updated again";