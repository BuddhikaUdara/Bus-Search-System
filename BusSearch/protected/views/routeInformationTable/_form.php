<?php
/* @var $this RouteInformationTableController */
/* @var $model RouteInformationTable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'route-information-table-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'area_id'); ?>
		<?php echo $form->textField($model,'area_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_name'); ?>
		<?php echo $form->textField($model,'route_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'route_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_code'); ?>
		<?php echo $form->textField($model,'route_code',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'route_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'record_status'); ?>
		<?php echo $form->textField($model,'record_status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'record_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->