
This package aims to provide an analysis based on the number of open source projects an individual possess on Github. It also, rank GitHub users based on number of repositories they have. Below are the ranking;

    Number of repository < 5 : Lazy Evangelist.
    Number of repository >= 5 and Number of repository <= 10 : Junior Evangelist.
    Number of repository >= 11 and Number of repository <= 20 : Associate Evangelist.
    Number of repository >= 21 : Senior Evangelist.

**Installation**
-
PHP 5.5+ and Composer are required.
via composer

    $ composer require Laztopaz/OpenSourceEvangelistStatus

Install

    $ composer install 

**Usage 1**
-
1. Import the package

    use Laztopaz\OpenSourceEvangelistStatus\ EvangelistStatus;
2. Instatiate EvangelistStatus class

    $status = new EvangelistStatus($github_username);
3. Display the status of the user.
   

    echo $status->getStatus();

**Usage 2**
-
To catch exception in case the GitHub username is not provided or invalid.

 

    use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatus;
    use Laztopaz\OpenSourceEvangelistStatus\EvangelistStatusException;
    try {
        $status = new EvangelistStatus($github_username);
        echo $status->getStatus();
    } catch (Exception $e) {
      echo 'Caught Exception '. $e->getMessage();
    }
   

**Testing**
-

On your terminal run.
   

     $ composer test or phpunit test
**Contributing**
-
To contribute and extend the scope of this package, Please check out CONTRIBUTING file for detailed [contribution](https://github.com/andela-tolotin/open-source-evangelist/blob/evangelist/contribution.md) guidelines.

**Credits**
-
open-source-evangelist is created and maintained by Temitope Olotin.