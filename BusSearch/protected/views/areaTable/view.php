<?php
/* @var $this AreaTableController */
/* @var $model AreaTable */

$this->breadcrumbs=array(
	'Area Information'=>array('index'),
	$model->area_id,
);

$this->menu=array(
	array('label'=>'List Area Information', 'url'=>array('index')),
	array('label'=>'Insert New Area', 'url'=>array('create')),
	array('label'=>'Update Area', 'url'=>array('update', 'id'=>$model->area_id)),
	array('label'=>'Delete Area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->area_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Area Table', 'url'=>array('admin')),
);
?>

<h1>View Area Information #<?php echo $model->area_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'area_id',
		'area_name',
		'record_status',
		'last_update',
	),
)); ?>
