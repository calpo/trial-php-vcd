<?php
require 'vendor/autoload.php';
\VCR\VCR::turnOn();

$result = file_get_contents('http://example.com');


