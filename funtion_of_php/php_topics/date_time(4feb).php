<?php
    echo date("d:m:Y-l")."<br>";
    $str=date("d-m-Y l H:i:s A");
    echo $str;
    $date=date_create("2014-03-15");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo "<br>";
    echo date_format($date,"m:d:Y");
    echo "<br>";
    echo date_default_timezone_get();
    $new =date_create();
    date_get_last_errors($new);
    #$date=date_create();

    date_isodate_set($date,2016,6);
    echo date_format($date,"Y-m-d") . "<br>";

    date_isodate_set($date,2013,5,2);
    echo date_format($date,"Y-m-d")."<br>";

    $winter=date_create("2020-12-31",timezone_open("Asia/Kolkata"));
    $summer=date_create("2013-06-30",timezone_open("Europe/Oslo"));

    echo date_offset_get($winter) . " seconds.<br>";
    echo date_offset_get($summer) . " seconds.";

    print_r(date_parse($str));

    print_r(date_sun_info(strtotime($str),30.7114158,76.6890948));

    print_r(getdate());


    echo count(timezone_abbreviations_list());

?>