<?php
class PageController extends Controller
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
	 * Список страниц
	 */
	public function actionIndex()
	{
		$model=new Page('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Page']))
			$model->attributes=$_GET['Page'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Создание страницы
	 */
	public function actionCreate()
	{
		$model=new Page;

		if(isset($_POST['Page']))
		{
			$model->attributes=$_POST['Page'];
			if($model->save())
				$this->redirect(array('/admin/page'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление страницы
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Page']))
		{
			$model->attributes=$_POST['Page'];
			if($model->save())
				$this->redirect(array('/admin/page'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление страницы
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
		$model=Page::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}