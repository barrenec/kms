<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-create-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'memberTyp'); ?>
		<?php echo $form->dropDownList($model,'memberTyp'
		, array(''=>'Select Person typ',
				'Parent'=>'Parent',
				 'Child'=>'Child',
				 'Supporter'=>'Supporter',
				 'Parent waiting'=>'Parent waiting',
				 'Child waiting'=>'Child waiting')
			 ); ?>
		<?php echo $form->error($model,'memberTyp'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'memberTyp'); ?>
		<?php echo $form->dropDownList($model,'memberTyp'
		, array(''=>'Select Person typ',
				'Parent'=>'Parent',
				 'Child'=>'Child',
				 'Supporter'=>'Supporter',
				 'Parent waiting'=>'Parent waiting',
				 'Child waiting'=>'Child waiting')
			 ); ?>
		<?php echo $form->error($model,'memberTyp'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender'
		, array(''=>'Select person gender',
				'M'=>'Male',
				 'F'=>'Female'
				 )
			 ); ?>
		<?php echo $form->error($model,'memberTyp'); ?>
	</div>
	
	
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


	<?php  ?>

	<div class="row">
		<?php echo $form->labelEx($model,'associationMember'); ?>
		<?php echo $form->dropDownList($model,'associationMember'
		, array(''=>'Select member typ',
				'0'=>'No member',
				 '1'=>'Ordinary member',
				 '2'=>'Founder'
				 )
			 ); ?>
		<?php echo $form->error($model,'associationMember'); ?>
	</div>
	 
	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php  echo $form->dropDownList($model, 'nationality' 
		, CHtml::listData($countries, 'code','de')
		, array('options' => array('DE' =>array('selected'=>true)),	
		));?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nationality2'); ?>
		<?php  echo $form->dropDownList($model, 'nationality2' 
		, CHtml::listData($countries, 'code','de')
		, array('prompt' => 'Select a second nationality if needed', 'options' => array('' =>array('selected'=>true)),	
		));?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>
	
	<div class="row">
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
		<?php echo $form->error($model,'inAssociationSince'); ?>
	</div>
	
	
	<div class="row">
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
		
		<?php echo $form->error($model,'inAssociationUntil'); ?>
	</div>
	
	<div class="row">
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
		
		<?php echo $form->error($model,'desiredEntryDate'); ?>
	</div>
	
		
	<br/> <br/>
	

	<div class="row">
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
		<?php echo $form->error($model,'birthOfDate'); ?>
	</div>
	
	<hr>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'userPassword'); ?>
		<?php echo $form->passwordField($model,'userPassword'); ?>
		<?php echo $form->error($model,'userPassword'); ?>
	</div>
	
	<hr>
	
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
		<?php echo $form->labelEx($model,'City'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
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


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->