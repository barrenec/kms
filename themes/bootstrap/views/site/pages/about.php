<?php
$this->pageCaption='About';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription="Here's what this site is all about";
$this->breadcrumbs=array(
	'About',
);

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Library'=>'#', 'Data'),
));

$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
        array('label'=>'Home', 'url'=>'#', 'active'=>true),
        array('label'=>'Profile', 'url'=>'#'),
        array('label'=>'Messages', 'url'=>'#'),
    ),));


$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'LIST HEADER'),
        array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
        array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
        array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
        array('label'=>'ANOTHER LIST HEADER'),
        array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
        array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
        array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
    ),
));

$this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Project name',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>'#', 'active'=>true),
                array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'NAV HEADER'),
                    array('label'=>'Separated link', 'url'=>'#'),
                    array('label'=>'One more separated link', 'url'=>'#'),
                )),
            ),
        ),
        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Link', 'url'=>'#'),
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),
            ),
        ),
    ),
));

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
    'attributes'=>array(
        array('name'=>'firstName', 'label'=>'First name'),
        array('name'=>'lastName', 'label'=>'Last name'),
        array('name'=>'language', 'label'=>'Language'),
    ),
));




?>
