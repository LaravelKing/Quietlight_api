<?php
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Credentials: true");

require_once __DIR__.'/../vendor/restler.php';
require_once __DIR__.'/../vendor/autoload.php';
use Luracast\Restler\Restler;

require_once __DIR__.'/../lib/common.php';


$env_file = ".env";
if(isset($_SERVER['HTTP_ENVIRONMENT'])) $env_file = $_SERVER['HTTP_ENVIRONMENT'].".env";
if(!file_exists(__DIR__."/../".$env_file)){
	die('Environment file not found in project root directory. ('.$env_file.')');
}

$dotenv = new Dotenv\Dotenv(__DIR__."/..", $env_file);
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

require_once __DIR__.'/../lib/db.php';

//Load Paris Models
$models = array_diff(scandir(__DIR__."/../models"), array('..', '.'));
foreach($models as $model) require __DIR__."/../models/".$model;


$r = new Restler(getenv("DEBUG_MODE"));

$r->addAuthenticationClass('Auth');

$r->addAPIClass('Addendum');
$r->addAPIClass('Config');
$r->addAPIClass('Disclosure');
$r->addAPIClass('ExecutiveSummary');
$r->addAPIClass('Financial');
$r->addAPIClass('FinancialV2');
$r->addAPIClass('Flex');
$r->addAPIClass('Footnote');
$r->addAPIClass('Question');
$r->addAPIClass('QuestionBox');
$r->addAPIClass('Session');
$r->addAPIClass('Summary');
$r->addAPIClass('SummarySection');
$r->addAPIClass('Title');
$r->addAPIClass('WebTraffic');

try {
	$r->handle(); //serve the response
} catch (Exception $e) {

}



