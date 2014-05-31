<?php
/* @var $this WorkingGroupController */
/* @var $model WorkingGroups */

$this->breadcrumbs=array(
	'Working Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WorkingGroups', 'url'=>array('index')),
	array('label'=>'Manage WorkingGroups', 'url'=>array('admin')),
);
?>

<h1>Create WorkingGroups</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>