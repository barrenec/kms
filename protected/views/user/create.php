<?php
/* @var $this UserController */
/* @var $model Users */

$this->pageDescription = 'Create';

$this->breadcrumbs=array(
	'People'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->userId)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'countries'=>$countries)); ?>