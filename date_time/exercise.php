
<?php
echo "Copyright &copy; ";//copyright with current year
echo "2000-".date("Y");
echo "<br>";


$date=date_create("2020-06-19 13:44:02");//changing of date format
echo date_format($date,"d/m/y h:i:s A");
echo "<br>";echo "<br>";


$current_date=date_create();//timestamp of current date
echo "current date => ".date_format($current_date,"d/m/Y h:i:s A");
echo "<br>";
echo "timestamp of current day => ".date_timestamp_get($current_date);
echo "<br>";echo "<br>";


echo "current timestamp => ".time();//current date from timestamp
echo "<br>";
echo "date from timestamp => ".date("y-m-d",time());
echo "<br>";echo "<br>";


echo "current date => ".date_format($current_date,"d/m/Y h:i:s A");
echo "<br>";
$d=date_modify(date_create(),"+1 month");//addition of 1 month in current date
echo "after adding 1 month =>".date_format($d,"d/m/Y h:i:s A");
echo "<br>";
$c=date_modify(date_create(),"+2 days");//addtion of 2 days in current date
echo "after adding 2 days =>".date_format($c,"d/m/Y h:i:s A");
echo "<br>";echo "<br>";

$date1=date_create("2020-06-19 13:44:02");
echo "date1 => ".date_format($date1,"d/m/Y H:i:s");
echo "<br>";
$date2=date_create("2020-10-13 23:04:22");
echo "date2 => ".date_format($date2,"d/m/Y H:i:s");
echo "<br>";
$interval=date_diff($date1,$date2);//difference between two dates
echo "difference b/w date1 and date2 => ";
echo $interval->format("%y Year %m Month %d Day %h Hours %i Minute %s Seconds");
echo "<br>";echo "<br>";

echo "current date => ".date_format($current_date,"d/m/Y h:i:s A");
echo "<br>";
$date_utc=date_create("now");
date_timezone_set($date_utc,timezone_open("UTC"));//current date and time of utc
echo "date_UTC   => ".date_format($date_utc,"d/m/Y H:i:s A");






?>