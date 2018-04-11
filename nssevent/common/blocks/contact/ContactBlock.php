<?php

/**
 * Class for render contact *
 *
 * @author Tuan Nguyen <nganhtuan63@gmail.com>
 * @version 1.0
 * @package common.blocks.contact */

class ContactBlock extends CWidget
{

    //Do not delete these attr block, page and errors
    public $id='contact';
    public $block=null;
    public $errors=array();
    public $page=null;
    public $layout_asset='';


    public function setParams($params){
          return;
    }

    public function run()
    {
           $this->renderContent();
    }


    protected function renderContent()
    {
      $model = new Comment;
      if(isset($this->block) && ($this->block!=null)){
       			//Start working with contact here
				$params=b64_unserialize($this->block['params']);
	    	$this->setParams($params);
        if(isset($_POST['Comment'])){
          $model->attributes = $_POST['Comment'];
          if ($model->save()){
            user()->setFlash('success',t('cms','Created Successfully!'));
          }
        }

        $this->render(BlockRenderWidget::setRenderOutput($this),array('model'=>$model));
		} else {
			echo '';
		}


    }

    public function actionformContact(){
      echo "asd";die;
    }


    public function validate(){
		return true ;
    }

    public function params()
    {
         return array();
    }

    public function beforeBlockSave(){
	return true;
    }

    public function afterBlockSave(){
	return true;
    }


}

?>
