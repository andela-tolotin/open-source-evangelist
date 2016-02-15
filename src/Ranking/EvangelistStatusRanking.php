<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

/**
 *
 * EvangelistStatus class
 * 
 * @package  Laztopaz\OpenSourceEvangelistStatus
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */

 use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusRankingInterface;

 class EvangelistStatusRanking implements EvangelistStatusRankingInterface
 {
    /**
     * This method ranks GitHub users based on the number of repositories they have
     * @param  int $noOfRepo
     * @return String $evangelistTypeMessage
     */
    public static function determineEvangelistLevel($noOfRepo)
    {
    	if ($noOfRepo >= 5 && $noOfRepo<= 10) {
    		$evangelistTypeMessage = "Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist";
    	} else if ($noOfRepo >= 11 && $noOfRepo <= 20) {
    		$evangelistTypeMessage = "Keep Up The Good Work, I crown you Associate Evangelist";
    	} else if ($noOfRepo >= 21) {
    		$evangelistTypeMessage = "Yeah, I crown you Senior Evangelist. Thanks for making the world a better place";
    	} else {
    	 $evangelistTypeMessage = "Fuck Off!!! Please make the world better, Oh Ye Lazy Evangelist";
    	}
    	return $evangelistTypeMessage;
    }

    /**
     * This method check for null repos
     * @param array  $arrayResponse
     * @return boolean
     */
    public static function checkForNullRepos($arrayResponse)
    {
        if ($arrayResponse["message"] == "Not Found") {
            return true;
        }
    }

 }
