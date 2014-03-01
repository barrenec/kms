<?php
/* @var $this WorkingGroupController */
/* @var $model WorkingGroups */

$this->breadcrumbs=array(
	'Working Groups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkingGroups', 'url'=>array('index')),
	array('label'=>'Create WorkingGroups', 'url'=>array('create')),
	array('label'=>'View WorkingGroups', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorkingGroups', 'url'=>array('admin')),
);
?>

<h1>Update WorkingGroups <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>