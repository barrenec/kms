<?php
/* @var $this TasksController */
/* @var $model Tasks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tasks-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php  echo $form->dropDownList($model, 'userId' 
		, CHtml::listData($users, 'userId','UserFullName'));?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workingGroupId'); ?>
		<?php  echo $form->dropDownList($model, 'workingGroupId' 
		, CHtml::listData($workingGroups, 'id','workingGroupName'));?>
		<?php echo $form->error($model,'WorkingGroupId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taskHeadline'); ?>
		<?php echo $form->textField($model,'taskHeadline',array('size'=>60,'maxlength'=>350)); ?>
		<?php echo $form->error($model,'taskHeadline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taskDescription'); ?>
		<?php echo $form->textArea($model,'taskDescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'taskDescription'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'taskDateFrom'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'taskDateFrom',
		    'name'=>'taskDateFrom',
		    // additional javascript options for the date picker plugin
			'model'=>$model,
		    'options'=>array(
		     'showAnim'=>'fold',
			 'changeYear'=>true,
			 'dateFormat'=>'yy-mm-dd',
		    ),
		    'htmlOptions'=>array(),
		));
		?>
		<?php echo $form->error($model,'taskDateFrom'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'taskDateTo'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'taskDateTo',
		    'name'=>'taskDateTo',
		    // additional javascript options for the date picker plugin
			'model'=>$model,
		    'options'=>array(
		     'showAnim'=>'fold',
			 'changeYear'=>true,
			 'dateFormat'=>'yy-mm-dd',
		    ),
		    'htmlOptions'=>array(),
		));
		?>
		<?php echo $form->error($model,'taskDateTo'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'taskDuration'); ?>
		<?php echo $form->textField($model,'taskDuration'); ?>
		<?php echo $form->error($model,'taskDuration'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'taskDurationEntity'); ?>
		<?php echo $form->dropDownList($model,'taskDurationEntity'
		, array(
				'm'=>'minutes',
				 'h'=>'hours',
				 'd'=>'days'
				 )
			 ); ?>
		<?php echo $form->error($model,'associationMember'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->