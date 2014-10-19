<?php
/* @var $this BusController */
/* @var $model BusInformationTable */

$this->breadcrumbs=array(
	'Bus Information'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bus Information', 'url'=>array('index')),
	array('label'=>'Insert new Bus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bus-information-table-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bus Information</h1>
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
	'id'=>'bus-information-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'bus_id',
		'bus_registerd_id',
		'bus_name',
		'bus_owner',
		'record_status',
		'last_update',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
