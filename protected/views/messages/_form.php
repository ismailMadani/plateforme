<?php
/* @var $this MessagesController */
/* @var $model Messages */
/* @var $form CActiveForm */
?>


<div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Compose New Message</h3>
                </div><!-- /.box-header -->
                 <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'messages-form',
                            'enableAjaxValidation'=>false,
                    )); ?>
                <div class="box-body">
                    
                   
                  <div class="form-group">
                        <?php echo $form->labelEx($model,'Content'); ?>
                        <?php echo $form->textArea($model,'Content',array('class'=>'form-control',)); ?>
                        <?php echo $form->error($model,'Content'); ?>
                    
                  </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'Subject'); ?>
                        <?php echo $form->textArea($model,'Subject',array('class'=>'form-control',)); ?>
                        <?php echo $form->error($model,'Subject'); ?>
                    
                  </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'sender'); ?>
                        <?php echo $form->textArea($model,'sender',array('class'=>'form-control',)); ?>
                        <?php echo $form->error($model,'sender'); ?>
                    
                  </div>
                    <div class="form-group">
                        <?php echo $form->labelEx($model,'Date'); ?>
                        <?php echo $form->textArea($model,'Date',array('class'=>'form-control',)); ?>
                        <?php echo $form->error($model,'Date'); ?>
                    
                  </div>
                  
                  
                  
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                    
                  </div>
                  <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                </div><!-- /.box-footer -->
                <?php $this->endWidget(); ?>
              </div><!-- /. box -->




















