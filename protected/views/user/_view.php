<?php
/* @var $this UserController */
/* @var $data Users */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->firstName).' '.CHtml::encode($data->lastName)
	, array('view', 'id'=>$data->userId));?>
	<br />

	<?php echo CHtml::encode($data->email); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('memberTyp')); ?>:</b>
	<?php echo CHtml::encode($data->memberTyp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('associationMember')); ?>:</b>
	<?php echo CHtml::encode($data->associationMember); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('birthOfDate')); ?>:</b>
	<?php echo CHtml::encode($data->birthOfDate); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('insertDate')); ?>:</b>
	<?php echo CHtml::encode($data->insertDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adress')); ?>:</b>
	<?php echo CHtml::encode($data->adress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefon')); ?>:</b>
	<?php echo CHtml::encode($data->telefon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handy')); ?>:</b>
	<?php echo CHtml::encode($data->handy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality')); ?>:</b>
	<?php echo CHtml::encode($data->nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthOfDate')); ?>:</b>
	<?php echo CHtml::encode($data->birthOfDate); ?>
	<br />

	*/ ?>

</div>