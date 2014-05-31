
<h4>Forgot Your Password?</h4>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'					=> 'forgot-form',
			'focus'					=> 'input[type="text"]:first',
			'enableAjaxValidation'	=>	true
		)); ?>

<div>
<?php echo CHtml::textField('email', isset($_POST['email']) ? $_POST['email'] : '', array('placeholder'=>Yii::t('bootstrap', 'Your email address (you@example.com)'))); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'buttonType' => 'submit',
    'type' => 'success',
    'label' => 'Submit',
    'htmlOptions' => array(
    'id' => 'forgot')
)); ?>
</div>


<div>
	<?php echo CHtml::link(Yii::t('bootstrap', 'login'), Yii::app()->createUrl('/login'), array('class' => 'login-form-links')); ?>
</div>

<?php $this->endWidget(); ?>


