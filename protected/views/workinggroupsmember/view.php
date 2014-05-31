<?php
/* @var $this WorkingGroupsMemberController */
/* @var $model WorkingGroupsMembers */

$this->breadcrumbs=array(
	'Working Groups Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WorkingGroupsMembers', 'url'=>array('index')),
	array('label'=>'Create WorkingGroupsMembers', 'url'=>array('create')),
	array('label'=>'Update WorkingGroupsMembers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WorkingGroupsMembers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkingGroupsMembers', 'url'=>array('admin')),
);
?>

<h1>View WorkingGroupsMembers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'userId',
		'WorkingGroupId',
		'workerInGroupActive',
		'workerInGroupSince',
		'workerInGroupUntil',
	),
)); ?>
