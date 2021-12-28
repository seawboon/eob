<?php

$a = 'Proxifier.exe';

if (strpos($a, '.') !== false) {
    echo 'true';
} else {
  echo 'diulo';
}

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("config.php");

$name = 'seaw boon';
$email = 'seawboon@1leaf.com.my';
$mobile = '0129588682';
$country = 'Malaysia';
$address = 'Sri jaya';
$city = 'Maran';
$state = 'pahang';
$postal = '26500';
$newsletter = 'yes';
$tnc = 'agree';

$insdata = "INSERT INTO $tbl (name, email, mobile, country, address, city, state, postal, newsletter, tnc, created_at)
VALUES ('$name', '$email','$mobile', '$country', '$address', '$city', '$state', '$postal', '$newsletter', '$tnc', now())";
mysqli_query($conn, $insdata) or die(mysqli_error());

mysqli_close($conn);*/

?>
