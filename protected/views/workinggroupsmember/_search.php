<?php
/* @var $this WorkingGroupsMemberController */
/* @var $model WorkingGroupsMembers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WorkingGroupId'); ?>
		<?php echo $form->textField($model,'WorkingGroupId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workerInGroupActive'); ?>
		<?php echo $form->textField($model,'workerInGroupActive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workerInGroupSince'); ?>
		<?php echo $form->textField($model,'workerInGroupSince'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workerInGroupUntil'); ?>
		<?php echo $form->textField($model,'workerInGroupUntil'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->