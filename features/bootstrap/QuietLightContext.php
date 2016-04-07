<?php

require "RestContext.php";

use Behat\Behat\Event\SuiteEvent;

/**
 * Quiet Light context extending Restler's RestContext
 *
 * @category   Framework
 * @package    quietlight
 */

class QuietLightContext extends RestContext
{

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     */
    public function __construct(array $parameters)
    {
        parent::__construct($parameters);
         
        if($this->getParameter('test_environment')) {
            $this->_headers['Environment'] = $this->getParameter('test_environment');
        }


    }

    /** @BeforeSuite */
    public static function setup(SuiteEvent $event)
    {   

        $params = $event->getContextParameters();

        echo("Setting up the Test Database.\n");
        // Name of the file
        $mysqlImportFilename = $params['test_db_seed_file'];
        // MySQL host
        $mysqlHostName = $params['test_db_host'];
        // MySQL username
        $mysqlUserName = $params['test_db_user'];
        // MySQL password
        $mysqlPassword = $params['test_db_pass'];
        // Database name
        $mysqlDatabaseName = $params['test_db_name'];

        $command="mysql -h {$mysqlHostName} -u '{$mysqlUserName}' -p'{$mysqlPassword}' {$mysqlDatabaseName} < '{$mysqlImportFilename}'";
        $output = shell_exec($command);
        echo("Test Database Seeded.\n");

    }

    /**
     * Seems weird 
     *
     * @Given /^I found an "([^"]*)" from "([^"]*)" while authenticated as "([^"]*)" and "([^"]*)" at "([^"]*)"$/
     */
    public function iFoundAnFromWhileAuthenticatedAsAndAt($param, $paramUrl, $email, $password, $authUrl)
    {
        $client = new Guzzle\Service\Client();
        $baseUrl = $this->getParameter('base_url');

        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        if($this->getParameter('test_environment')) $headers['Environment'] = $this->getParameter('test_environment');
        $requestBody = json_encode(['email'=> $email, 'password'=>$password]);

        $request = $client ->post($baseUrl.$authUrl, $headers, $requestBody);
        $response = $request->send();
        $data = json_decode($response->getBody(true));

        $headers['session'] = $data->session;

        $request = $client ->get($baseUrl.$paramUrl, $headers);
        $response = $request->send();
        $data = json_decode($response->getBody(true));
        
        if(is_array($data)){
            foreach($data as $row){
                if(isset($row->$param)){
                    $this->_restObject->$param = $row->$param;
                }
            }

        }
    }



    /**
     * Very Specific to this implementation....
     *
     * @Given /^I authenticated with "([^"]*)" and "([^"]*)" at "([^"]*)"$/
     */
    public function iAuthenticatedWithAndAt($email, $password, $pageUrl) {
        $authClient = new Guzzle\Service\Client();
        $baseUrl = $this->getParameter('base_url');


        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        if($this->getParameter('test_environment')) $headers['Environment'] = $this->getParameter('test_environment');
        $requestBody = json_encode(['email'=> $email, 'password'=>$password]);

        $request = $authClient ->post($baseUrl.$pageUrl, $headers, $requestBody);
        $response = $request->send();
        $data = json_decode($response->getBody(true));

        if(isset($data->session)){
            $this->_headers['session'] = $data->session;
        }
    }

    /**
     * @Given /^the response does not have a "([^"]*)" property$/
     * @Given /^the response does not have an "([^"]*)" property$/
     * @Given /^the response does not have a property called "([^"]*)"$/
     * @Given /^the response does not have an property called "([^"]*)"$/
     * @Given /^the response should not have a "([^"]*)" property$/
     * @Given /^the response should not have an "([^"]*)" property$/
     * @Given /^the response should not have a property called "([^"]*)"$/
     * @Given /^the response should not have an property called "([^"]*)"$/
     */
    public function theResponseDoesntHaveAProperty($propertyName)
    {
        $data = $this->_data;

        if (!empty($data)) {
            if (isset($data->$propertyName)) {
                throw new Exception("Property '"
                    . $propertyName . "' is not set!\n\n"
                    . $this->echoLastResponse());
            }
        } 
    }
    
    /**
     * @Then /^the response is not empty$/
     */
    public function theResponseIsNotEmpty()
    {
        $data = $this->_data;

        if(!$data){
          throw new Exception("Response is empty");  
        }
    }


    /**
     * @Given /^the response should be an array$/
     */
    public function theResponseShouldBeAnArray()
    {
        $data = $this->_data;

        if(!$data || ! is_array($data)) throw new Exception("Response is not an array.");
    }

    /**
     * @Given /^the response length should be (\d+)$/
     */
    public function theResponseLengthShouldBe($length)
    {
        $data = $this->_data;

        if(!$data || ! is_array($data)) throw new Exception("Response is not an array.");

        if(count($data) != $length) throw new Exception("Response length is not ".$length. ". It is ".count($data));
    }

    /**
     * @Given /^the "([^"]*)" property is an array$/
     */
    public function thePropertyIsAnArray($prop)
    {
        $data = $this->_data;

        if(!$data || !isset($data->$prop) || !is_array($data->$prop)) throw new Exception($prop . " is not an array. (".gettype($data->$prop).")");

    }

    /**
     * @Given /^the "([^"]*)" property is an object$/
     */
    public function thePropertyIsAnObject($prop)
    {
        $data = $this->_data;

        if(!$data || !isset($data->$prop) || !is_object($data->$prop)) throw new Exception($prop . " is not an array. (".gettype($data->$prop).")");
    }

    /**
     * @Given /^the "([^"]*)" property should have length "([^"]*)"$/
     */
    public function thePropertyShouldHaveLength($prop, $len)
    {
        $data = $this->_data;

        if(!$data || !isset($data->$prop) || ! is_array($data->$prop)) throw new Exception("Response is not an array.");

        if(count($data->$prop) != $len) throw new Exception("Response length is not ".$len. ". It is ".count($data->$prop));
    }
}