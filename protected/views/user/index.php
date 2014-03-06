<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);

$this->searchFilters=array(
	array('label'=>'All', 'url'=>array('', 'filter'=>'0')),
	array('label'=>'Parents', 'url'=>array('', 'filter'=>'1')),
	array('label'=>'Children', 'url'=>array('', 'filter'=>'2')),
	array('label'=>'Parents waiting', 'url'=>array('', 'filter'=>'6')),
	array('label'=>'Children waiting', 'url'=>array('', 'filter'=>'4')),
	array('label'=>'Members', 'url'=>array('', 'filter'=>'8')),	
);

echo $this->renderPartial( '_users', array('dataProvider'=>$dataProvider), true );


?>

