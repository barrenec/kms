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

<h1>User: <?php echo $userName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userId',
		'firstName',
		'lastName',
		'email',
		'userPassword',
		'memberTyp',
		'associationMember',
		'insertDate',
		'adress',
		'zip',
		'telefon',
		'handy',
		'nationality',
		'birthOfDate',
	),
)); ?>


<br><br>
<h1>Stats</h1>

<b>Total worked time:</b> 
<?php echo $stats['d'];?> Days
<?php echo $stats['h'];?> Hours
<?php echo $stats['m'];?> Minutes

<br><br>
<b>Worked time per Month:</b>
<br>
<?php foreach($statsPerMonth as $key=>$value): ?>
	
	<?php echo $key.': '.$value['d'].' Days'?>
	<?php echo $value['h'].' Hours'?>
	<?php echo $value['m'].' Minutes'?>
	<br>
 <?php endforeach; ?>



<br><br>

<h1>Tasks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$tasks,
	'itemView'=>'/tasks/_view',
)); ?>





