<?php
/* @var $this AreaTableController */
/* @var $model AreaTable */

$this->breadcrumbs=array(
	'Area Information'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Area Information', 'url'=>array('index')),
	array('label'=>'Insert New Area', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#area-table-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Area Information</h1>
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
	'id'=>'area-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'area_id',
		'area_name',
		'record_status',
		'last_update',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
