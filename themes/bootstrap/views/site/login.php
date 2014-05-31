<?php
$this->pageCaption='Login';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription="You've been here before, haven't you?";
$this->breadcrumbs=array(
	'Login',
);
?>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('BActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php $this->widget('BAlert',array(
		'content'=>'<p>Fields with <span class="required">*</span> are required.</p>',
	)); ?>

	<div class="<?php echo $form->fieldClass($model, 'username'); ?>">
		<?php echo $form->labelEx($model,'username'); ?>
		<div class="controls">
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
	</div>

	<div class="<?php echo $form->fieldClass($model, 'password'); ?>">
		<?php echo $form->labelEx($model,'password'); ?>
		<div class="controls">
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="<?php echo $form->fieldClass($model, 'verifyCode'); ?>">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div class="controls">
			<?php $this->widget('CCaptcha'); ?><br/>
			<?php echo $form->textField($model,'verifyCode'); ?>
			<?php echo $form->error($model,'verifyCode'); ?>
			<p class="help-block">
				Please enter the letters as they are shown in the image above.
				<br/>Letters are not case-sensitive.
			</p>
		</div>
	</div>
		
	<?php endif; ?>

	<div class="form-actions">
		<?php echo BHtml::submitButton('Login'); ?>	
	</div>
	
	<hr>
	<div class="controls">
		<?php echo CHtml::link(Yii::t('Bootstrap', 'Forgot Login'), Yii::app()->createUrl('site/forgot'), array('class' => 'login-form-links')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
