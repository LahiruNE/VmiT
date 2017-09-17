<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Add New Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.search-form form').keyup(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.search-form form').change(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array('name'=>'Employee_ID', 'value'=>'$data->employee->Employee_Name'),
                'Username',
                array('name'=>'User_Role_ID', 'value'=>'$data->userRole->User_Role_Name'),
                array('name'=>'Project_ID', 'value'=>'$data->project->Project_Name'),
		/*
		'Is_Approved',
		*/
		array(
                    'class' => 'CButtonColumn',
                    'deleteConfirmation'=>'Do you want to delete this record?',
                    'afterDelete'=>'function(link,success,data){if(success) $("#statusMsg").html(data); }',
                    'template' => '{view}{update}{delete}',
                    'buttons' => array(
                        'update' => array(
                            //'options'=>array('target'=>'_blank'),
                        ),
                        'view' => array(
                            //'options' => array('target' => '_blank')
                        )
                    )
                ),
	),
)); ?>
