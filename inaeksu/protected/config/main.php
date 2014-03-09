<?php
if (file_exists(dirname(__FILE__).'/config.local.php'))
{
     if (require_once dirname(__FILE__).'/config.local.php')
     {
     	  $lc = new LocalConfig();
          return $lc->getConfig();
     }
}

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Інститут Автоматики, Електроніки та Комп\'ютерних Систем Управління',

	// Компонент логов
	'preload'=>array('log'),

	// Автозагрузка моделей и класов
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.EAjaxUpload.*',
		'application.localization.*',
	),

	'modules'=>array(
		'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
                'bootstrap.gii',
            ),
		),	
	),

	'components'=>array(
		'ih'=>array('class'=>'CImageHandler'),
		'authManager' => array(
		    // Будем использовать свой менеджер авторизации
		    'class' => 'PhpAuthManager',
		    // Роль по умолчанию
		    'defaultRoles' => array('guest'),
		),
		'user'=>array(
			'class' => 'WebUser',
			'allowAutoLogin'=>true,
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'/' => 'site/index',
				'/page/<surl:[\w_-]+>' => 'page/index/<surl:[\w_-]+>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		'showScriptName' => false,
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=inaeksu',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'core_',
		),
		'errorHandler'=>array(
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
);