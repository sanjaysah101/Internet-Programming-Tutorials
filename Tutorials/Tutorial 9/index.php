<?php
$db=new mysqli("localhost","root","","tutorial10");
if($db->connect_errno)
{
    echo $db->connect_error;
}
else{
    echo "connection done";
}
?>