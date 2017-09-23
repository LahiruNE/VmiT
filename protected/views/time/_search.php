<?php
/* @var $this TimeController */
/* @var $model Time */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
            <?php echo $form->label($model,'Time'); ?>
            <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                $this->widget('CJuiDateTimePicker',array(
                    'model'=>$model, //Model object
                    'attribute'=>'Time', //attribute name
                    'mode'=>'time', //use "time","date" or "datetime" (default)                        
                    'options'=>array(
                        'hourMax'=>'24',
                        'minuteMax'=>'60',
                    ) // jquery plugin options
                ));
            ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->