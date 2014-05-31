<?php
/* @var $this WorkingGroupsMemberController */
/* @var $data WorkingGroupsMembers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WorkingGroupId')); ?>:</b>
	<?php echo CHtml::encode($data->WorkingGroupId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workerInGroupActive')); ?>:</b>
	<?php echo CHtml::encode($data->workerInGroupActive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workerInGroupSince')); ?>:</b>
	<?php echo CHtml::encode($data->workerInGroupSince); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workerInGroupUntil')); ?>:</b>
	<?php echo CHtml::encode($data->workerInGroupUntil); ?>
	<br />


</div>