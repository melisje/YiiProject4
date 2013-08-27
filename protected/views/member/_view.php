<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GRP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->GRP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MEM_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->MEM_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MEM_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->MEM_DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MEM_QTY')); ?>:</b>
	<?php echo CHtml::encode($data->MEM_QTY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('_CREATED')); ?>:</b>
	<?php echo CHtml::encode($data->_CREATED); ?>
	<br />


</div>