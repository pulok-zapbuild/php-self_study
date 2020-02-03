<?php
$var = array('and','to','after');

$se_var=serialize($var);
echo $se_var."<br>";
$unse=unserialize($se_var);
var_dump( $unse);

?>
