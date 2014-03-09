<?php
class UserController extends Controller
{
	/**
	 * Подключение фильтров доступа
	 */
	public function filters()
	{
		return array(
			'accessControl', 
			'postOnly + delete',
		);
	}

	/**
	 * Права доступа
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index','create','update','delete'),
				'roles'=>array('1'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Список пользователей
	 */
	public function actionIndex()
	{
		$model=new User('search');
		$model->unsetAttributes(); 
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Добавление пользователя
	 */
	public function actionCreate()
	{
		$model=new User;
		$statistic=new Statistic;
		

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->save();

			$statistic->user_id = $model->id;
			$statistic->save();

			$group = Group::model()->findByPk($model->group_id);
			$convert = explode("|", $group->numdisc);

			foreach ($convert as $i=>$item)
			{	
				$marks=new Marks;
				$marks->user_id = $model->id;
				$marks->disciplin_id = $convert[$i];
				$marks->save();
			}

			if($model->save())
				$this->redirect(array('/admin/user'));
		}

		$this->render('create',array(
			'model'=>$model
		));
	}

	/**
	 * Обновление пользователя
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->save();
			$this->redirect(array('/admin/user'));
		}

		$this->render('update',array(
			'model'=>$model
		));
	}

	/**
	 * Удаление пользователя
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Загрузка данных
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}