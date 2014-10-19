<?php
/* @var $this BusController */
/* @var $model BusInformationTable */

$this->breadcrumbs=array(
	'Bus Information'=>array('index'),
	$model->bus_id,
);

$this->menu=array(
	array('label'=>'List Bus Information', 'url'=>array('index')),
	array('label'=>'Insert new Bus', 'url'=>array('create')),
	array('label'=>'Update Bus Information', 'url'=>array('update', 'id'=>$model->bus_id)),
	array('label'=>'Delete Bus Information', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bus_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bus Information', 'url'=>array('admin')),
);
?>

<h1>View Bus Information #<?php echo $model->bus_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bus_id',
		'bus_registerd_id',
		'bus_name',
		'bus_owner',
		'record_status',
		'last_update',
	),
)); ?>
