<?php
/* @var $this TasksController */
/* @var $model Tasks */
/* @var $form CActiveForm */
?>



<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php 

 echo $form->dropDownListRow(
		$model
		, 'userId' 
		, CHtml::listData($users, 'userId','UserFullName')
		,array('options' => array(Yii::app()->user->getState('userId')=>array('selected'=>true)))		
		);?>

<?php  echo $form->dropDownListRow($model, 'workingGroupId' 
		, CHtml::listData($workingGroups, 'id','workingGroupName'));?>

<?php echo $form->textFieldRow($model,'taskHeadline',array('class'=>'span6','maxlength'=>350)); ?>

<?php echo $form->textAreaRow($model,'taskDescription',array('class'=>'span6')); ?>


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


<?php echo $form->textFieldRow($model,'taskDuration', array('class'=>'span4')); ?>


<?php echo $form->dropDownList($model,'taskDurationEntity'
		, array(
				'm'=>'minutes',
				 'h'=>'hours',
				 'd'=>'days'

				 )
			 ); ?>
<br><br>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Create task')); ?>

 
<?php $this->endWidget(); ?>

