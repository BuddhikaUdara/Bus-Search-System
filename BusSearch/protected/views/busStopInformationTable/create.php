<?php
/* @var $this BusStopInformationTableController */
/* @var $model BusStopInformationTable */

$this->breadcrumbs=array(
	'Bus Stop Information'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bus-Stop Information', 'url'=>array('index')),
	array('label'=>'Manage Bus-Stop Information', 'url'=>array('admin')),
);
?>

<h1>Create Bus-Stop Information</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>