<script>
    function ProjDelete()
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
                data: {id:<?php echo $model->Project_ID; ?>},
                success: function (response) {
                                if(response==0)
                                {
                                    swal(
                                        'Error!',
                                        'Unable to delete. This project ID is currently in use',
                                        'error'
                                      );
                                    
                                }
                                else
                                {
                                    swal(
                                        'Deleted!',
                                        'Project has been deleted.',
                                        'success'
                                      ).then(function(){window.location = <?php echo Yii::app()->getBaseUrl()?>"/index.php?r=project/admin"; });
                                }                               
                           }
               });   
          });
    }
</script>

<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->Project_ID,
);

$this->menu=array(
	array('label'=>'Add Projects', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->Project_ID)),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>View Project #<?php echo $model->Project_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            'Project_ID',
            'Project_Name',
            'Start_Date',
            'End_Date',
            array('name'=>'Status', 'value'=>$model->Status==0?"Ongoing":"Completed"),
	),
)); ?>
