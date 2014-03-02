<?php
/* @var $this TasksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tasks',
);

$this->menu=array(
	array('label'=>'Create Tasks', 'url'=>array('create')),
	array('label'=>'Manage Tasks', 'url'=>array('admin')),
);
?>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'tasks-grid',
    'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
	'columns'=>array(

		 array(
            'header' => 'Author',
            'name' => 'author',
            'type' => 'html',
            'value' => 'CHtml::link($data->user->firstName.\' \'.$data->user->lastName, array("user/view", "id"=>$data->userId))',
        ),		

		 array(
            'header' => 'Name',
            'name' => 'taksName',
            'type' => 'html',
            'value' => '$data->taskHeadline',
            'value' => 'CHtml::link($data->taskHeadline, array("view", "id"=>$data->taksId))',
        ),

		
		array(
            'header' => 'Date',
            'name' => 'date',
            'type' => 'html',
            'value' => '$data->taskDateFrom',
        ),	

		array(
            'header' => 'Duration',
            'name' => 'duration',
            'type' => 'html',
            'value' => '$data->taskDuration.\' \'.$data->taskDurationEntity',
        ),	

		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); ?>


