<?php

// Handle form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<p>User agent: ".$_SERVER['HTTP_USER_AGENT'].".</p> \n";
    echo "<p>Thanks for your submission $name! We will get to you soon!</p>";
    echo "<p>Your email address is $email.</p>";
} else {
    echo "<p>Error: Invalid form submission method.</p>";
}

// Output query string parameter using $_GET
if(!empty($_GET)) {
    echo "<p>Your query string parameter</p>";
    echo "<ul>";
    foreach($_GET as $key => $value) {
        echo "<li>$key: $value.</li>";
    }
    echo "</ul>";
}

// Output all request parameters using $_REQUEST
if(!empty($_REQUEST)) {
    echo "<h3>Your submitted data:</h3>";
    echo "<ul>";
    foreach($_REQUEST as $key => $value) {
        echo "<li>$key: $value.</li>";
    }
    echo "</ul>";
}

// Output server information
echo "<h2>Your server information</h2>";
echo "<ul>";
echo "<li>Server name: ".$_SERVER['SERVER_NAME']."</li>";
echo "<li>HTTP Host: ".$_SERVER['HTTP_HOST']."</li>";
echo "<li>Script name: ".$_SERVER['SCRIPT_NAME']."</li>";
echo "<li>Server port: ".$_SERVER['SERVER_PORT']."</li>";
echo "<li>Remote address: ".$_SERVER['REMOTE_ADDR']."</li>";
echo "<li>Request URI: ".$_SERVER['REQUEST_URI']."</li>";
echo "<li>Request method: ".$_SERVER['REQUEST_METHOD']."</li>";
echo "<li>Server software: ".$_SERVER['SERVER_SOFTWARE']."</li>";
echo "</ul>";