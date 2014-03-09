<?php
class PageController extends Controller
{	
	/**
	 * Просмотр сраницы
	 */
	public function actionIndex($surl)
	{	
		$models = Page::model()->find("surl = :surl",array(":surl" => $surl));
		if (!$models)
			throw new CHttpException(404);
		$this->render('index',array('models' => $models));
	}
}