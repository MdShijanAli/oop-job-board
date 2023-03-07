<?php
require_once 'classes/application.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $job_id = $_POST['job_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $application = new Application($job_id, $name, $email, $phone);
    if ($application->save()) {
        echo "<h2 class='text-center text-2xl'>Application Submitted Successfuly?</h2>";
    } else {
        echo "<h2 class='text-center text-2xl'>Application Failed </h2>";
    }
} else {
    echo "<h2 class='text-center text-2xl'>Request</h2>";
}
