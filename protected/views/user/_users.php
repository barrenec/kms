



<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
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
            'value' => 'Helpers::translateAssociationMember($data->associationMember)',
        ),


		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); 

?>
