<?php
/* @var $this WorkingGroupController */
/* @var $model WorkingGroups */
/* @var $form CActiveForm */
?>

<div class="form">

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'workingGroupName', array('class'=>'span6')); ?>
<?php echo $form->textAreaRow($model, 'workingGroupDescription', array('class'=>'span6')); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Create working group')); ?>

 
<?php $this->endWidget(); ?>

</div>



	