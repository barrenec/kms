<?php
/* @var $this WorkingGroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Working Groups',
);

$this->menu=array(
	array('label'=>'Create WorkingGroups', 'url'=>array('create')),
	array('label'=>'Manage WorkingGroups', 'url'=>array('admin')),
);
?>

<h1>Working Groups</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'working-groups-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'workingGroupName::Name',
		'workingGroupDescription::Description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

