<?php

class SearchController extends FeController
{
	public $defaultAction='render';


	public function allowedActions()
	{
	   	return 'render';
	}

	public function actionRender()
	{
		 return	parent::renderPageSlug('search');
	}

}
