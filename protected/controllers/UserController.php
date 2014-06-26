<?php

class UserController extends Controller
{
	public $layout='//layouts/column2';
	public $pageCaption = 'People';
	public $pageDescription = '';

	/**
	 * @return array action filters
	 */
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */


	// very dirty bad code. To be changed!!
	public function applyRightManagement($userEmail){
		if((is_null($userEmail) || strcmp(Yii::app()->user->getState('username'), $userEmail) != 0)
			&& Yii::app()->user->name != 'Alvaro Ruiz'){
			$this->redirect(array('admin'));
		}
	}


	public function actionView($id)
	{
		
		$helper = new Helpers();
		
		$tasks = new CActiveDataProvider
		(
			'Tasks', array(
					
				'criteria'=>array(
				 		'condition'=>'userid=:userid',
						'order'=>'taskDateFrom DESC',
				 		'params'=>array('userid'=>$id),	
				),
						
				'pagination'=>array(
	        			'pageSize'=>20
				),
			)
		);
				 	
		$stats = Tasks::model()->getUserStats($id);		
		$model = $this->loadModel($id);		
		$this->pageDescription = ' Profile '.$model->firstName.' '.$model->lastName;

		$this->render('view',array(
			'model'=>$model,
			'tasks'=>$tasks,
			'stats'=>$stats
		));
	}

	
	public function actionCreate()
	{

	    $model= new Users;
		$countries = new Country;
		$countrieList = $countries->findAll($condition='0 = 0 order by de'); 
			
	    if(isset($_POST['ajax']) && $_POST['ajax']==='users-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    
	    if(isset($_POST['Users']))
	    {
	        $model->attributes=$_POST['Users'];
	        if($model->validate())
	        {
				
				foreach($_POST['Users'] as $name=>$value)
				{
				    if(strlen($value) > 0)
				        $model->$name=$value;
					else
						$model->$name=null;
				}
				
	            $model->save();
				// if you wannt a var that could be accessed from view use this strange thing 
				// below
				//Yii::app()->params['flashMessage'] = 'User Würde angelegt';
				$this->redirect('?r=user/');
				
	        }
	    }

	    $this->render('create',array('model'=>$model, 'countries'=>$countrieList));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		$this->applyRightManagement($model->email);

		// set passwort to null for form
		$model->userPassword = null;
		$countries = new Country;
		$countrieList = $countries->findAll($condition='0 = 0 order by de'); 
		
		if(isset($_POST['Users']))
		{	
			
			//do not update password if feld has no len
			if(strlen($_POST['Users']['userPassword']) == 0){
				unset($_POST['Users']['userPassword']);
			}
			
			$model->setAttributes($_POST['Users']);
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->userId));
		}

		$this->render('update',array(
			'model'=>$model,
			'countries'=>$countrieList
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

		$model = $this->loadModel($id);
		$this->applyRightManagement($model->email);
		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		$filter = '';
		
		if(isset($_GET['filter']))
		{
			switch($_GET['filter'])
			{
				case 1:
				$filter = "memberTyp='Parent'";
				break;
			
				case 2:
				$filter = "memberTyp='Child'";
				break;
			
				case 3:
				$filter = "memberTyp='Child' AND gender='F'";
				break;
			
				case 4:
				$filter = "memberTyp='Child' AND gender='M'";
				break;
				
				case 5:
				$filter = "memberTyp like '%waiting%'";
				break;
				
				case 6:
				$filter = "memberTyp='Parent waiting'";
				break;
				
				case 7:
				$filter = "memberTyp='Child waiting'";
				break;
				
				case 8:
				$filter = "associationMember=1";
				break;
						
				case 9:
				$filter = "associationMember=2";
				break;
				
				
			}
		}	
			
		$dataProvider=new CActiveDataProvider
		(
			'Users', array(
					
				'criteria'=>array(
				 		'condition'=>$filter,
				),
						
				'pagination'=>array(
	        			'pageSize'=>20
				),
			)
		);
				
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
