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

?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'users-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$dataProvider,
	'columns'=>array(

		 array(
            'header' => 'Person',
            'name' => 'author',
            'type' => 'html',
            'value' => 'CHtml::link($data->getUserFullName(), array("view", "id"=>$data->userId))',
        ),		


		array(
            'header' => 'E-mail',
            'name' => 'email',
            'type' => 'html',
            'value' => '$data->email',
        ),		

		array(
            'header' => 'Person Typ',
            'name' => 'memberTyp',
            'type' => 'html',
            'value' => '$data->memberTyp',
        ),		


		array(
            'header' => 'Member typ',
            'name' => 'associationMember',
            'type' => 'html',
            'value' => '$data->associationMember',
        ),


		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); ?>

