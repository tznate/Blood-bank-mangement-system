<?php
$db=new PDO('mysql:host=localhost;dbname=mypro_se','root','');
if($db)
{
    echo "";
}
else
{
    echo "Not Connect";
}
?>