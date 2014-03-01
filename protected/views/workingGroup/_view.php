<?php
/* @var $this WorkingGroupController */
/* @var $data WorkingGroups */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->workingGroupName), array('view', 'id'=>$data->id)); ?>
	<br />
	<em><?php echo CHtml::encode($data->workingGroupDescription); ?></em>
	<br />
</div>