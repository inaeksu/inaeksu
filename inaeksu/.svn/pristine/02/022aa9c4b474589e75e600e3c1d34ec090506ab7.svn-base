<?php
class SiteController extends Controller
{
	/**
	 * Вывод новостей
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria();
		$criteria->order = 'date DESC';

	    $count=Article::model()->count($criteria);
	    $pages=new CPagination($count);

	    $pages->pageSize=5;
	    $pages->applyLimit($criteria);
	    $models=Article::model()->findAll($criteria);



	    $this->render('index', array(
	    'models' => $models,
	    'pages' => $pages
	    ));	
	}

	/**
	 * Обработка ошибок
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Вход
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Выход
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}