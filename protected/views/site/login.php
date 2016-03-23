   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style=" margin-top:20%; ">
                <div class="login-panel panel panel-default" style="box-shadow: 0px 0px 15px #888888;">
                    <div class="panel-heading">
                      <center>  <h3 class="panel-title">Se connecter S'il vous plaît</h3></center> 
                    </div>
                    <div class="panel-body">
                <?php $form=$this->beginWidget('CActiveForm', array(
                  'id'=>'login-form',
                  'enableClientValidation'=>true,
                  'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                  ),

                  'htmlOptions'=>array(
                  //'class'=>'form-control',
                   ),

                )); ?>

          <fieldset>
              <div class="form-group">
            <!--<?php// echo $form->labelEx($model,'username'); ?> -->
            <?php echo $form->textField($model,'username',array('class'=>'form-control','value'=>'','placeholder'=>'Username') ); ?>
            <?php echo $form->error($model,'username'); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group">
           <!-- <?php //echo $form->labelEx($model,'password'); ?> -->
            <?php echo $form->passwordField($model,'password' ,array('class'=>'form-control','value'=>'', 'placeholder'=>'Password')); ?>
            <?php echo $form->error($model,'password'); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
              <div class="form-group">
          
                <?php echo $form->checkBox($model,'rememberMe' , array('class' =>'icheckbox_square-blue iCheck-helper', 'position'=>'absolute', 'top'=> '-20%', 'left'=> '-20%', 'display'=>'block', 'width'=> '140%', 'height'=>'140%', 'margin'=>'0px', 'padding'=>'0px','border'=>'0px', 'opacity'=>'0', 'background'=>'rgb(255, 255, 255)' )); ?>
                <?php echo $form->label($model,'rememberMe' ); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
              </div>
         
         
               <?php echo CHtml::submitButton('Login' , array('class'=> 'btn btn-primary btn-block btn-flat') ); ?>
            </fieldset>
          </div>
       <?php $this->endWidget(); ?>

       <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->
        
        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

     
                </div></div></div></div>

    