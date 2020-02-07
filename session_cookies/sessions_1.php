<?php
session_start();
?>

<?php
$num=count($_SESSION)+1;
if(isset($_POST))
{   
    //fetching data from the form by post method
    //and storing in the session varaible
    $_SESSION["user_$num"] = array('email'=>$_POST["email"], 'passeord'=>$_POST["pword"]);
    echo "$num entries in the session<br>";
    echo 'to see all entries <a href="sessions_2.php">click here</a>';
}
else
{
    echo "input field are empty";
    echo '<a href="session_form.html">back to entry form</a>';
}

?>