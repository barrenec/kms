<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{

	public function init() {
   		 $this->attachBehavior('bootstrap', new BController($this));
	}

	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public $searchFilters=array();
	
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	public function accessRules()
	{
		return array(
			
			array('allow',  
				'actions'=>array('login','captcha','forgot'),
				'users'=>array('*'),
			),
			
			array('allow', 
				'actions'=>array('admin','delete'),
				'users'=>array('Alvaro Ruiz'),
			),
			
			array('deny', 
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			
			//  If no actions are specified, rule applies to all actions.
			array('allow', 
				'users'=>array('@'),
			),
			
			array('deny',  
				'users'=>array('*'),
			),
		);
	}
	
		
	
}