<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GRP_ID'); ?>
		<?php echo $form->textField($model,'GRP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MEM_NAME'); ?>
		<?php echo $form->textField($model,'MEM_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MEM_DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'MEM_DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MEM_QTY'); ?>
		<?php echo $form->textField($model,'MEM_QTY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'_CREATED'); ?>
		<?php echo $form->textField($model,'_CREATED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->