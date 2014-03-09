<?php
/* @var $this TasksController */
/* @var $model Tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->taksId=>array('view','id'=>$model->taksId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tasks', 'url'=>array('index')),
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'View Tasks', 'url'=>array('view', 'id'=>$model->taksId)),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<h1>Update Tasks <?php echo $model->taksId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'users'=>$users, 'workingGroups'=>$workingGroups)); ?>