<?php 
  header('Content-Type: application/json');
  $uxid = rawurlencode("UXID");

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,"https://xapi.us/v2/{$uxid}/game-clips");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, ["X-Auth: API Key",]);

  $info = curl_exec($ch);

  curl_close ($ch);

  $clip = json_decode($info);

  foreach ($clip as $cur){
      echo "<video id='br-xb-clips' controls preload='none' poster='";
      echo $cur->thumbnails[0]->uri;
      echo "'> <source src='";
      echo $cur->gameClipUris[0]->uri;
      echo  "' type='video/mp4'></video>";
  }
?>
