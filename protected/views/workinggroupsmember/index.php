<?php
/* @var $this WorkingGroupsMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Working Groups Members',
);

$this->menu=array(
	array('label'=>'Create WorkingGroupsMembers', 'url'=>array('create')),
	array('label'=>'Manage WorkingGroupsMembers', 'url'=>array('admin')),
);
?>

<h1>Working Groups Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
