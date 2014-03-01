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

<h1>Tasks</h1>


<?php //$this->widget('zii.widgets.CListView', array('dataProvider'=>$dataProvider,'itemView'=>'_view',)); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tasks-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(

		 array(
            'header' => 'Author',
            'name' => 'author',
            'type' => 'html',
            'value' => '$data->user->firstName.\' \'.$data->user->lastName',
        ),		

		 array(
            'header' => 'Name',
            'name' => 'taksName',
            'type' => 'html',
            'value' => '$data->taskHeadline',
        ),

		array(
            'header' => 'Description',
            'name' => 'taksDescription',
            'type' => 'html',
            'value' => '$data->taskDescription',
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
			'class'=>'CButtonColumn',
		),
	),
)); ?>


