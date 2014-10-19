<?php
/* @var $this RouteInformationTableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Route Information',
);

$this->menu=array(
	array('label'=>'Insert new Route', 'url'=>array('create')),
	array('label'=>'Manage Route Information', 'url'=>array('admin')),
);
?>

<h1>Route Information</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
