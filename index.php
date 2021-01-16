<?php 
  include 'config.php';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://xapi.us/v2/{$uxid}/new-profile");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-Auth:{$apikey}",]);

  $info = curl_exec($ch);

  curl_close ($ch);

  $clip = json_decode($info);
  
  echo "<img src='";
  echo $cur->displayPicRaw;
  echo "'/>
  echo $cur->modernGamertag;
?>
