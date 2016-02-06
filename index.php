<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

require 'vendor/autoload.php';

$evan = new EvangelistStatus('andela-tolotin');
echo $evan->getStatus();