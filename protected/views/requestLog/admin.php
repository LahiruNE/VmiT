<script>
    function ReqDelete(req_id)
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
                data: {id:req_id},
                success: function (response) {
                                swal(
                                    'Deleted!',
                                    'Sign up request has been deleted.',
                                    'success'
                                  ).then(function(){location.reload(); });                                
                           }
               });   
          });
    }
</script>

<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */

$this->breadcrumbs=array(
	'Request Logs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Sign Up Requests', 'url'=>array('user/regRequest')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.ad-search-form').toggle();
	return false;
});
$('.ad-search-form form').submit(function(){
	$.fn.yiiGridView.update('request-log-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').keyup(function(){
	$.fn.yiiGridView.update('request-log-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').change(function(){
	$.fn.yiiGridView.update('request-log-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sign up Request History Log</h1>
<br>
<?php echo CHtml::link('<i class="fa fa-search" style="font-size: 24px;"></i>&nbsp;&nbsp;Advanced Search','#',array('class'=>'search-button', 'style'=>'font-size:16px;')); ?>
<div class="ad-search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'request-log-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
                array('name'=>'Request_Log_ID', 'value'=>'$data->Request_Log_ID', 'htmlOptions'=>array('style'=>'display: none'), 'headerHtmlOptions'=>array('style'=>'display: none')),
		array('name'=>'Employee_ID', 'value'=>'$data->employee->Employee_Name'),
                'Username',
                array('name'=>'User_Role_ID', 'value'=>'$data->userRole->User_Role_Name'),
                array('name'=>'Project_ID', 'value'=>'!empty($data->project->Project_Name)?$data->project->Project_Name : "Not Assigned"'),            
		array('name'=>'Status', 'value'=>'$data->Status==0?"Denied":"Approved"'),
                'Remark',
                'Done_Date',
		
		array(
                'class' => 'CButtonColumn',
                'htmlOptions' => array('width'=>'130px'),
                //'deleteConfirmation'=>'Do you want to delete this record?',
                //'afterDelete'=>'function(link,success,data){if(success) $("#statusMsg").html(data); }',
                'template' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{view}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{del}',
                'buttons' => array(
                    'view' => array
                    (
                        'label'=>'View Profile',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/view1.png',
                        'options'=>array('title'=>'View Profile'),
//                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                    ),
                    'del' => array
                    (
                        'label'=>'Delete',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/delete.png',
                        'options'=>array('title'=>'Delete'),
//                        'visible'=>'$data->score > 0',
                        'click'=>'function(){ReqDelete($(this).parent().parent().children(":first-child").text())}',
                    ),
                )
            ),
	),
)); ?>
