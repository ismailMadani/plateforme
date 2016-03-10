<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'UserName'); ?>
		<?php echo $form->textField($model,'UserName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'UserName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PassWord'); ?>
		<?php echo $form->passwordField($model,'PassWord',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PassWord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CreationDate'); ?>
		<?php echo $form->textField($model,'CreationDate'); ?>
		<?php echo $form->error($model,'CreationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastUpdate'); ?>
		<?php echo $form->textField($model,'LastUpdate'); ?>
		<?php echo $form->error($model,'LastUpdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_role'); ?>
		<?php echo $form->textField($model,'id_role'); ?>
		<?php echo $form->error($model,'id_role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->