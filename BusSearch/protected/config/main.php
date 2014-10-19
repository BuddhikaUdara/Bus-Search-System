<?php


// This is the main Web application configuration. 
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Search Bus-Route Information',
	'defaultController' => 'busSearch/admin', 
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
			
	),


	// application components
	'components'=>array(
						
		'user'=>array(
			
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		'urlManager'=>array(
				'urlFormat'=>'path',
				'rules'=>array(
					'AreaTableController/<id:\d+>/<title:.*?>'=>'AreaTableController/view',
					'AreaTableControllers/<tag:.*?>'=>'AreaTableController/index',
					// REST patterns
					array('api/list', 'pattern'=>'api/<model:\w+>', 'verb'=>'GET'),
					array('api/view', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'GET'),
					array('api/update', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'PUT'),
					array('api/delete', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'DELETE'),
					array('api/create', 'pattern'=>'api/<model:\w+>', 'verb'=>'POST'),
					// Other controllers
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),
			),
		
		
				
				
				
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;port=3306;dbname=bussearch',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				
			),
		),
	),

	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);