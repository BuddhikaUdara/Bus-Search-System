<?php
/* @var $this RouteInformationTableController */
/* @var $model RouteInformationTable */

$this->breadcrumbs=array(
	'Route Information'=>array('index'),
	$model->route_id=>array('view','id'=>$model->route_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Route Information', 'url'=>array('index')),
	array('label'=>'Insert new Route', 'url'=>array('create')),
	array('label'=>'View Route Information', 'url'=>array('view', 'id'=>$model->route_id)),
	array('label'=>'Manage Route Information', 'url'=>array('admin')),
);
?>

<h1>Update Route Information<?php echo $model->route_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>