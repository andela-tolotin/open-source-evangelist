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

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusRating;
use GuzzleHttp\Exception\RequestException as InvalidUserException;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusInterface;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusException;


class EvangelistStatus extends Client implements EvangelistStatusInterface

{
	private    $username;
	protected  $githubApi;
	
    public function __construct($username)
    {
        $env                    = new Dotenv($_SERVER['DOCUMENT_ROOT']);
        
        $this->client_id        = getenv('ClientID'); // get the GitHub client id
        $this->client_secret    = getenv('ClientSecret'); // get the GitHub client secret

        $this->guzzle_client    = new Client();

        $this->exception_check_invalid_username  = new EvangelistStatusException();

        $this->username         = $username;

        $this->githubResponse   = $this->getGitApiData(); // return GitHub jsonObject
        $this->noOfGitRepos     = $this->getNumberOfRepos(); // return number of repo the user has
    }

    /**
     * 
     * This method returns Github data
     */

    public function getGitApiData()
    {
        try {

            $this->exception_check_invalid_username->checkEmptyGithubusername($this->username);

            $response = $this->guzzle_client->get('https://api.github.com/users/'.$this->username.'?client_id='. $this->client_id .'&client_secret='.$this->client_secret);
            return $response->getBody();

        } catch (Exception $e){
            echo 'Caught Exception '.$e->getMessage();
        }
    }

    /**
     *  
     * This method returns a string depending on number of user repo on Github
     */
    
    public function getStatus()
    {
        $evangelistRanking = new EvangelistStatusRating();
        return $evangelistRanking->determineEvangelistLevel($this->noOfGitRepos); 
    }

    /**
     * 
     * This method returns number of the user repo on Github
     */
    
    public function getNumberOfRepos()
    {
        $githubJson = json_decode($this->githubResponse,true);
        return $githubJson['public_repos'];
    }

    // 0044074026

}  