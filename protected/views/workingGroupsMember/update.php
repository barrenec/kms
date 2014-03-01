<?php
/* @var $this WorkingGroupsMemberController */
/* @var $model WorkingGroupsMembers */

$this->breadcrumbs=array(
	'Working Groups Members'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WorkingGroupsMembers', 'url'=>array('index')),
	array('label'=>'Create WorkingGroupsMembers', 'url'=>array('create')),
	array('label'=>'View WorkingGroupsMembers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WorkingGroupsMembers', 'url'=>array('admin')),
);
?>

<h1>Update WorkingGroupsMembers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>