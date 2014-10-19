<?php
/* @var $this BusStopInformationTableController */
/* @var $model BusStopInformationTable */

$this->breadcrumbs=array(
	'Bus Stop Information'=>array('index'),
	$model->bus_stop_id,
);

$this->menu=array(
	array('label'=>'List Bus-Stop Information', 'url'=>array('index')),
	array('label'=>'Insert new Bus-Stop', 'url'=>array('create')),
	array('label'=>'Update Bus-Stop Information', 'url'=>array('update', 'id'=>$model->bus_stop_id)),
	array('label'=>'Delete Bus-Stop', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bus_stop_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bus-Stop Information', 'url'=>array('admin')),
);
?>

<h1>View Bus-Stop Information #<?php echo $model->bus_stop_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bus_stop_id',
		'route_code',
		'bus_id',
		'bus_stop_name',
		'arrival_time',
		'record_status',
		'last_update',
	),
)); ?>
