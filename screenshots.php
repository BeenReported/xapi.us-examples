<?php 
  $uxid = rawurlencode("UXID");

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://xapi.us/v2/2533275001057958/screenshots");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-Auth: API Key",]);

  $info = curl_exec($ch);

  curl_close ($ch);

  $clip = json_decode($info);

  foreach ($clip as $cur){
      echo "<img src='";
      echo $cur->screenshotUris[0]->uri;
      echo "' loading='lazy'>";
  }
?>
