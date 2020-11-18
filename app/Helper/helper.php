<?php
function normalizing($owner_row = null){
    $array_filter = array_filter($owner_row,function($rating){
        return $rating != '-';
    });

    $avg = array_sum($array_filter)/count($array_filter);
    $avg = round($avg,2);
    $owner_row = array_map(function($rating) use($avg){
        return ($rating == '-') ? '-' : ($rating - $avg);
    }, $owner_row);

    return $owner_row;

}
function echo_now($s)
{
    echo $s . PHP_EOL;

    flush();
}
function calculateDistance($destinations = '', $origin = ''){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 0,
        CURLOPT_URL => 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.$origin.'&destinations='.$destinations.'&key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE',
        CURLOPT_USERAGENT => '',
        CURLOPT_SSL_VERIFYPEER => false
    ));

    $resp = curl_exec($curl);

    $weather = json_decode($resp);
    var_dump($weather);

    curl_close($curl);
}
