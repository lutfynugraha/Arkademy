<?php
echo "<p>Tanggal diantara [2018-11-01 - 2018-11-05] adalah:</p>";
$date1 = "2018-11-01";   
$date_from = strtotime($date1);
  
$date2 = "2018-11-05";  
$date_to = strtotime($date2);
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
    echo date("Y-m-d", $i).'<br />';  
}  
?>
