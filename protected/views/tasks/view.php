<?php
/* @var $this TasksController */
/* @var $model Tasks */

$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->taskHeadline,
);

$this->menu=array(
	array('label'=>'List Tasks', 'url'=>array('index')),
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'Update Tasks', 'url'=>array('update', 'id'=>$model->taksId)),
	array('label'=>'Delete Tasks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->taksId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userId',
		'workingGroupId',
		'taskHeadline',
		'taskDescription',
		'insertDate',
		'updateDate',
		'taskDuration',
		'taskDurationEntity',
	),
)); ?>
