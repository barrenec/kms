

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'working-groups-rank',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$ranks,
	'columns'=>array(

		array(
            'header' => 'Name',
            'name' => 'workingGroupName',
            'type' => 'html',
            'value' => '$data->suma',
        ),		

	),
)); ?>