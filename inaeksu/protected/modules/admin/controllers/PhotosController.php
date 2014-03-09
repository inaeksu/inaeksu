<?php
class PhotosController extends Controller
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
				'actions'=>array('index','create','delete'),
				'roles'=>array('1'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Список фотографий
	 */
	public function actionIndex()
	{
		$model=new Photos('search');
		$model->unsetAttributes();
		if(isset($_GET['Photos']))
			$model->attributes=$_GET['Photos'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Добавление фотографии
	 */
	public function actionCreate()
	{
		$model=new Photos;

		$images = array();

		if(isset($_POST['Photos']))
		{
			$model->attributes=$_POST['Photos'];
		    $images = CUploadedFile::getInstancesByName('images');
            
            foreach ($images as $pic) 
            {
                $time = time();

                if($pic->saveAs('uploads/albums/fulls/'.$time."_".$pic->name))
                {
                	
					$ih = new CImageHandler();
					Yii::app()->ih 
					->load($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/fulls/'.$time."_".$pic->name) 
					->thumb('138', '138')
					->save($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/thumbs/'.$time."_".$pic->name)
					->reload()
					->thumb('800', '600')
					->save($_SERVER['DOCUMENT_ROOT'].Yii::app()->urlManager->baseUrl.'/uploads/albums/fulls/'.$time."_".$pic->name)
					;

                	$img_add = new Photos();
                    $img_add->album_id = $model->album_id;
                    $img_add->full = '/uploads/albums/fulls/'.$time."_".$pic->name;
                    $img_add->thumb = '/uploads/albums/thumbs/'.$time."_".$pic->name;
                    $img_add->save();
                }    
			}
			
			$this->redirect(array('/admin/photos'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Удаление фотографии
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
		$model=Photos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}