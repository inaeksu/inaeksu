<?php
class CategoryController extends Controller
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
	 * Список категорий
	 */
	public function actionIndex()
	{
		$model=new Category('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Category']))
			$model->attributes=$_GET['Category'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Добавление категории
	 */
	public function actionCreate()
	{
		$model=new Category;

		if(isset($_POST['Category']))
		{
			$model->attributes=$_POST['Category'];
			if($model->save())
				$this->redirect(array('/admin/category'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление категории
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Category']))
		{
			$model->attributes=$_POST['Category'];
			if($model->save())
				$this->redirect(array('/admin/category'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление категории
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
		$model=Category::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}