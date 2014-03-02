<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Library'=>'#', 'Data'),
)); ?>
