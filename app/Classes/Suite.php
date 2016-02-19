<?php
namespace App\Classes;

function convertArrayToNVL( $data ){
  $return = array();
  foreach ( $data as $key => $value ) {
        $return[] = array('name' => $key, 'value' => $value);
    }
  return $return;
}

/**
 * Converts a SugarCRM-REST compatible name_value_list to an Array
 *
 * @param Array $data
 * @return Array
 */
function convertNVLToArray ( $data ){
  $return = array();
  foreach ( $data as $row ){
      $return[$row['name']] = $row['value'];
    }
    return $return;
}

class Suite{

  	/**
  	 * Rest object
  	 *
  	 * @var string
  	 */
  	private $rest_url = "";
  	/**
  	 * SugarCRM User
  	 *
  	 * @var string
  	 */
  	 private $rest_user = "";
  	 /**
  	 * SugarCRM Pass
  	 *
  	 * @var string
  	 */
  	 private $rest_pass = "";

     /**
     	 * SugarCRM Session ID
     	 *
     	 * @var string
     	 */
     	protected $sid = NULL;

 public function __construct(){
  $sugar_url =   \Config::get('suitecrm.url');
  $this->rest_url =  $sugar_url."/service/v4_1/rest.php";
  $this->base_url = 'http://' . preg_replace( '~^http://~', '', $sugar_url);
  $this->rest_user =  \Config::get('suitecrm.username');
  $this->rest_pass =  \Config::get('suitecrm.password');
     	}

      private function rest_request($call_name, $call_arguments) {
      		ob_start();
      		$ch = curl_init();
      		$post_data = array(
                  		'method' => $call_name,
      		            'input_type' => 'JSON',
      		            'response_type' => 'JSON',
      		            'rest_data' => json_encode($call_arguments)
      		);
          curl_setopt($ch, CURLOPT_URL, $this->rest_url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch ,CURLOPT_ENCODING,'gzip');
          curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
          $output = curl_exec($ch);
          $response_data = json_decode($output, true);
      		curl_close($ch);
      		ob_end_flush();
      		return $response_data;
      	}

      	/**
      	 * Login with user credentials
      	 *
      	 * @param string $user
      	 * @param string $password_hash
      	 * @param boolean $admin_check
      	 * @return boolean
      	 */
         public function login(){
           $login_params = array(
       			'user_name' => $this->rest_user,
       			'password'  => $this->rest_pass,
       		);
          
       		$result = $this->rest_request( 'login', array(
       			'user_auth' => $login_params,
            "application_name" => "",
       			'name_value_list' => array(array('name' => 'notifyonsave', 'value' => 'true'))
       		));
       		if ( isset($result['id'] )){
       			$this->sid = $result['id'];
       			return $result['id'];
       		} else if(isset($result['name'])) {
       			return false;
       		}
               return false;
       	}

      	/**
      	 * Logout
      	 */
      	public function logout(){
      		$this->rest_request('logout', array(
      			'session'	=> $this->sid,
      		));
      		$this->sid = null;
      	}

  public static function display() {
    return true;
  }

}
