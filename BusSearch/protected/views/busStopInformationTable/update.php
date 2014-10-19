<?php
/* @var $this BusStopInformationTableController */
/* @var $model BusStopInformationTable */

$this->breadcrumbs=array(
	'Bus Stop Information'=>array('index'),
	$model->bus_stop_id=>array('view','id'=>$model->bus_stop_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bus-Stop Information', 'url'=>array('index')),
	array('label'=>'Insert new Bus-Stop', 'url'=>array('create')),
	array('label'=>'View Bus-Stop Information', 'url'=>array('view', 'id'=>$model->bus_stop_id)),
	array('label'=>'Manage Bus-Stop Information', 'url'=>array('admin')),
);
?>

<h1>Update Bus-Stop Information <?php echo $model->bus_stop_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>