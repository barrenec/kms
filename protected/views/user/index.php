<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'People',
);

$this->pageDescription = 'List';


$this->menu=array(
	array('label'=>'Create user', 'url'=>array('create')),
	array('label'=>'', 'url'=>'#'),
	array('label'=>'All', 'url'=>'?filter=0'),
	array('label'=>'Parents', 'url'=>'?filter=1'),
	array('label'=>'Children', 'url'=>'?filter=2'),
	array('label'=>'Children waiting', 'url'=>'?filter=7'),
	
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

