<?php
/* @var $this BusController */
/* @var $data BusInformationTable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bus_id), array('view', 'id'=>$data->bus_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_registerd_id')); ?>:</b>
	<?php echo CHtml::encode($data->bus_registerd_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_name')); ?>:</b>
	<?php echo CHtml::encode($data->bus_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_owner')); ?>:</b>
	<?php echo CHtml::encode($data->bus_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_status')); ?>:</b>
	<?php echo CHtml::encode($data->record_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />


</div>