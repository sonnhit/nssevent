<?php

/**
 * Class for render signup *
 *
 * @author Tuan Nguyen <nganhtuan63@gmail.com>
 * @version 1.0
 * @package common.blocks.signup */

class SignupBlock extends CWidget
{

    //Do not delete these attr block, page and errors
    public $id='signup';
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
       if(isset($this->block) && ($this->block!=null)){
       			//Start working with signup here
				$params=b64_unserialize($this->block['params']);
	    	$this->setParams($params);
        $model=new UserCreateForm;

        // uncomment the following code to enable ajax-based validation
        /*
        if(isset($_POST['ajax']) && $_POST['ajax']==='user-register-form-signup-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        */
        if(isset($_POST['UserCreateForm']))
        {
            $model->attributes=$_POST['UserCreateForm'];
            if($model->validate())
            {
              $new_user = new User;
              $new_user->scenario='create';
              $new_user->username=$model->username;
              $new_user->email=$model->email;
              $new_user->display_name=$model->display_name;
              $new_user->password=$model->password;
              if($new_user->save()){
                  user()->setFlash('success',t('cms','Create new User Successfully!'));
              }

              $model= new UserCreateForm;
              //Yii::app()->controller->redirect(array('create'));
            }
        }
        $this->render(BlockRenderWidget::setRenderOutput($this),array('model'=>$model));
		} else {
			echo '';
		}


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
