<?php
class AlbumsController extends Controller
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
	 * Список альбомов
	 */
	public function actionIndex()
	{
		$model=new Albums('search');
		$model->unsetAttributes();
		if(isset($_GET['Albums']))
			$model->attributes=$_GET['Albums'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Добавление альбома
	 */
	public function actionCreate()
	{
		$model=new Albums;

		if(isset($_POST['Albums']))
		{
			$model->attributes=$_POST['Albums'];
			$model->image=CUploadedFile::getInstance($model,'image');
			$time = time();
			$model->image->saveAs('uploads/albums/covers/'.$time."_".$model->image);

			

			$ih = new CImageHandler();
			Yii::app()->ih 
			->load($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/covers/'.$time."_".$model->image) 
			->thumb('138', '138')
			->save($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/covers/'.$time."_".$model->image)
			;

			$model->cover = '/uploads/albums/covers/'.$time."_".$model->image;

			if($model->save())
				$this->redirect(array('/admin/albums'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление альбома
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Albums']))
		{
			$model->attributes=$_POST['Albums'];
			$model->image=CUploadedFile::getInstance($model,'image');
			$time = time();
			$model->image->saveAs('uploads/albums/covers/'.$time."_".$model->image);

			

			$ih = new CImageHandler();
			Yii::app()->ih 
			->load($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/covers/'.$time."_".$model->image) 
			->thumb('138', '138')
			->save($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/covers/'.$time."_".$model->image)
			;

			$model->cover = '/uploads/albums/covers/'.$time."_".$model->image;

			if($model->save())
				$this->redirect(array('/admin/albums'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление альбома
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
		$model=Albums::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}