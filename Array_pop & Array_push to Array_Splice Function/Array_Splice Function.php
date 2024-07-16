<?php
$fruit = ["Apple","green","red","Orenge","Orenges"];
$color = ["Red","Green"];


array_splice($fruit,1,3,$color);

echo"<pre>";
print_r($fruit);
echo"</pre>";
?>