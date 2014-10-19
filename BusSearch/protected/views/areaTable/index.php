<?php
/* @var $this AreaTableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Area Information',
);

$this->menu=array(
	array('label'=>'Insert New Area', 'url'=>array('create')),
	array('label'=>'Manage Area Table', 'url'=>array('admin')),
);
?>

<h1>Area Information</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
