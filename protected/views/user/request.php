<script>
    function deny(usr_id)
    {
        swal({
            title: 'Remark for Denial',
            input: 'text',
            showCancelButton: true,
            confirmButtonText: 'Deny',
            showLoaderOnConfirm: true,
            preConfirm: function (text) {
              return new Promise(function (resolve, reject) {
                setTimeout(function() {
                  if (text === '') {
                    reject('Remark cannot be empty.')
                  } else {
                    resolve()
                  }
                }, 2000)
              })
            },
            allowOutsideClick: false
          }).then(function (text) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, deny!'
              }).then(function () {
                  $.ajax({
                    url: "<?php echo CController::createUrl('AjaxDeny');?>",
                    type: 'POST',
                    async:false,
                    data: {id:usr_id, remark:text},
                    success: function (response) {
                                    swal(
                                        'Success!',
                                        'Request has been denied.',
                                        'success'
                                      ).then(function(){location.reload(); });                                
                               }
                   });   
              });
          })   
    }
    
    function accept(usr_id)
    {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Accept!'
          }).then(function () {
              $.ajax({
                url: "<?php echo CController::createUrl('AcceptRequest');?>",
                type: 'POST',
                async:false,
                data: {id:usr_id},
                success: function (response) {
                                swal(
                                    'Success!',
                                    'Request has been accepted.',
                                    'success'
                                  ).then(function(){location.reload(); });                                
                           }
               });   
          });
    }
</script>

<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Request Log', 'url'=>array('requestLog/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.ad-search-form').toggle();
	return false;
});
$('.ad-search-form form').submit(function(){
	$.fn.yiiGridView.update('request-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').keyup(function(){
	$.fn.yiiGridView.update('request-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('.ad-search-form form').change(function(){
	$.fn.yiiGridView.update('request-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sign Up Requests</h1>
<br>
<?php echo CHtml::link('<i class="fa fa-search" style="font-size: 24px;"></i>&nbsp;&nbsp;Advanced Search','#',array('class'=>'search-button', 'style'=>'font-size:16px;')); ?>
<div class="ad-search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'request-grid',
	'dataProvider'=>$model->search_request(),
	//'filter'=>$model,
	'columns'=>array(
            array('name'=>'User_ID', 'value'=>'$data->User_ID', 'htmlOptions'=>array('style'=>'display: none'), 'headerHtmlOptions'=>array('style'=>'display: none')),
            array('name'=>'Employee_ID', 'value'=>'$data->employee->Employee_Name'),
            'Username',
            array('name'=>'User_Role_ID', 'value'=>'$data->userRole->User_Role_Name'),
            array('name'=>'Project_ID', 'value'=>'!empty($data->project->Project_Name)?$data->project->Project_Name : "Not Assigned"'),

            array(
                'class' => 'CButtonColumn',
                'htmlOptions' => array('width'=>'130px'),
                //'deleteConfirmation'=>'Do you want to delete this record?',
                //'afterDelete'=>'function(link,success,data){if(success) $("#statusMsg").html(data); }',
                'template' => '{view}&nbsp;&nbsp;&nbsp;{accept}&nbsp;&nbsp;&nbsp;{deny}',
                'buttons' => array(
                    'view' => array
                    (
                        'label'=>'View Profile',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/view.png',
                        'options'=>array('title'=>'View Profile'),
//                        'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                    ),
                    'accept' => array
                    (
                        'label'=>'Accept',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/accept.png',
                        'options'=>array('title'=>'Accept Sign Up Request'),
//                        'visible'=>'$data->score > 0',
                        'click'=>'function(){accept($(this).parent().parent().children(":first-child").text())}',
                        
                    ),
                    'deny' => array
                    (
                        'label'=>'Reject',
                        'imageUrl'=>Yii::app()->theme->baseUrl.'/img/ico/decline.png',
                        'options'=>array('title'=>'Reject Sign Up Request'),
//                        'visible'=>'$data->score > 0',
                        'click'=>'function(){deny($(this).parent().parent().children(":first-child").text())}',
                    ),
                )
            ),
	),
)); ?>
