<?php
class ProfileController extends Controller
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
				'roles'=>array('0','2'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Получение данных профиля
	 */
	public function actionIndex()
	{
		$profile = User::model()->findByPk(Yii::app()->User->id);
		$statistic = Statistic::model()->find("user_id = :id",array(":id" => Yii::app()->User->id));
		$marks = Marks::model()->findAll("user_id = :id",array(":id" => Yii::app()->User->id));
		$this->render('index',array('profile' => $profile, 'statistic' => $statistic, 'marks' => $marks));
	}
}