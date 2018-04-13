<?php

class BTCController extends FeController
{
	public $defaultAction='render';


	public function allowedActions()
	{
	   	return 'render';
	}

	public function actionRender()
	{
		$slug=isset($_GET['r'])? plaintext($_GET['r']) : false;
		if($slug){
			parent::renderPageSlug($slug);
		} else {
			throw new CHttpException('404',t('cms','Oops! Page not found!'));
		}

	}

}
