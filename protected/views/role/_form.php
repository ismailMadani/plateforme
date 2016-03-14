<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>



<div class="col-md-6">
    <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Create Role</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	'enableAjaxValidation'=>false,
)); ?>

                  <div class="box-body">
                      <br>
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'Name',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'Name',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'Name',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      
                 
                
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                      
                    <a href="#" class="btn btn-default">Cancel</a>
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info pull-right')); ?>
                  </div><!-- /.box-footer -->
                <?php $this->endWidget(); ?>
              </div><!-- /.box -->


