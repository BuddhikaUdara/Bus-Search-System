<?php
/* @var $this BusStopInformationTableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bus Stop Information',
);

$this->menu=array(
	array('label'=>'Insert new Bus-Stop', 'url'=>array('create')),
	array('label'=>'Manage Bus-Stop Information', 'url'=>array('admin')),
);
?>

<h1>Bus-Stop Information</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
