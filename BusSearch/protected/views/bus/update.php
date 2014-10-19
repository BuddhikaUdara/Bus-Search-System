<?php
/* @var $this BusController */
/* @var $model BusInformationTable */

$this->breadcrumbs=array(
	'Bus Information'=>array('index'),
	$model->bus_id=>array('view','id'=>$model->bus_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bus Information', 'url'=>array('index')),
	array('label'=>'Insert new Bus', 'url'=>array('create')),
	array('label'=>'View Bus Information', 'url'=>array('view', 'id'=>$model->bus_id)),
	array('label'=>'Manage Bus Information', 'url'=>array('admin')),
);
?>

<h1>Update Bus Information <?php echo $model->bus_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>