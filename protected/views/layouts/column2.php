

<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<h1>
	<?php echo Yii::app()->params['flashMessage']; ?>
</h1>


<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">

	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();	
	?>
	</div><!-- sidebar -->

	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Filters',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->searchFilters,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();	
	?>
	</div><!-- sidebar -->
	


</div>
<?php $this->endContent(); ?>