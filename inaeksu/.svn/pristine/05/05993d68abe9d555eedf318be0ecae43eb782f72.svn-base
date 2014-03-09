<?php
class DefaultController extends Controller
{
	/**
	 * Подключение фильтров доступа
	 */
	public function filters()
	{
		return array(
			'accessControl',
		);
	}

	/**
	 * Права доступа
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index'),
				'roles'=>array('1','2'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Статистика
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	/**
	 * Бекап
	 */
	public function actionBackup()
	{	
		Yii::import('ext.yii-database-dumper.SDatabaseDumper');
		$dumper = new SDatabaseDumper;
		$file = Yii::getPathOfAlias('webroot.backups').'/dumpdb.sql';
		file_put_contents($file, $dumper->getDump());
		header('Location: ' . '/backups/dumpdb.sql');
	}

	/**
	 * Очистка
	 */
	public function actionClear()
	{	
		$marks = Yii::app()->db->createCommand()
		    ->truncateTable('{{marks}}');
		$statistic = Yii::app()->db->createCommand()
		    ->truncateTable('{{statistic}}'); 
		header('Location: ' . '/admin');
	}

	/**
	 * Обновление
	 */
	public function actionUpdate()
	{
		$users = User::model()->findAll();
		foreach($users as $item)
		{	
			if($item['id'] > 1)
			{
				$statistic = new Statistic;
				$statistic->user_id = $item['id'];
				$statistic->save();
			}
		}
		
		$groups = Group::model()->findAll();
		foreach($groups as $group)
		{	
			$userswithid = User::model()->findAll("group_id = :id",array(":id" => $group['id']));
			$convert = explode("|", $group['numdisc']);

			foreach ($userswithid as $usr)
			{	
				foreach ($convert as $i=>$conv)
				{	
					$marks=new Marks;
					$marks->user_id = $usr['id'];
					$marks->disciplin_id = $conv;
					$marks->save();
				}
			}
		}
		header('Location: ' . '/admin');	
	}
}