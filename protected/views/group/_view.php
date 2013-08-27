<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GRP_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->GRP_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GRP_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->GRP_DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->_CREATED); ?>
	<br />


</div>