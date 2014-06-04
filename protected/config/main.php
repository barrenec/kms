<?php


Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Kita Management Software: KMS',
	'defaultController'=>'user',
	'theme'=>'bootstrap',


	// preloading 'log' component
	'preload'=>array('log', 'kint'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.bootstrap-theme.widgets.*',
        'ext.bootstrap-theme.helpers.*',
        'ext.bootstrap-theme.behaviors.*',


	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),

			'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			),
			
			// dump vars: http://www.yiiframework.com/extension/kint#
			'kint' => array(
			    'class' => 'ext.Kint.Kint',	
			),

			'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        	),

			// uncomment the following to enable URLs in path-format
			'urlManager'=>array(
				'urlFormat'=>'path',
				'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				
			),
		),

		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		
		// uncomment the following to use a MySQL database
		// $_SERVER['SERVER_NAME']=='localhost'
		
		// if($_SERVER['SERVER_NAME']=='localhost'){}
			
		
			
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cddb',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		    'nullConversion' => PDO::NULL_EMPTY_STRING,
		),
		
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'LogOnsLogger',
					'levels'=>'error, warning, info',
					'categories'=>'logons'
				),
				
				// uncomment the following to show log messages on web pages
				/*array(
					'class'=>'CWebLogRoute',
				),*/
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'cryptPasswordSalt'=>'0nl!4urEy$',
	),
);
