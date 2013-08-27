<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTENT')); ?>:</b>
	<?php echo CHtml::encode($data->CONTENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SHOW_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->SHOW_TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->_CREATED); ?>
	<br />


</div>