<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 

 <?php echo $form->errorSummary($model); ?>



<?php echo $form->dropDownListRow($model,'memberTyp'
		, array(''=>'Select Person typ',
				'Parent'=>'Parent',
				 'Child'=>'Child',
				 'Supporter'=>'Supporter',
				 'Parent waiting'=>'Parent waiting',
				 'Child waiting'=>'Child waiting')
		,array('class'=>'span4')
			 ); ?>

<?php echo $form->dropDownListRow($model,'associationMember'
		, array(''=>'Select member typ',
				'0'=>'No member',
				 '1'=>'Ordinary member',
				 '2'=>'Founder'
				 )
				,array('class'=>'span4')

			 ); ?>


<hr class="soften"></hr>

<legend>Personal data</legend>

<?php echo $form->dropDownListRow($model,'gender'
		, array(''=>'Select person gender',
				'M'=>'Male',
				 'F'=>'Female'
				 )
		,array('class'=>'span4')		
			 ); ?>

<?php echo $form->textFieldRow($model, 'firstName', array('class'=>'span6')); ?>
<?php echo $form->textFieldRow($model, 'lastName', array('class'=>'span6')); ?>
<?php echo $form->textFieldRow($model, 'adress', array('class'=>'span6')); ?>
<?php echo $form->textFieldRow($model, 'zip', array('class'=>'span6')); ?>
<?php echo $form->textFieldRow($model, 'telefon', array('class'=>'span6')); ?>
<?php echo $form->textFieldRow($model, 'handy', array('class'=>'span6')); ?>

<br><br>


<?php  echo $form->dropDownListRow($model, 'nationality' 
		, CHtml::listData($countries, 'code','de')
		, array('class'=>'span4', 'options' => array('DE' =>array('selected'=>true)))	
);?>

<?php  echo $form->dropDownListRow($model, 'nationality2' 
		, CHtml::listData($countries, 'code','de')
		, array('class'=>'span4', 'options' => array('DE' =>array('selected'=>true)))	
);?>


<?php echo $form->labelEx($model,'birthOfDate'); ?>
<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'birthOfDate',
		    'name'=>'birthOfDate',
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


<hr class="soften"></hr>

<legend>Account data</legend> 
<?php echo $form->textFieldRow($model, 'email', array('class'=>'span6')); ?>
<?php echo $form->passwordFieldRow($model, 'userPassword', array('class'=>'span6')); ?>

<br><br>
<legend>Membership data</legend>

<?php echo $form->labelEx($model,'inAssociationSince'); ?>
<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'inAssociationSince',
		    'name'=>'inAssociationSince',
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

<?php echo $form->labelEx($model,'inAssociationUntil'); ?>
<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'inAssociationUntil',
		    'name'=>'inAssociationUntil',
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


<?php echo $form->labelEx($model,'desiredEntryDate'); ?>
<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'desiredEntryDate',
		    'name'=>'desiredEntryDate',
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



<hr>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Create user')); ?>

 
<?php $this->endWidget(); ?>


