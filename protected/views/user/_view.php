<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserName')); ?>:</b>
	<?php echo CHtml::encode($data->UserName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PassWord')); ?>:</b>
	<?php echo CHtml::encode($data->PassWord); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreationDate')); ?>:</b>
	<?php echo CHtml::encode($data->CreationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastUpdate')); ?>:</b>
	<?php echo CHtml::encode($data->LastUpdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_role')); ?>:</b>
	<?php echo CHtml::encode($data->id_role); ?>
	<br />

	*/ ?>

</div>