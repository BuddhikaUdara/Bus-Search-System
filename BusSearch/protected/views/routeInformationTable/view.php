<?php
/* @var $this RouteInformationTableController */
/* @var $model RouteInformationTable */

$this->breadcrumbs=array(
	'Route Information'=>array('index'),
	$model->route_id,
);

$this->menu=array(
	array('label'=>'List Route Information', 'url'=>array('index')),
	array('label'=>'Insert new Route', 'url'=>array('create')),
	array('label'=>'Update Route Information', 'url'=>array('update', 'id'=>$model->route_id)),
	array('label'=>'Delete Route', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->route_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>View Route Information #<?php echo $model->route_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'route_id',
		'area_id',
		'route_name',
		'route_code',
		'bus_id',
		'record_status',
		'last_update',
	),
)); ?>
