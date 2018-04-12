<?php
/* @var $this UserRegisterFormController */
/* @var $model UserRegisterForm */
/* @var $form CActiveForm */
?>

<div class="frm-ct	">
 <h2 style="color: green;"><?php $this->render('cmswidgets.views.notification_frontend'); ?></h2>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-register-form-signup-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
<ul>
	<li >
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'txt-ev')); ?>
		<h style="color: red;"> <?php echo $form->error($model,'username'); ?></h>
	</li>

	<li >
		<?php echo $form->labelEx($model,'display_name'); ?>
		<?php echo $form->textField($model,'display_name',array('class'=>'txt-ev')); ?>
		<?php echo $form->error($model,'display_name'); ?>
	</li>

	<li>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('class'=>'txt-ev')); ?>
		<?php echo $form->error($model,'email'); ?>
	</li>

	<li>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'txt-ev')); ?>
		<?php echo $form->error($model,'password'); ?>
	</li>

	<li>
		<?php echo CHtml::submitButton('SignUp',array('class'=>'sm-ev')); ?>
	</li>
</ul>


<?php $this->endWidget(); ?>

</div><!-- form -->
