<?php
/* @var $this TasksController */
/* @var $dataProvider CActiveDataProvider */

$this->pageDescription = 'List';

$this->breadcrumbs=array(
	'Tasks',
);

$this->menu=array(
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial( '/tasks/_tasks', array('tasks'=>$dataProvider), true );?>
