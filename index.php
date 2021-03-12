<!--

Images served through xapi.us' profile API are not SSL so I've used weserv.nl as a image proxy in order to serve them
on SLL websites. You can swap this for your own proxy or leave it as weserv.nl.

-->
<?php 
  include 'config.php';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://xapi.us/v2/{$uxid}/new-profile");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-Auth:{$apikey}",]);

  $info = curl_exec($ch);

  curl_close ($ch);

  $clip = json_decode($info);
  
  echo "<img src='https://images.weserv.nl/?url=";
  echo $clip->displayPicRaw;
  echo "'>";
?>
