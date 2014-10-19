<?php
/* @var $this BusStopInformationTableController */
/* @var $data BusStopInformationTable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_stop_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bus_stop_id), array('view', 'id'=>$data->bus_stop_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_code')); ?>:</b>
	<?php echo CHtml::encode($data->route_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_id')); ?>:</b>
	<?php echo CHtml::encode($data->bus_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_stop_name')); ?>:</b>
	<?php echo CHtml::encode($data->bus_stop_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrival_time')); ?>:</b>
	<?php echo CHtml::encode($data->arrival_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_status')); ?>:</b>
	<?php echo CHtml::encode($data->record_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />


</div>