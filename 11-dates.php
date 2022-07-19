<?php
$timestamp = time();
date('Y-m-d', $timestamp);

// convert timestamp to string
echo strtotime('2020-01-01');
echo strtotime('now'); // time() x2 faster
echo strtotime('4 May 2020');
echo strtotime('+1 day');
echo strtotime('+1 month');
echo strtotime('last Sunday');

// Carbon -> PHP API extension for DateTime https://carbon.nesbot.com/