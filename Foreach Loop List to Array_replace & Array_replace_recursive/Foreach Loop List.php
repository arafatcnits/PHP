<?php

$sheet = [
    [1,"Imtiaz","Head","50000"],
    [2,"Ismail","Head","40000"],
    [3,"Rahat","oner","30000"]

];



echo "<table border='1px' cellpadding='5px' cellspacing= '0px'>

<tr>
<th>No.</th>
<th>Name</th>
<th>Setion</th>
<th>Salary</th>

</tr>

";

foreach ($sheet as list ($id,$name,$setion,$salary)){

    echo "<tr><td>$id</td><td>$name</td><td>$setion</td><td>$salary</td></tr>";
}

echo "</table>";


?>