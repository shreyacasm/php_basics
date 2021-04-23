<?php
    //echo date('d'); //Day
    //echo date('m'); //Month
    //echo date('Y'); //year
    //echo date('l'); //day of the week
      
    //echo date('d/m/Y,l');

    // echo date('h'); //hour
    // echo date('i'); //min
    // echo date('s'); //seconds
    // echo date('a'); //AM or PM

    // echo date('h:i:sa'); // output wrong time

    date_default_timezone_set("Asia/Kolkata"); // needed for indian time
    // echo date('h:i:sa');


    $timestamp = mktime(11, 15, 55, 6, 9, 2000);
    //echo $timestamp;
    //echo date('d/m/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('11:15:55pm September 6 2000');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+3 months');

    echo date('d/m/Y h:i:sa', $timestamp5);
    
?>
