<?php

class SiteController extends Controller
{
		
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				Yii::app()->user->setState('username', $model->username);
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionForgot()
	{
		if (isset($_POST['email']))
		{			
			$forgotFormModel = new ForgotForm;			
			$forgotFormModel->email=$_POST['email'];
									
			// Verify the email is a real email			
			if(!$forgotFormModel->validate())
			{
				$this->render('forgot');
				return;
			}
			
			// Check to see if we have a user with that email address
			$user = Users::model()->findByAttributes(array('email'=>$_POST['email']));
			
			
			if (count($user) == 1)
			{
				// Generate hash and populate db
				$hash = mb_strimwidth(hash("sha256", md5(time() . md5(hash("sha512", time())))), 0, 16);
				
				$expires = strtotime("+5 minutes");
				
				$user->setUpUserForgotPassword();
								
				$meta = UserMetadata::model()->findByAttributes(array('user_id'=>$user->id, 'key'=>'passwordResetExpires'));
				if ($meta === NULL)
					$meta = new UserMetadata;
				
				$meta->user_id = $user->id;
				$meta->key = 'passwordResetExpires';
				$meta->value = $expires;
				$meta->save();
				

				$this->sendEmail($user, Yii::t('ciims.email', 'Your Password Reset Information'), '//email/forgot', array('user' => $user, 'hash' => $hash), true, true);
				
				// Set success flash
				Yii::app()->user->setFlash('reset-sent', Yii::t('ciims.controllers.Site', 'An email has been sent to {{email}} with further instructions on how to reset your password', array(
					'{{email}}' => Cii::get($_POST, 'email', NULL)
				)));
			}
			else
			{
				Yii::app()->user->setFlash('reset-sent', Yii::t('ciims.controllers.Site', 'An email has been sent to {{email}} with further instructions on how to reset your password', array(
					'{{email}}' => Cii::get($_POST, 'email', NULL)
				)));

				$this->render('forgot', array('id'=>$id));
				return;
			}
			
		}
		
		$this->render('forgot', array('id'=>NULL));
	}
	
}