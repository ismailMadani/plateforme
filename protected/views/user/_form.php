<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="col-md-6">
    <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Create User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'user-form',
                    'enableAjaxValidation'=>false,
                    )); ?>
                  <div class="box-body">
                      
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'UserName',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'UserName',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'UserName',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'PassWord',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->passwordField($model,'PassWord',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'PassWord',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'CreationDate',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'CreationDate',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'CreationDate',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'LastUpdate',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'LastUpdate',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'LastUpdate',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'FirstName',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'FirstName',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'FirstName',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'LastName',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'LastName',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'LastName',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                      <br>
                      <div class="form-group">
                        <?php echo $form->labelEx($model,'id_role',array('class'=>'col-sm-2 control-label')); ?>
                        <div class="col-sm-10">
                            <?php echo $form->textField($model,'id_role',array('class'=>'form-control')); ?>
                            <?php echo $form->error($model,'id_role',array('class'=>'form-control')); ?>
                        </div>
                      
                    </div>
                
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                      
                    <a href="#" class="btn btn-default">Cancel</a>
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info pull-right')); ?>
                  </div><!-- /.box-footer -->
                <?php $this->endWidget(); ?>
              </div><!-- /.box -->


