<h1 class="title-ev">Liên hệ</h1>
<div class="frm-ct">
<?php $this->render('cmswidgets.views.notification'); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-contact_block_output-form',
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),

)); ?>

	<?php echo $form->errorSummary($model); ?>

	<ul >
    <li>
  		<?php echo $form->labelEx($model,'comment_author'); ?>
  		<?php echo $form->textField($model,'comment_author',array('class'=>'txt-ev')); ?>
  		<?php echo $form->error($model,'comment_author'); ?>
    </li>

    <li>
		<?php echo $form->labelEx($model,'comment_author_email'); ?>
		<?php echo $form->textField($model,'comment_author_email',array('class'=>'txt-ev')); ?>
		<?php echo $form->error($model,'comment_author_email'); ?>
    <li>

    <li>
		<?php echo $form->labelEx($model,'comment_content'); ?>
		<?php echo $form->textarea($model,'comment_content',array('class'=>'txtarea-ev'))?>
		<?php echo $form->error($model,'comment_content'); ?>
    <li>

		<?php if(CCaptcha::checkRequirements()): ?>
		<li >
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<?php echo $form->textField($model,'verifyCode',array('class'=>'txt-ev-1')); ?>
			<div style="padding-left:85px;"> <?php $this->widget('CCaptcha'); ?> </div>
			<?php echo $form->error($model,'verifyCode'); ?>
		</li>
		<?php endif; ?>

  	<li>
  		<?php echo CHtml::submitButton('Gửi',array('class'=>'sm-ev')); ?>
  	</li>
  </ul>
<?php $this->endWidget(); ?>

</div><!-- form -->
