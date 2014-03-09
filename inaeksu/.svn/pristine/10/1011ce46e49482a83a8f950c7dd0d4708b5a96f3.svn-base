<?php
class StatisticController extends Controller
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
				'actions'=>array('index','create','select','update'),
				'roles'=>array('1','2'),
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
		$model=new Statistic('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Statistic']))
			$model->attributes=$_GET['Statistic'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Обновление дисциплины
	 */
	public function actionSelect()
	{
		$model= Group::model()->findAll();
		$this->render('select',array(
			'model'=>$model,
		));
	}

	/**
	 * Создание дисциплины
	 */
	public function actionUpdate($id)
	{
		$model=new Statistic;
		$mas = Statistic::model()->with('user')->findAll("user.group_id = :id",array(":id" => $id));
		
		if(isset($_POST['Statistic']))
		    {
		        
		        foreach($mas as $i=>$item)
		        {
		            if(isset($_POST['Statistic'][$i]))
		                $item->attributes=$_POST['Statistic'][$i];
		            	$item->save();
		        }
		        $this->redirect(array('/admin/statistic'));

		    }

		
		$this->render('update',array(
			'model'=>$model,
			'mas'=>$mas,
		));
	}

	/**
	 * Загрузка данных
	 */
	public function loadModel($id)
	{
		$model=Statistic::model()->findByPk($id);
		$model->user_id = $model->user->fio;
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}