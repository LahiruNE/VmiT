<script>
    function userDelete(id)
    {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then(function () {
              $.ajax({
                url: "<?php echo CController::createUrl('AjaxDelete');?>",
                type: 'POST',
                async:false,
                data: {id:id},
                success: function (response) {
                                if(response==0)
                                {
                                    swal(
                                        'Error!',
                                        'Unable to delete. This Schedule ID is currently in use',
                                        'error'
                                      );
                                    
                                }
                                else
                                {
                                    swal(
                                        'Deleted!',
                                        'Schedule has been deleted.',
                                        'success'
                                      ).then(function(){location.reload(); });
                                }                               
                           }
               });   
          });
    }
</script>

<?php
/* @var $this TimeController */
/* @var $model Time */

$this->breadcrumbs=array(
	'Times'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Add Schedules', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.ad-search-form').toggle();
	return false;
});
$('.ad-search-form form').submit(function(){
	$.fn.yiiGridView.update('time-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').keyup(function(){
	$.fn.yiiGridView.update('time-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').change(function(){
	$.fn.yiiGridView.update('time-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Schedules</h1>
<br>
<?php echo CHtml::link('<i class="fa fa-search" style="font-size: 24px;"></i>&nbsp;&nbsp;Advanced Search','#',array('class'=>'search-button', 'style'=>'font-size:16px;')); ?>
<div class="ad-search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'time-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
            'Time_ID',
            'Time',
            array(
                'class' => 'CButtonColumn',
                'htmlOptions' => array('width'=>'130px'),
                //'deleteConfirmation'=>'Do you want to delete this record?',
                //'afterDelete'=>'function(link,success,data){if(success) $("#statusMsg").html(data); }',
                'template' => '{view}&nbsp;&nbsp;&nbsp;{update}&nbsp;&nbsp;&nbsp;{del}',
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
                    'del' => array
                    (
                        'label'=>'Delete',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/delete.png',
                        'options'=>array('title'=>'Delete'),
    //                        'visible'=>'$data->score > 0',
                        'click'=>'function(){userDelete($(this).parent().parent().children(":first-child").text())}',
                    ),
                )
            ),
	),
)); ?>
