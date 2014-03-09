<?php
class AlbumsController extends Controller
{
	/**
	 * Просмотр альбома
	 */
	public function actionView($id)
	{
		$models = Photos::model()->findAll("album_id = :id",array(":id" => $id));
		$aname = Albums::model()->findByPk($id);
		if (!$models)
			throw new CHttpException(404);
		$this->render('view',array('models' => $models,'aname' => $aname));
	}

	/**
	 * Список альбомов
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria();
		$criteria->order = 'date DESC';
	    $models=Albums::model()->findAll($criteria);
	    $this->render('index', array(
	    'models' => $models
	    ));	
	}
}