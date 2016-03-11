<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	private $_id;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
	//	$record=User::model()->findByAttributes(array('UserName'=>  $this->username));
		 $user=User::model()->find('LOWER(UserName)=?',array(strtolower($this->username)) );

		if($user===NULL){
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }
                else if($user->PassWord!==crypt ($this->password, 'salt')){
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;

                }
                else{

                	 $this->_id = $user->id;
                  //   $this->username=$user->username;

                    $this->errorCode=self::ERROR_NONE;

                    $this->setState('role', $user->id_role);
                    $this->setState('id_usr', $user->id);

                }
		return !$this->errorCode;
	}

	public function getId(){

		return $this->_id;
	}

}