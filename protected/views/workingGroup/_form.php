<?php
/* @var $this WorkingGroupController */
/* @var $model WorkingGroups */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'working-groups-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'workingGroupName'); ?>
		<?php echo $form->textField($model,'workingGroupName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'workingGroupName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workingGroupDescription'); ?>
		<?php echo $form->textField($model,'workingGroupDescription',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'workingGroupDescription'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->