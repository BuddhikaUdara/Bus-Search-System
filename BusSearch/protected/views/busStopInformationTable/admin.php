<?php
/* @var $this BusStopInformationTableController */
/* @var $model BusStopInformationTable */

$this->breadcrumbs=array(
	'Bus Stop Information'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bus-Stop Information', 'url'=>array('index')),
	array('label'=>'Insert new Bus-Stop', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bus-stop-information-table-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bus-Stop Information</h1>
</br>
</br>
<p>

</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bus-stop-information-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'bus_stop_id',
		'route_code',
		'bus_id',
		'bus_stop_name',
		'arrival_time',
		'record_status',
		/*
		'last_update',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
