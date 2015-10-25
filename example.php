<?php
require 'vendor/autoload.php';

\VCR\VCR::configure()->setCassettePath('data');
\VCR\VCR::turnOn();
\VCR\VCR::insertCassette('example.yml');

$json = file_get_contents('https://randomuser.me/api/');
$data = json_decode($json, true);
print_r($data['results'][0]);
