<?php
session_start();

//show all the entries in the sessoin variable
if(count($_SESSION)>0)
{
    foreach ($_SESSION as $key=>$value)
    {
        echo "$key<br>";
        foreach($value as $k=>$v)
        {
            echo "$k=>$v";
            echo "<br>";
        }
    }
echo 'to add more enteries<a href="session_form.html"> click me</a>';
echo "<br>";
echo 'to destroy session<a href="session_end.php"> click me</a>';
}
else
    echo "empty session variable";


?>