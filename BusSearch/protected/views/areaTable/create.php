<?php
/* @var $this AreaTableController */
/* @var $model AreaTable */

$this->breadcrumbs=array(
	'Area Information'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Area Information', 'url'=>array('index')),
	array('label'=>'Manage Area Table', 'url'=>array('admin')),
);
?>

<h1>Insert new Area</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>