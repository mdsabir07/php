<?php
date_default_timezone_set("Asia/Dhaka");
// echo date('d/m/y');
// echo date('d/M/Y');
// echo date('d M, Y'); //24 May, 2023
// echo date('d F, Y'); //24 May, 2023 Full month name
// echo date('dS M, Y'); //24th May, 2023
// echo date('dS M, Y h:i:s'); //24th May, 2023 03:32:58 including time GMT format
// echo date('dS M, Y H:i:s'); //24th May, 2023 15:34:24 including time 
// echo date('dS M, Y H:i:s a'); //24th May, 2023 15:35:12 pm including time pm
echo date('dS F, Y H:i:s A'); //24th May, 2023 15:35:12 PM including time PM
// echo date('dS F, Y H:i:s A', time()+12*60*60); //24th May, 2023 15:35:12 PM including time PM
echo "\n";
// echo date('z'); //Today 143 days in this year
echo date('t'); //How much days in this month