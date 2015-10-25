<?php
require 'vendor/autoload.php';

\VCR\VCR::configure()->setCassettePath('data');
\VCR\VCR::turnOn();
\VCR\VCR::insertCassette('example.yml');


$result = file_get_contents(
    'http://oshiete.goo.ne.jp/api/category'
);
print_r(json_decode($result, true));
