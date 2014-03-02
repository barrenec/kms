<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-view2-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName'); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName'); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memberTyp'); ?>
		<?php echo $form->textField($model,'memberTyp'); ?>
		<?php echo $form->error($model,'memberTyp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'associationMember'); ?>
		<?php echo $form->textField($model,'associationMember'); ?>
		<?php echo $form->error($model,'associationMember'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userPassword'); ?>
		<?php echo $form->textField($model,'userPassword'); ?>
		<?php echo $form->error($model,'userPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adress'); ?>
		<?php echo $form->textField($model,'adress'); ?>
		<?php echo $form->error($model,'adress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip'); ?>
		<?php echo $form->textField($model,'zip'); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefon'); ?>
		<?php echo $form->textField($model,'telefon'); ?>
		<?php echo $form->error($model,'telefon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'handy'); ?>
		<?php echo $form->textField($model,'handy'); ?>
		<?php echo $form->error($model,'handy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality'); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthOfDate'); ?>
		<?php echo $form->textField($model,'birthOfDate'); ?>
		<?php echo $form->error($model,'birthOfDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inAssociationSince'); ?>
		<?php echo $form->textField($model,'inAssociationSince'); ?>
		<?php echo $form->error($model,'inAssociationSince'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inAssociationUntil'); ?>
		<?php echo $form->textField($model,'inAssociationUntil'); ?>
		<?php echo $form->error($model,'inAssociationUntil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desiredEntryDate'); ?>
		<?php echo $form->textField($model,'desiredEntryDate'); ?>
		<?php echo $form->error($model,'desiredEntryDate'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->