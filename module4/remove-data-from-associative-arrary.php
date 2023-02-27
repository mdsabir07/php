<?php
$lists = array('fname'=>'Sabirul','lname'=>'Islam');
print_r($lists);

unset($lists['lname']);
print_r($lists);