<?php
/* @var $this GroupController */
/* @var $model Group */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'group-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GRP_NAME'); ?>
		<?php echo $form->textField($model,'GRP_NAME',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GRP_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GRP_DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'GRP_DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'GRP_DESCRIPTION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'_CREATED'); ?>
		<?php echo $form->textField($model,'_CREATED'); ?>
		<?php echo $form->error($model,'_CREATED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->