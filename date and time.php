<?php   

echo "today is: ".date("d/m/y")."<br>";
echo "time is: ".date("h:i:sa")."<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

$sdate = strtotime("sunday");
$edate = strtotime("+6 weeks", $sdate);


 
  while ($sdate < $edate) {
    echo date("M d", $sdate) . "<br>";
  $sdate = strtotime("+1 week", $sdate);

  }


?> 