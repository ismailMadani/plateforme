<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

?>
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style=" margin-top:20%; ">
                <div class="login-panel panel panel-default" style="box-shadow: 0px 0px 15px #888888;">
                    <div class="panel-heading">
                      <center>  <h3 class="panel-title">Register</h3></center> 
                    </div>
                    <div class="panel-body">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-register-form',
	'enableAjaxValidation'=>false,
)); 
if(isset($model->id)){
    echo 'yaaaay';
}


?>

	

	<?php echo $form->errorSummary($model); ?>
        <fieldset>
	

	<div class="form-group">
		<?php echo $form->textField($model,'UserName',array('class'=>'form-control','value'=>'','placeholder'=>'Username')); ?>
		<?php echo $form->error($model,'UserName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->textField($model,'PassWord',array('class'=>'form-control','value'=>'','placeholder'=>'PassWord')); ?>
		<?php echo $form->error($model,'PassWord'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->textField($model,'FirstName',array('class'=>'form-control','value'=>'','placeholder'=>'FirstName')); ?>
		<?php echo $form->error($model,'FirstName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->textField($model,'LastName',array('class'=>'form-control','value'=>'','placeholder'=>'LastName')); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->hiddenField($model,'id_role',array('type'=>"hidden",'value'=>'1')); ?>
		<?php echo $form->error($model,'LastName'); ?>
	</div>


	
		<?php echo CHtml::submitButton('Register' , array('class'=> 'btn btn-primary btn-block btn-flat')); ?>
	
            
            </fieldset>
</div>
<?php $this->endWidget(); ?>

</div></div></div></div>