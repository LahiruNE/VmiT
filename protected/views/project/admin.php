<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Add Projects', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.ad-search-form').toggle();
	return false;
});
$('.ad-search-form form').submit(function(){
	$.fn.yiiGridView.update('project-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').keyup(function(){
	$.fn.yiiGridView.update('project-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').change(function(){
	$.fn.yiiGridView.update('project-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>



<h1>Manage Projects</h1>
<br>
<?php echo CHtml::link('<i class="fa fa-search" style="font-size: 24px;"></i>&nbsp;&nbsp;Advanced Search','#',array('class'=>'search-button', 'style'=>'font-size:16px;')); ?>
<div class="ad-search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'project-grid',
    'dataProvider'=>$model->search(),
    //'filter'=>$model,
    'columns'=>array(
        'Project_ID',
        'Project_Name',
        'Start_Date',
        'End_Date',
        array('name'=>'Status', 'value'=>'$data->Status==0?"Ongoing":"Completed"'),
        array(
            'class' => 'CButtonColumn',
            'htmlOptions' => array('width'=>'130px'),
            //'deleteConfirmation'=>'Do you want to delete this record?',
            //'afterDelete'=>'function(link,success,data){if(success) $("#statusMsg").html(data); }',
            'template' => '{view}&nbsp;&nbsp;&nbsp;{update}&nbsp;&nbsp;&nbsp;{delete}',
            'buttons' => array(
                'view' => array
                (
                    'label'=>'View Profile',
                    'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/view1.png',
                    'options'=>array('title'=>'View Profile'),
//                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                ),
                'update' => array
                (
                    'label'=>'Edit',
                    'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/edit.png',
                    'options'=>array('title'=>'Edit'),
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
    ),
)); ?>
