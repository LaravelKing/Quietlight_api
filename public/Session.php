<?php

use Luracast\Restler\RestException;

require_once(__DIR__."/../lib/pass_helpers.php");

class Session {

	/**
	 * register a new user
	 *
	 * @url POST /register
	 * @param string $email {@from body} The email of the user
	 * @param string $password {@from body} The password of the user
	 * @param string $first_name {@from body} The first name of the user
	 * @param string $last_name {@from body} The last name of the user
	 * @param string $phone {@from body} The phone of the user
	 * @param int $is_admin {@from body} User is an admin
	*/
	public function register($email, $password, $first_name=NULL, $last_name=NULL, $phone=NULL, $is_admin = 0) {
		//Hash password
		$password = create_hash($password);

		$user = Model\User::create();
		$user->email = $email;
		$user->password = $password;
		if(!is_null($first_name)) $user->first_name = $first_name;
		if(!is_null($last_name)) $user->last_name = $last_name;
		if(!is_null($phone)) $user->phone = $phone; 
		if(!is_null($is_admin)) $user->is_admin = $is_admin; 
		$user->created_at = time();

		
		try {
			$user->save();
		} catch ( Exception $e){
			throw new RestException(400, 'email address already registered');
			return false;	
		}

		$user = $user->as_array();
		unset($user['password']);

		return $user;

	}


	/**
	 * login a user
	 *
	 * @url POST /login
	 * @param string $email {@from body} The email of the user
	 * @param string $password {@from body} The password of the user
	*/
	public function login($email, $password) {

		//Lookup user
		$user = Model\User::where('email', $email)->find_one();
		if($user){
			//Check hash
			if(validate_password($password, $user->password)){
				$sessionId = $this->generateSessionId();

				//Expire existing sessions
				$sessions = Model\Session::where('user_id', $user->id)
								->where_gte('expires_at', time())
								->find_many();
				foreach($sessions as $session){
					$session->expires_at = time();
					$session->save();
				}

				//Insert Session into ID
				$session = Model\Session::create();
				$session->id = $sessionId;
				$session->user_id = $user->id;
				$session->expires_at = time()+(24*60*60); //day long sessions
				$session->remote_ip = $_SERVER['REMOTE_ADDR'];
				$session->save();

				$user = $user->as_array();

				$user['session'] = $sessionId;
				
				unset($user['password']);
				
				return $user;
			}
		}

        throw new RestException(404, 'user not found');
		return false;
	}

   /**
	* Gets a user
	*
	* @url GET /user
	*/
	protected function index($limit = 5, $offset = 0) {
		if(is_null($limit)) $limit = 5;
		if(is_null($offset)) $offset = 1; //don't return the first one
		else $offset = $offset+1;
		
		$users = Model\User::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		$more_users = Model\User::limit(1)
							->offset($offset+$limit)
							->find_one();

		foreach($users as &$s){
			$s = $s->as_array();
		}
		return ['users'=>$users, 'next'=>($more_users)?1:0,'prev'=>($offset != 0) ? 1 : 0];
	}


   /**
	* Gets a user
	*
	* @url GET /user/{id}
	*/
	protected function get($id) {
		$cur_user = Auth::user();
		
		if($id != $cur_user->id && !$cur_user->is_admin) throw new RestException(401, 'unauthorized');
		
		$user = Model\User::find_one($id);

		if(!$user){
            throw new RestException(404, 'user not found');			
		}

		return $user->as_array();
	}


	/**
	 * update a user
	 *
	 * @url POST /user/{id}
	 * @param int $id {@from body} The id of the user
	 * @param string $email {@from body} The email of the user
	 * @param string $password {@from body} The password of the user
	 * @param string $first_name {@from body} The first name of the user
	 * @param string $last_name {@from body} The last name of the user
	 * @param string $phone {@from body} The phone of the user
	 * @param int $is_admin {@from body} User is an admin
	*/
	public function update($id, $email=NULL, $password=NULL, $first_name=NULL, $last_name=NULL, $phone=NULL, $is_admin = 0) {
		
		$cur_user = Auth::user();
		$user = Model\User::find_one($id);

		//Check validity of this request
		if(!$user) throw new Exception(404, 'user not found');
		if($user->id != $cur_user->id && !$cur_user->is_admin) throw new Exception(401, 'unauthorized');


		//Hash password
		if(!is_null($password) && $password) $password = create_hash($password);


		if(!is_null($email) && $email) $user->email = $email;
		if(!is_null($password) && $password) $user->password = $password;
		if(!is_null($first_name)) $user->first_name = $first_name;
		if(!is_null($last_name)) $user->last_name = $last_name;
		if(!is_null($phone)) $user->phone = $phone; 
		if(!is_null($is_admin)) $user->is_admin = $is_admin; 
		$user->updated_at = time();

		try {
			$user->save();
		} catch ( Exception $e){
			throw new RestException(400, 'email address already registered');
			return false;	
		}

		$user = $user->as_array();
		unset($user['password']);

		return $user;

	}


	/**
	 * expires a session
	 *
	 * @url DELETE /
	*/
	public function sessionExpire() {
		try {
			$session = Auth::session();

			//Expire session
			$session->expires_at = time();
			$session->save();
		} catch (Exception $e){
			//Session already expired
		}

		return;
	}


	/**
	 * deleting a user
	 *
	 * @url DELETE /user
	*/
	protected function delete() {
		$user = Auth::user();
		
		//DELETE user
		$user->delete();

		return;
	}

	private function generateSessionId() {
		//replace the slashes with underscores so we don't have to replace anything
		//when it's passed via URL
		return preg_replace("|[/+]|","_",base64_encode(openssl_random_pseudo_bytes(36)));
	}
}
