<?php
class MarksController extends Controller
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
				'actions'=>array('index','create','select','allresult','update'),
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
		$model=new Marks('search');
		$model->unsetAttributes(); 
		if(isset($_GET['Marks']))
			$model->attributes=$_GET['Marks'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Создание дисциплины
	 */
	public function actionCreate()
	{
		$model=new Marks;

		if(isset($_POST['Marks']))
		{
			$model->attributes=$_POST['Marks'];
			if($model->save())
				$this->redirect(array('/admin/statistic'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Создание дисциплины
	 */
	public function actionUpdate($id)
	{
		$model=new Marks;
		$info = User::model()->findByPk($id);
		$mas = Marks::model()->with('disciplin')->findAll("user_id = :id",array(":id" => $id));
		
		if(isset($_POST['Marks']))
		    {
		        
		        foreach($mas as $i=>$item)
		        {
		            if(isset($_POST['Marks'][$i]))
		                $item->attributes=$_POST['Marks'][$i];
		            	$item->save();
		        }
		        
		        $this->redirect(array('/admin/marks/allresult/id/'.$info->group_id));

		    }

		
		$this->render('update',array(
			'model'=>$model,
			'mas'=>$mas,
			'info'=>$info,
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
	 * Обновление дисциплины
	 */
	public function actionAllresult($id)
	{
		$model= User::model()->findAll("group_id = :id",array(":id" => $id));
		$this->render('allresult',array(
			'model'=>$model,
		));
	}

	/**
	 * Загрузка данных
	 */
	public function loadModel($id)
	{
		$model=Marks::model()->findByPk($id);
		$model->user_id = $model->user->fio;
		if($model===null)
			throw new CHttpException(404);
		return $model;
	}
}