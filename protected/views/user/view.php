<?php
/* @var $this UserController */
/* @var $model Users */

$userName = $model->firstName.' '.$model->lastName;

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$userName,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->userId)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs', 
    'id'=>'Mytab',
    'tabs'=>array(
        array('label'=>'General Informations', 'content'=>$this->renderPartial( '_generalInformations', array( 'model'=>$model ), true ), 'active'=>'true'),
        array('label'=>'Stats', 'content'=>$this->renderPartial( '_stats', array( 'stats'=>$stats, 'statsPerMonth'=>$statsPerMonth ), true )),
        array('label'=>'Tasks', 'content'=>$this->renderPartial( '/tasks/_tasks', array( 'tasks'=>$tasks), true )),
    ),
)); ?>



