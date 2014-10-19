<?php
/* @var $this RouteInformationTableController */
/* @var $model RouteInformationTable */

$this->breadcrumbs=array(
	'Route Information'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Route Information', 'url'=>array('index')),
	array('label'=>'Insert new Route', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#route-information-table-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Route Information</h1>
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
	'id'=>'route-information-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'route_id',
		'area_id',
		'route_name',
		'route_code',
		'bus_id',
		'record_status',
		/*
		'last_update',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
