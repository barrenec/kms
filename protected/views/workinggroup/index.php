<?php
/* @var $this WorkingGroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Working Groups',
);

$this->pageDescription = 'List';


$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills',
    'items'=>array(
        array('label'=>'Create new working group', 'icon'=>'plus white'
			, 'url'=>array('create'), 'active'=>true),
    ),
)); 

$this->menu=array(
	array('label'=>'Manage WorkingGroups', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'working-groups-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
	'columns'=>array(

		array(
            'header' => 'Name',
            'name' => 'Name',
            'type' => 'html',
            'value' => 'CHtml::link($data->workingGroupName, array("view", "id"=>$data->id))',
        ),	

		array(
            'header' => 'Description',
            'name' => 'workingGroupDescription',
            'type' => 'html',
            'value' => '$data->workingGroupDescription',
        ),		
	
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); ?>

