<?php
/* @var $this AreaTableController */
/* @var $model AreaTable */

$this->breadcrumbs=array(
	'Area Information'=>array('index'),
	$model->area_id=>array('view','id'=>$model->area_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Area Information', 'url'=>array('index')),
	array('label'=>'Insert New Area', 'url'=>array('create')),
	array('label'=>'View Area', 'url'=>array('view', 'id'=>$model->area_id)),
	array('label'=>'Manage Area Table', 'url'=>array('admin')),
);
?>

<h1>Update Area Information <?php echo $model->area_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>