<?php
echo time()."\n";
echo mktime(0,0,0,05,25,2023)."\n";
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,05,25,2023)."\n";
echo gmmktime(0,0,0,05,25,2023)."\n";
echo (72800-51200)/(60*60);

echo "\n";

echo (mktime(0,0,0,05,25,1986)-mktime(0,0,0,05,25,2023))/(24*60*60);