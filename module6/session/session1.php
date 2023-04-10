<?php
session_name('muhammed');
session_start([
    'cookie_lifetime'=>60
]);
$_SESSION['name'] = "Sabir"; 
echo $_SESSION['name'];

