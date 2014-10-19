<?php
/* @var $this BusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bus Information',
);

$this->menu=array(
	array('label'=>'Insert new Bus', 'url'=>array('create')),
	array('label'=>'Manage Bus Information', 'url'=>array('admin')),
);
?>

<h1>Bus Information</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
