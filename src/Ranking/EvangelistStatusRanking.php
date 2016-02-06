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
 	private $evangelistTypeMessage;
    private $numberOfRepo;

    /**
     *
     * This is a constructor that accepts no of user repo on github
     */
    public function __construct()
    {
        
    }

    public function determineEvangelistLevel($noOfRepo)
    {
        if($noOfRepo == "")
        {
            return false;
        }

        $this->numberOfRepo = $noOfRepo;

    	if($this->numberOfRepo >= 5 && $this->numberOfRepo<= 10){
    		$this->evangelistTypeMessage = "Damn It!!! Please make the world better, Oh Ye Prodigal Junior Evangelist";
    	} else if($this->numberOfRepo >= 11 && $this->numberOfRepo <= 20){
    		$this->evangelistTypeMessage = "Keep Up The Good Work, I crown you Associate Evangelist";
    	} else if($this->numberOfRepo >= 21){
    		$this->evangelistTypeMessage = "Yeah, I crown you Senior Evangelist. Thanks for making the world a better place";
    	}else{
            $this->evangelistTypeMessage = "Fuck Off!!! Please make the world better, Oh Ye Lazy Evangelist";
        }
    	return $this->evangelistTypeMessage;
    }

 }