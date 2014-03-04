<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ba-bbq.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>

	<!-- Le styles -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/application.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/images/apple-touch-icon-114x114.png">
</head>

<body>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'null', // null or 'inverse'
    'brand'=>'KMS',
    'brandUrl'=>Yii::app()->request->scriptUrl,
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'People', 'url'=>Yii::app()->request->scriptUrl.'/user/index', 'visible'=>!Yii::app()->user->isGuest, 'icon'=>'user white'),
                array('label'=>'Tasks', 'url'=>Yii::app()->request->scriptUrl.'/tasks/index', 'visible'=>!Yii::app()->user->isGuest, 'icon'=>'list white'),
                array('label'=>'Working Groups', 'url'=>Yii::app()->request->scriptUrl.'/workinggroup/index', 'visible'=>!Yii::app()->user->isGuest, 
                	'icon'=>'th-large white',
                	'items'=>array(
                			array('label'=>'Working Groups', 'url'=>Yii::app()->request->scriptUrl.'/workinggroup/index', 'visible'=>!Yii::app()->user->isGuest,),
                			array('label'=>'Working Group Members', 'url'=>Yii::app()->request->scriptUrl.'/workinggroupsmember/index', 'visible'=>!Yii::app()->user->isGuest,
                	),
                		),
                	),

                

            ),
        ),

       array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
            	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ( '.Yii::app()->user->name.' )', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest
					, 'icon'=>'share white'),                
            ),
        ),


    ),
)); ?>
			</div>
		</div>
	</div>
	<br><br>
	<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('BBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' / ',
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	</div>
	
	<?php echo $content; ?>
	
	<footer class="footer">
		<div class="container">
			<p>Copyright &copy; <?php echo date('Y'); ?> barrenec.<br/>
			All Rights Reserved.<br/>
		</div>
	</footer>
	
</body>
</html>