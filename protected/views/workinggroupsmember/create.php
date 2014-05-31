<?php
/* @var $this WorkingGroupsMemberController */
/* @var $model WorkingGroupsMembers */

$this->breadcrumbs=array(
	'Working Groups Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WorkingGroupsMembers', 'url'=>array('index')),
	array('label'=>'Manage WorkingGroupsMembers', 'url'=>array('admin')),
);
?>

<h1>Create WorkingGroupsMembers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'users'=>$users, 'workingGroups'=>$workingGroups)); ?>