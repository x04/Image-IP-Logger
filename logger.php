<?php
$logs = fopen("logs.html", "a") or die("Unable to open logs file.");
$ip = $_SERVER['REMOTE_ADDR'];
if(isset($_SERVER['HTTP_REFERER'])) {
  $referrer = strip_tags($_SERVER['HTTP_REFERER']);
}else{
   $referrer = "n/a";
}
$time = date("Y-m-d h:i:sa");
fwrite($logs, "<strong>IP: </strong>" . $ip . "<br />");
fwrite($logs, "<strong>Referrer: </strong>" . $referrer . "<br />");
fwrite($logs, "<strong>Time: </strong>" . $time . "<br />");
fclose($logs);
$imginfo = getimagesize("image.gif");
header("Content-type: ".$imginfo['mime']);
readfile("image.gif");
?>
