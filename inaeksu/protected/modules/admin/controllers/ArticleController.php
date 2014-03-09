<?php
class ArticleController extends Controller
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
	 * Список новостей
	 */
	public function actionIndex()
	{
		$model=new Article('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Article']))
			$model->attributes=$_GET['Article'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Добавление новости
	 */
	public function actionCreate()
	{
		$model=new Article;

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('/admin/article'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление новости
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('/admin/article'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление новости
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
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}	
}