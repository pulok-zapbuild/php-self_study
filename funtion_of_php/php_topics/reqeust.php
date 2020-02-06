<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  age:  <input type="text" name="fage">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $age = $_REQUEST['fage'];
    if (empty($name)) {
        echo "Name is empty"."<br>";
            } else {
        echo $name."<br>";
         }
    if (empty($age)) {
        echo "Age is empty"."<br>";
     } else {
            echo $age."<br>";
             }

}
?>

</body>
</html>