<?php

/**
 * Class for render termBlock *
 *
 * @author Tuan Nguyen <nganhtuan63@gmail.com>
 * @version 1.0
 * @package common.blocks.termblock */

class TermBlock extends CWidget
{

    //Do not delete these attr block, page and errors
    public $id='termblock';
    public $block=null;
    public $errors=array();
    public $page=null;
    public $layout_asset='';

    //Content list attribute
    public $content_list;
    public $display_type;

    //Display types for the list view render
    const DISPLAY_TYPE_HOMEPAGE=0;

    const DISPLAY_TYPE_CATEGORY=1;


    public function setParams($params){
      $this->content_list=isset($params['content_list']) ? $params['content_list'] : null;
    $this->display_type=isset($params['display_type']) ? $params['display_type'] : self::DISPLAY_TYPE_HOMEPAGE;
    }
    public function run()
    {
            $this->renderContent();
    }

    protected function renderContent()
    {
       if(isset($this->block) && ($this->block!=null)){
       			//Start working with termBlock here
				$params=b64_unserialize($this->block['params']);
	    	$this->setParams($params);
        $term = $_GET['id'];
        $list_object = ObjectTerm::model()->findAll('term_id = :term',array(':term'=>$term));
        $obj = "object_id IN (";
        if ($list_object){
          foreach ($list_object as $key =>$value){
            $obj = $obj."$value->object_id".",";
          }
          $obj[strlen($obj) - 1] = ")";
        }
        else {
          $obj = "0";
        }
        $criteria = new CDbCriteria;
        $criteria->condition = $obj;
        $provider = new CActiveDataProvider('Object',array(
                                'criteria'=> $criteria,
                                'pagination'=>array(
                                        'pageSize'=>2
                                    ),

                                ));
        $this->render(BlockRenderWidget::setRenderOutput($this),array('provider'=>$provider));
		} else {
			echo '';
		}


    }

    public function validate(){
	return true;
    }

    public function params()
    {
            return array(
                    'content_list' => t('site','Content list'),
                    'display_type' => t('site','Display type'),
            );
    }

    public function beforeBlockSave(){
	return true;
    }

    public function afterBlockSave(){
	return true;
    }

	public static function getDisplayTypes(){
        return array(
           self::DISPLAY_TYPE_HOMEPAGE=>t("cms","Display in Homepage"),
           self::DISPLAY_TYPE_CATEGORY=>t("cms","Display in Category page"));
    }


}

?>
