   <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
     
       <div class="form">
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

          <div class="form-group has-feedback ">
            <!--<?php// echo $form->labelEx($model,'username'); ?> -->
            <?php echo $form->textField($model,'username',array('class'=>'form-control','value'=>'','placeholder'=>'Username') ); ?>
            <?php echo $form->error($model,'username'); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback ">
           <!-- <?php //echo $form->labelEx($model,'password'); ?> -->
            <?php echo $form->passwordField($model,'password' ,array('class'=>'form-control','value'=>'', 'placeholder'=>'Password')); ?>
            <?php echo $form->error($model,'password'); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck ">
                <?php echo $form->checkBox($model,'rememberMe' , array('class' =>'icheckbox_square-blue iCheck-helper', 'position'=>'absolute', 'top'=> '-20%', 'left'=> '-20%', 'display'=>'block', 'width'=> '140%', 'height'=>'140%', 'margin'=>'0px', 'padding'=>'0px','border'=>'0px', 'opacity'=>'0', 'background'=>'rgb(255, 255, 255)' )); ?>
                <?php echo $form->label($model,'rememberMe' ); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
               <?php echo CHtml::submitButton('Login' , array('class'=> 'btn btn-primary btn-block btn-flat') ); ?>
            </div><!-- /.col -->
          </div>
       <?php $this->endWidget(); ?>

       <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->
        
        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->


    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/plugins/iCheck/icheck.min.js"></script>
    <script>
     /* $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
   */
    </script>