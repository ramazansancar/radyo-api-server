<?php

$serverinformation = array(
    'version' => 1, // this one is for future
    'host'    => 'yourserver', // FQDN or IP. I normally prefer IP.
    'port'    => 8000, // 8000 is the default but nobody uses it.
    'password'=> 'thisisapasswordandimtheonlyonewhoknowsit' // this is your admin password NOT broadcaster password!!11
);


/*
 * $infosource
 * desc: where should I get the broadcaster information? 
 * default: twitter
 * other options: custom 
 * notes: for custom, check docs.
 */
$infosource = 'twitter';