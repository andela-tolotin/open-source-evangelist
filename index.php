<?php
namespace Laztopaz\OpenSourceEvangelistStatus;
require 'vendor/autoload.php';
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusException;
use Exception;


 //try {
 	//$username = new EvangelistStatusException();
 	//$username->checkEmptyGithubUsername('');
 	$evan = new EvangelistStatus('andela-tolotin');
    echo $evan->getStatus();
 //} catch (Exception $e) {
 	//echo 'Exception Caught: '.$e->getMessage();
 //}