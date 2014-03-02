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

<h1>Profile <?php echo $userName; ?></h1><br>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills', 
    'stacked'=>false,
    'items'=>array(
        array('label'=>'General informations', 'url'=>'#generalInformations'),
        array('label'=>'Stats', 'url'=>'#stats'),
        array('label'=>'Tasks', 'url'=>'#tasks'),
    ),
)); ?>

<a name="generalInformations"></a>
<h3>General informations</h3><br>
<?php 

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'firstName', 'label'=>'First name'),
        array('name'=>'lastName', 'label'=>'Last name'),
        array('name'=>'email', 'label'=>'Email'),
        array('name'=>'memberTyp', 'label'=>'Member typ'),
        array('name'=>'associationMember', 'label'=>'Association member'),
        array('name'=>'adress', 'label'=>'Adress'),
        array('name'=>'zip', 'label'=>'Postal code'),
        array('name'=>'telefon', 'label'=>'Telephone'),
        array('name'=>'handy', 'label'=>'Mobil phone'),
        array('name'=>'nationality', 'label'=>'Nationality'),
        array('name'=>'birthOfDate', 'label'=>'Date of birth'),
    ),
));

 ?>


<br>

<a name="stats"></a>
<h3>Stats</h3><br>


<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'bordered',
    'data'=>array('totalWorkedTime'=>$stats['d'].' Days '.$stats['h'].' Hours '.$stats['m'].' Minutes '
    	),
    'attributes'=>array(
        array('name'=>'totalWorkedTime', 'label'=>'Total worked time'),
    ),
));

foreach($statsPerMonth as $key=>$value){

	$theValue = $value['d'].' Days '.$value['h'].' Hours '.$value['m'].' Minutes ';

	/*$this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'bordered',	
    'data'=>array($key=>$theValue),
    'attributes'=>array(
        array('name'=>$key, 'label'=>$key),
    	),
	));*/

	echo '<h4>'.$key.'</h4><em>'.$theValue.'</em><br>';

	$barType = 'info';
	$barPercent = '80';

	if($value['h'] < 4 & $value['d'] == 0){
		$barType = 'danger';	
		$barPercent = '40';
	}
	elseif($value['h'] > 8 ||  $value['d'] >= 1){
		$barType = 'success';	
		$barPercent = '100';
	}


	$this->widget('bootstrap.widgets.TbProgress', array(
    'type'=>$barType, // 'info', 'success' or 'danger'
    'percent'=>$barPercent, // the progress
    'striped'=>false,
    'animated'=>false,
));

}


?>


<br>
<a name="tasks"></a>
<h3>Tasks</h3>
<br>


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id'=>'tasks-grid',
    'type'=>'striped bordered condensed',
    'dataProvider'=>$tasks,
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






