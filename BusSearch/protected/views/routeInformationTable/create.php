<?php
/* @var $this RouteInformationTableController */
/* @var $model RouteInformationTable */

$this->breadcrumbs=array(
	'Route Information'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Route Information', 'url'=>array('index')),
	array('label'=>'Manage Route Information', 'url'=>array('admin')),
);
?>

<h1>Insert new Route</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>