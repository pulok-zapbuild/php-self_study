<?php
    session_start();
    // remove all session variables
    //session_unset();

    // destroy the session
    session_destroy();
    echo "session destroyed";
    echo "<br>";
    echo 'create new session with new entreis <a href="session_form.html">click here</a>';


?>