<?php
/* @var $this WorkingGroupController */
/* @var $model WorkingGroups */

$this->breadcrumbs=array(
	'Working Groups'=>array('index'),
	$model->workingGroupName,
);

$this->menu=array(
	array('label'=>'List WorkingGroups', 'url'=>array('index')),
	array('label'=>'Create WorkingGroups', 'url'=>array('create')),
	array('label'=>'Update WorkingGroups', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WorkingGroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WorkingGroups', 'url'=>array('admin')),
);
?>


<h3><?php echo $model->workingGroupName; ?></h3>
<?php echo $model->workingGroupDescription; ?>

<br><br>

<h1>Tasks</h1>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider'=>$tasks,
	'type'=>'striped bordered condensed',
	'id'=>'tasks-grid',


)); ?>



