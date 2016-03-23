<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo CHtml::encode(Yii::app()->name); ?> &alpha;</title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/flag-icon/css/flag-icon.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    
    <style type="text/css">.no-js #loader { display: none;  }.js #loader { display: block; position: absolute; left: 100px; top: 0; }.se-pre-con {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url(img/pre/Preloader_3.gif) center no-repeat #fff;}body {font-family: 'Quicksand', sans-serif;}</style>
    
</head>
<body>
    <div class="se-pre-con"></div>
    <script type="text/javascript">$(window).load(function() {$(".se-pre-con").fadeOut("slow");;});</script>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-spin fa-cog"></i> <?php echo CHtml::encode(Yii::app()->name); ?> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li><?php   echo Yii::app()->user->name; 

                 ?></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php if(Yii::app()->user->isGuest){
                        ?>
                            
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login"><i class="fa fa-user fa-fw"></i> login</a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/register"><i class="fa fa-user fa-fw"></i> register</a></li>
                                
                        <?php
                        }else{
                           ?> 
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> paramètres</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a>
                            </li>
                            
                          <?php  
                        }
                        ?>
                        
                    </ul>

                    <!-- /.dropdown-user -->
                </li>
            </ul>
            <style type="text/css">img.porter-img{height: 35px;width: 35px;}img.lang-img{height: 20px;width: 20px;}</style>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       






                        <li>
                         <a href="#" class="pmg"><i class='fa fa-wrench fa-fw'></i>&nbsp;&nbsp;&nbsp;Users</a>
                         <ul class="nav nav-second-level">
                             <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/user"><p class="fa fa-paperclip"></p>&nbsp;&nbsp;&nbsp; Users</a>
                            </li>
                            <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/user/create"><p class="fa fa-envelope-o"></p>&nbsp;&nbsp;&nbsp; create</a>
                            </li>
                            <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/user/admin"><p class="fa fa-bell-o"></p>&nbsp;&nbsp;&nbsp; manage</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                         <a href="#" class="pmg"><i class='fa fa-wrench fa-fw'></i>&nbsp;&nbsp;&nbsp;Roles</a>
                         <ul class="nav nav-second-level">
                             <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Role"><p class="fa fa-paperclip"></p>&nbsp;&nbsp;&nbsp; Roles</a>
                            </li>
                            <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Role/create"><p class="fa fa-envelope-o"></p>&nbsp;&nbsp;&nbsp; create</a>
                            </li>
                            <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Role/admin"><p class="fa fa-bell-o"></p>&nbsp;&nbsp;&nbsp; manage</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                         <a href="#" class="pmg"><i class='fa fa-wrench fa-fw'></i>&nbsp;&nbsp;&nbsp;Messages</a>
                         <ul class="nav nav-second-level">
                             <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Messages"><p class="fa fa-paperclip"></p>&nbsp;&nbsp;&nbsp; Messages</a>
                            </li>
                            <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Messages/create"><p class="fa fa-envelope-o"></p>&nbsp;&nbsp;&nbsp; create</a>
                            </li>
                            <li >
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/Messages/admin"><p class="fa fa-bell-o"></p>&nbsp;&nbsp;&nbsp; manage</a>
                            </li>
                            
                        </ul>
                    </li>
                    




                </ul>
            </div>
        </div>
    </nav>



<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">



 <section class="content-header">
          
          
            <?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
      'links'=>$this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
  <?php endif?>
            
          
        </section>


<?php echo $content; ?>

</div>
</div>
</div>





</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/metisMenu/dist/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/assets/dist/js/sb-admin-2.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
</body>
</html>





















