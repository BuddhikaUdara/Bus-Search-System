<?php
/* @var $this RouteInformationTableController */
/* @var $data RouteInformationTable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->route_id), array('view', 'id'=>$data->route_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_id')); ?>:</b>
	<?php echo CHtml::encode($data->area_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_name')); ?>:</b>
	<?php echo CHtml::encode($data->route_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_code')); ?>:</b>
	<?php echo CHtml::encode($data->route_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_id')); ?>:</b>
	<?php echo CHtml::encode($data->bus_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_status')); ?>:</b>
	<?php echo CHtml::encode($data->record_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />


</div>