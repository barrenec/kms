<?php
/* @var $this TasksController */
/* @var $data Tasks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->user->firstName. ' '. 
	 $data->user->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workingGroupId')); ?>:</b>
	<?php echo CHtml::encode($data->workingGroup->workingGroupName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taskHeadline')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->taskHeadline), array('/tasks/'.$data->taksId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taskDescription')); ?>:</b>
	<?php echo CHtml::encode($data->taskDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task Date Begin')); ?>:</b>
	<?php echo CHtml::encode($data->taskDateFrom); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('task Date End')); ?>:</b>
	<?php echo CHtml::encode($data->taskDateTo); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Task Duration')); ?>:</b>
	<?php echo CHtml::encode($data->taskDuration. ' '. $data->taskDurationEntity); ?>
	<br />

</div>