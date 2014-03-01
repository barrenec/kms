<?php
/* @var $this TasksController */
/* @var $model Tasks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tasks-tasks-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workingGroupId'); ?>
		<?php echo $form->textField($model,'workingGroupId'); ?>
		<?php echo $form->error($model,'workingGroupId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taskHeadline'); ?>
		<?php echo $form->textField($model,'taskHeadline'); ?>
		<?php echo $form->error($model,'taskHeadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insertDate'); ?>
		<?php echo $form->textField($model,'insertDate'); ?>
		<?php echo $form->error($model,'insertDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taskDescription'); ?>
		<?php echo $form->textField($model,'taskDescription'); ?>
		<?php echo $form->error($model,'taskDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
		<?php echo $form->error($model,'updateDate'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->