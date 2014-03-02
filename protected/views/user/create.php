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
 
 <?php echo $form->textFieldRow($model, 'firstName', array('class'=>'span3')); ?>
 <?php echo $form->textFieldRow($model, 'lastName', array('class'=>'span3')); ?>
 <?php echo $form->textFieldRow($model, 'memberTyp', array('class'=>'span3')); ?>
 <?php echo $form->textFieldRow($model, 'associationMember', array('class'=>'span3')); ?>
 <?php echo $form->textFieldRow($model, 'gender', array('class'=>'span3')); ?>
 <?php echo $form->textFieldRow($model, 'email', array('class'=>'span3')); ?>
 <?php echo $form->passwordFieldRow($model, 'userPassword', array('class'=>'span3')); ?>

<?php echo $form->textFieldRow($model, 'adress', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'zip', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'telefon', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'handy', array('class'=>'span3')); ?>

<?php echo $form->textFieldRow($model, 'nationality', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'birthOfDate', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'inAssociationSince', array('class'=>'span3')); ?>


<?php echo $form->textFieldRow($model, 'inAssociationUntil', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'desiredEntryDate', array('class'=>'span3')); ?>

<hr>

<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Create user')); ?>

 
<?php $this->endWidget(); ?>


