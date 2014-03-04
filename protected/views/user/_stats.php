<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'bordered',
    'data'=>array('totalWorkedTime'=>$stats['d'].' Days '.$stats['h'].' Hours '.$stats['m'].' Minutes '
    	),
    'attributes'=>array(
        array('name'=>'totalWorkedTime', 'label'=>'Total worked time'),
    ),
));

foreach($statsPerMonth as $key=>$value){

	$theValue = $value['d'].' Days '.$value['h'].' Hours '.$value['m'].' Minutes ';

	/*$this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'bordered',	
    'data'=>array($key=>$theValue),
    'attributes'=>array(
        array('name'=>$key, 'label'=>$key),
    	),
	));*/

	echo '<h4>'.$key.'</h4><em>'.$theValue.'</em><br>';

	$barType = 'info';
	$barPercent = '80';

	if($value['h'] < 4 & $value['d'] == 0){
		$barType = 'danger';	
		$barPercent = '40';
	}
	elseif($value['h'] > 8 ||  $value['d'] >= 1){
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