<?php
/* @var $this AreaTableController */
/* @var $data AreaTable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->area_id), array('view', 'id'=>$data->area_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_name')); ?>:</b>
	<?php echo CHtml::encode($data->area_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_status')); ?>:</b>
	<?php echo CHtml::encode($data->record_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />


</div>