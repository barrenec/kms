<?php

$helper = new Helpers;

$this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'bordered',
    'data'=>array('totalWorkedTime'=>$helper->formatWorkingTime($stats['totalWorkingTime'])),
    'attributes'=>array(
        array('name'=>'totalWorkedTime', 'label'=>'Total worked time'),
    	),
	));

$stats = array_slice($stats, 1);

foreach($stats as $key=>$value){
	
	echo '<h4>'.$key.'</h4><em>'.$helper->formatWorkingTime($value).'</em><br>';
	
	// minimun required worked time
	$hundertPercent = 240;
	$moreThanEnough = 480;
	
	$barType = 'info';
	$barPercent = '90';

	if($value < $hundertPercent){
		$barType = 'danger';	
		$barPercent = ($value*100)/$hundertPercent;
	}
	elseif($value > $moreThanEnough){
		$barType = 'success';	
		$barPercent = '100';
	}

	$this->widget('bootstrap.widgets.TbProgress', array(
    'type'=>$barType, // 'info', 'success' or 'danger'
    'percent'=>$barPercent, // the progress
    'striped'=>false,
    'animated'=>false,
	));
}

?>