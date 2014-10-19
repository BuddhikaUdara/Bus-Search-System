<?php
/* @var $this BusController */
/* @var $model BusInformationTable */

$this->breadcrumbs=array(
	'Bus Information'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bus Information', 'url'=>array('index')),
	array('label'=>'Manage Bus Information', 'url'=>array('admin')),
);
?>

<h1>Insert new Bus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>