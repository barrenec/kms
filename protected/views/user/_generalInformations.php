<?php 

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'firstName', 'label'=>'First name'),
        array('name'=>'lastName', 'label'=>'Last name'),
        array('name'=>'email', 'label'=>'Email'),
        array('name'=>'memberTyp', 'label'=>'Member typ'),
        array('name'=>'associationMember', 'label'=>'Association member'),
        array('name'=>'adress', 'label'=>'Adress'),
        array('name'=>'zip', 'label'=>'Postal code'),
        array('name'=>'telefon', 'label'=>'Telephone'),
        array('name'=>'handy', 'label'=>'Mobil phone'),
        array('name'=>'nationality', 'label'=>'Nationality'),
        array('name'=>'birthOfDate', 'label'=>'Date of birth'),
    ),
));

 ?>