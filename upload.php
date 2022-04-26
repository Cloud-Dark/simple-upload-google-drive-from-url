<?php
    $url = 'https://script.google.com/macros/s/#####/exec?url=http://example.com/file.doc';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl,CURLOPT_FOLLOWLOCATION, true);
    $response = curl_exec($curl);
    echo $response;
    curl_close($curl);
?>
