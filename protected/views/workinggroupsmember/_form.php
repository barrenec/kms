<?php
/* @var $this WorkingGroupsMemberController */
/* @var $model WorkingGroupsMembers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'working-groups-members-form',
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
		<?php echo $form->labelEx($model,'WorkingGroupId'); ?>
		<?php  echo $form->dropDownList($model, 'WorkingGroupId' 
		, CHtml::listData($workingGroups, 'id','workingGroupName'));?>
		<?php echo $form->error($model,'WorkingGroupId'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'workerInGroupActive'); ?>
		<?php echo $form->dropDownList($model,'workerInGroupActive'
		, array('1'=>'Yes','0'=>'No')); ?>
		<?php echo $form->error($model,'workerInGroupActive'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'workerInGroupSince'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'workerInGroupSince',
		    'name'=>'workerInGroupSince',
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
		<?php echo $form->error($model,'workerInGroupSince'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'workerInGroupUntil'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'workerInGroupUntil',
		    'name'=>'workerInGroupUntil',
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
		<?php echo $form->error($model,'workerInGroupUntil'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->