<?php
/* @var $this TasksController */
/* @var $dataProvider CActiveDataProvider */

$this->pageDescription = 'List';

$this->breadcrumbs=array(
	'Tasks',
);

$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills',
    'items'=>array(
        array('label'=>'Create new Task', 'icon'=>'plus white'
			, 'url'=>array('create'), 'active'=>true),
    ),
)); 

$this->menu=array(
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial( '/tasks/_tasks', array('tasks'=>$dataProvider), true );?>
