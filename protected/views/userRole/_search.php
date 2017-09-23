<?php
/* @var $this UserRoleController */
/* @var $model UserRole */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row">
		<?php echo $form->label($model,'User_Role_Name'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'User_Role_Name',
                    'data' =>CHtml::listData(UserRole::model()->findAll(), 'User_Role_Name', 'User_Role_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'style' => 'width:210px',   
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                ));                 
                ?> 
	</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->