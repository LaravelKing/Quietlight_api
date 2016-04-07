<?php

use Luracast\Restler\iAuthenticate;

class Auth implements iAuthenticate
{


	function __isAllowed()
	{
		//Validate our session header
		$session = self::_validateSession();

		//If we got back a nice looking session, then allowed
		if($session) return true;

		//Default to not allowed
		return false;
	}


	static function _validateSession(){
		$headers = self::getAllHeaders();
		if(isset($headers["Session"])) {
			$session_id = $headers["Session"];

			$session = Model\Session::find_one($session_id);

			//No Session
			if(!$session) return false;

			//Wrong IP
			if($_SERVER['REMOTE_ADDR'] != $session->remote_ip) return false;

			//Session Expired
			if(time() > $session->expires_at) return false;

			return $session;
		}

		return false;
	}


	function __getWWWAuthenticateString() {
		return 'Bearer realm="quietlight"';
	}

	static function getAllHeaders(){
		if (!function_exists('getallheaders')) 
		{ 
	       $headers = ''; 
	       foreach ($_SERVER as $name => $value) 
	       { 
	           if (substr($name, 0, 5) == 'HTTP_') 
	           { 
	               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value; 
	           } 
	       } 
	       return $headers; 
		} else {
			return getallheaders();
		}
	}

	//Returns the authenticated user.
	static function user() 
	{
		$session = self::_validateSession();

		if($session){
			$user = $session->user()->find_one();
			return $user;
		}


		//If there is not an authenticated user, throw a 401 error.
		//because if we are asking for one, then there should probably
		//be one.
		throw new RestException(401, 'access denied');
		return false;
	}

	//Returns the authenticated session.
	static function session() 
	{
		$session = self::_validateSession();

		if($session){
			return $session;
		}


		//If there is not an authenticated user, throw a 401 error.
		//because if we are asking for one, then there should probably
		//be one.
		throw new RestException(401, 'access denied');
		return false;
	}

}