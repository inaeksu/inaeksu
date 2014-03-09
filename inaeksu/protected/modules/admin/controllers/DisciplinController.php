<?php
class DisciplinController extends Controller
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
				'actions'=>array('index','create','update','delete'),
				'roles'=>array('1'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Список дисциплин
	 */
	public function actionIndex()
	{
		$model=new Disciplin('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Disciplin']))
			$model->attributes=$_GET['Disciplin'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Создание дисциплины
	 */
	public function actionCreate()
	{
		$model=new Disciplin;

		if(isset($_POST['Disciplin']))
		{
			
			$model->attributes=$_POST['Disciplin'];
			if($model->save())
				$this->redirect(array('/admin/disciplin'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление дисциплины
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Disciplin']))
		{
			$model->attributes=$_POST['Disciplin'];
			if($model->save())
				$this->redirect(array('/admin/disciplin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление дисциплины
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
		$model=Disciplin::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}