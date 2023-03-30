<?php
function checkHost($host, $port) {
    $check = @fsockopen($host, $port, $errorCode, $errorMessage, 1);
    if ($check) {
        fclose($check);
        return true;
    } else {
        return false;
    }
}
function getHostTitle($host) {
    $title = '';
    $url = 'http://' . $host;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        $matches = array();
        preg_match('/<title>(.*?)<\/title>/', $response, $matches);
        if (isset($matches[1])) {
            $title = $matches[1];
        }
    }
    curl_close($ch);
    return $title;
}
?>
