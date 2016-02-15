<?php

namespace Laztopaz\OpenSourceEvangelistStatus;

error_reporting(0);

/**
 * @package  Laztopaz\OpenSourceEvangelistStatus
 * @author   Temitope Olotin <temitope.olotin@andela.com>
 * @license  <https://opensource.org/license/MIT> MIT
 */

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusInterface;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusRanking;
use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusException;
use Laztopaz\OpenSourceEvangelistStatus\NullNoOfReposException;
use Laztopaz\OpenSourceEvangelistStatus\ArgumentCheckException;
use Exception;


class EvangelistStatus implements EvangelistStatusInterface
{
    protected  $githubApi;
    private    $username;
    private    $response;
    private    $clientId;
    private    $clientSecret;
    private    $guzzleClient;
    private    $githubResponse;
    private    $noOfGitRepos;
	
    public function __construct($username)
    { 
        $num_args = (int) func_num_args(); // get number of arguments passed to 

        if ($num_args == 0 ||  $num_args > 1) {
            throw ArgumentCheckException::NullOfOverflowArgumentException("Argument missing: only one argument is allowed");
        }
      
        $this->username                         = $username;
        
        $this->checkNullUsernameException();

        $this->clientId                         = getenv('ClientID'); // get the GitHub client id
        $this->clientSecret                     = getenv('ClientSecret'); // get the GitHub client secret

        $this->guzzleClient                     = new Client();

        $this->githubResponse                   = $this->getGitApiData(); // return GitHub jsonObject
        $this->noOfGitRepos                     = $this->getNumberOfRepos(); // return number of repo the user has
    }

    /**
     * This method returns Github JSON data 
     * @param    void
     * @return   response 
     */
    public function getGitApiData()
    {
        $this->response = $this->guzzleClient->get('https://api.github.com/users/'.$this->username.'?client_id='.$this->clientId .'&client_secret='.$this->clientSecret);
        return $this->response->getBody();
    }

    /**
     * This method returns number of the user repo on Github
     * @param void
     * @return public_repos
     */
    public function getNumberOfRepos()
    {
        $githubJson = json_decode($this->githubResponse, true);

        if (EvangelistStatusRanking::checkForNullRepos($githubJson)) {
            throw NullNoOfReposException::createNullReposException("Empty GitHub repository");
        }
        return $githubJson['public_repos'];
    }

    /**
     * This method returns a string depending on number of user repositories on Github
     * @param void 
     * @return string evangelistRanking
     */
    public function getStatus()
    {
        return EvangelistStatusRanking::determineEvangelistLevel($this->noOfGitRepos); 
    }

    /**
     * This method checks for empty GitHub username
     * @param string $username
     * @return boolean
     */
    public function checkEmptyGithubUsername($username)
    {
        if ($username == "") {
            return true;
        }
        return false;
    }

    /**
     * This method checks for null argument 
     * @return exception
     */
    public function checkNullUsernameException()
    {
        if ($this->checkEmptyGithubUsername($this->username)) {
            throw EvangelistStatusException::createEvangelistStatusException("Username is Empty, please provide a GitHub valid username");
        }
    }
}  
