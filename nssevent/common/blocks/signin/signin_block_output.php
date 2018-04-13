<div class="form-stacked">
    <?php $this->render('cmswidgets.views.notification_frontend'); ?>
    <div class="website-info">
        <h1><?php echo t('site','Sign into your Account'); ?></h1>
    </div>
    <?php $form=$this->beginWidget('CActiveForm', array(
       'id'=>$this->id.ConstantDefine::AJAX_BLOCK_SEPERATOR.$this->block['block_id'].ConstantDefine::AJAX_BLOCK_SEPERATOR.'login-content',
	   'enableAjaxValidation'=>true,
	   'clientOptions'=>array(
	       'validateOnSubmit'=>true,
	    ),
        ));
    ?>
    <?php echo $form->errorSummary($model); ?>
  <ul>
  	<li >
  		<?php echo $form->labelEx($model,'username'); ?>
  		<?php echo $form->textField($model,'username',array('class'=>'txt-ev')); ?>
  		<h style="color: red;"> <?php echo $form->error($model,'username'); ?></h>
  	</li>

  	<li>
  		<?php echo $form->labelEx($model,'password'); ?>
  		<?php echo $form->passwordField($model,'password',array('class'=>'txt-ev')); ?>
  		<?php echo $form->error($model,'password'); ?>
  	</li>

  	<li>
  		<?php echo CHtml::submitButton('SignIn',array('class'=>'sm-ev')); ?>
  	</li>
  </ul>


  <?php $this->endWidget(); ?>

  </div><!-- form -->
