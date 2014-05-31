<?php
	
class ForgotForm extends CFormModel
{
	public $email; 
	
	public function rules()
	{
		return array(
			array('email', 'required'),
		);
	}
	
}