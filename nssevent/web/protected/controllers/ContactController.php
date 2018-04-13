<?php

class ContactController extends FeController
{
	public $defaultAction='render';

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


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
