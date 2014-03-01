<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	
	public function authenticate()
	{
		$record=Users::model()->findByAttributes(array('email'=>$this->username));  				
		if($record===null)
		{
			$this->_id='user Null';
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		
		else if($this->password !== $record->userPassword)            
		{        
			$this->_id=$this->username;
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		
		/*else if($record['E_STATUS']!=='Active')               
		{        
			$err = "You have been Inactive by Admin.";
			$this->errorCode = $err;
		}*/

		else
		{  	
			$this->_id=$record['userId'];
			$this->username= $record['firstName'].' '.$record['lastName'];
			$this->setState('title', $record['lastName']);
			$this->errorCode=self::ERROR_NONE;
		}
		
		return !$this->errorCode;
		
	}
	
	public function getId()     
	{
		return $this->_id;
	}
	
	
}