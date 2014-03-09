<?php
class FileController extends Controller
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
				'actions'=>array('uploadimg','uploadfile'),
				'roles'=>array('1'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Загрузка изображения
	 */
	public function actionUploadImg()
	{
		$directory = realpath(Yii::app()->basePath.'/../uploads/images/').'/';
		$file = md5(date('YmdHis')).'.'.pathinfo(@$_FILES['file']['name'], PATHINFO_EXTENSION);

		if (move_uploaded_file(@$_FILES['file']['tmp_name'], $directory.$file)) {
		     $array = array(
		                    'filelink' => '/uploads/images/'.$file
		     );
		}

		echo CJSON::encode($array);
		exit;
	}

	/**
	 * Загрузка файла
	 */
	public function actionUploadFile()
	{
		$directory = realpath(Yii::app()->basePath.'/../uploads/files/').'/';
		$file = md5(date('YmdHis')).'.'.pathinfo(@$_FILES['file']['name'], PATHINFO_EXTENSION);

		if (move_uploaded_file(@$_FILES['file']['tmp_name'], $directory.$file)) {
		     $array = array(
		                    'filelink' => '/uploads/files/'.$file,
		                    'filename' => $file,
		     );
		}

		echo CJSON::encode($array);
		exit;
	}
}