<?php
class ArticleController extends Controller
{	
	/**
	 * Просмотр новости
	 */
	public function actionView($id)
	{
		$models = Article::model()->findByPk($id);
		if (!$models)
			throw new CHttpException(404);
		$this->render('view',array('models' => $models));
	}
}