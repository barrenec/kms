<?php
/* @var $this TasksController */
/* @var $model Tasks */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'taksId'); ?>
		<?php echo $form->textField($model,'taksId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workingGroupId'); ?>
		<?php echo $form->textField($model,'workingGroupId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taskHeadline'); ?>
		<?php echo $form->textField($model,'taskHeadline',array('size'=>60,'maxlength'=>350)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taskDescription'); ?>
		<?php echo $form->textArea($model,'taskDescription',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insertDate'); ?>
		<?php echo $form->textField($model,'insertDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateDate'); ?>
		<?php echo $form->textField($model,'updateDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taskDuration'); ?>
		<?php echo $form->textField($model,'taskDuration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taskDurationEntity'); ?>
		<?php echo $form->textField($model,'taskDurationEntity',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->