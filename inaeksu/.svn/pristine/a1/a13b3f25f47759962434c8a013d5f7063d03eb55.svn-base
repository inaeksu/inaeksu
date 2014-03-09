<?php
class GroupController extends Controller
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
	 * Список групп
	 */
	public function actionIndex()
	{
		$model=new Group('search');
		$model->unsetAttributes();  
		if(isset($_GET['Group']))
			$model->attributes=$_GET['Group'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Создание группы
	 */
	public function actionCreate()
	{
		$model=new Group;

		if(isset($_POST['Group']))
		{
			$model->attributes=$_POST['Group'];
			$convert = implode("|", $model->numdisc);
			$model->numdisc = $convert;
			
			if($model->save())
				$this->redirect(array('/admin/group'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление группы
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$convert = explode("|", $model->numdisc);
		$model->numdisc= $convert;

		if(isset($_POST['Group']))
		{
			$model->attributes=$_POST['Group'];
			$convert = implode("|", $model->numdisc);
			$model->numdisc = $convert;
			
			if($model->save())
				$this->redirect(array('/admin/group'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление группы
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
		$model=Group::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}