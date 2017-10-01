<?php
/* @var $this ReservationController */
/* @var $model Reservation */
<<<<<<< HEAD
=======

>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
<<<<<<< HEAD
	$('.ad-search-form').toggle();
	return false;
});
$('.ad-search-form form').submit(function(){
	$.fn.yiiGridView.update('reservation-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').keyup(function(){
	$.fn.yiiGridView.update('reservation-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').change(function(){
	$.fn.yiiGridView.update('reservation-grid', {
=======
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#reservation-grid').yiiGridView('update', {
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
		data: $(this).serialize()
	});
	return false;
});
");
?>

<<<<<<< HEAD
<h1>Current Reservations</h1>
<br>
<?php echo CHtml::link('<i class="fa fa-search" style="font-size: 24px;"></i>&nbsp;&nbsp;Advanced Search','#',array('class'=>'search-button', 'style'=>'font-size:16px;')); ?>
<div class="ad-search-form" style="display:none">
=======
<h1>Manage Reservations</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservation-grid',
	'dataProvider'=>$model->search(),
<<<<<<< HEAD
	//'filter'=>$model,
	'columns'=>array(
            array('name'=>'Employee', 'value'=>'$data->user->employee->Employee_Name'),
            array('name'=>'Contact', 'value'=>'$data->user->employee->Phone_Number'),
            array('name'=>'Proj', 'value'=>'!empty($data->user->project->Project_Name)?$data->user->project->Project_Name : "Not Assigned"'),
            array('name'=>'Time_ID', 'value'=>'$data->time->Time'),
            array('name'=>'Route_ID', 'value'=>'$data->route->Route_Description'),
            array('name'=>'Reason_ID', 'value'=>'$data->reason->Reason_Description'),
            'Nearest_City',
            //'Added_Date',
            array(
                'class' => 'CButtonColumn',
                'htmlOptions' => array('width'=>'90px'),
                //'deleteConfirmation'=>'Do you want to delete this record?',
                //'afterDelete'=>'function(link,success,data){if(success) $("#statusMsg").html(data); }',
                'template' => '{view}&nbsp;&nbsp;&nbsp;{delete}',
                'buttons' => array(
                    'view' => array
                    (
                        'label'=>'View Profile',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/view1.png',
                        'options'=>array('title'=>'View Profile'),
    //                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                    ),
                    'delete' => array
                    (
                        'label'=>'Delete',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/delete.png',
                        'options'=>array('title'=>'Delete'),
    //                        'visible'=>'$data->score > 0',
    //                        'click'=>'rejectRequest($data->User_ID)',
                    ),
                )
            ),
=======
	'filter'=>$model,
	'columns'=>array(
		'Reservation_ID',
		'User_ID',
		'Route_ID',
		'Time_ID',
		'Reason_ID',
		'Nearest_City',
		array(
			'class'=>'CButtonColumn',
		),
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
	),
)); ?>
