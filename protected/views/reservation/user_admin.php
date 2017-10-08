<style>
.col_fourth { width: 100%; }

.col_fourth{
	position: relative;
	display:inline;
	display: inline-block;
	float: left;
	margin-right: 2%;
	margin-bottom: 0px;
}
.end { margin-right: 0 !important; }

.wrapper {
    margin-left: 987px !important;
    margin-top: 120px; 
    position: absolute; 
    width:302.3px; 
    background-color: #fff;
    border: 1px solid #dedede;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);
}

.counter { background-color: #ffffff; padding: 20px 0; border-radius: 5px;}
.count-title, h2 { font-size: 40px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.count-text { font-size: 13px; font-weight: normal;  margin-top: 10px; margin-bottom: 0; text-align: center; }
.fa-2x { margin: 0 auto; float: none; display: table; color: #4ad1e5; font-size: 36px !important; }

    
</style>


<script>
    $(document).ready(function(){     
        jque();
        $(".wrapper").append("<div class='counter col_fourth'><i class='fa fa-lightbulb-o fa-2x'></i><h2 class='timer count-title count-number' data-to='<?php echo $model->search_user()->getTotalItemCount();?>' data-speed='500'></h2><p class='count-text'>total reservations have been submitted by you.</p></div>");
    });
    
    function displayCount()
    {       
        var count =0;            
        var res = $('.summary').html();

        if(typeof res !== 'undefined')  
        {
            count = res.split(" ")[3];
        }                        

        jque();
        $(".wrapper").html("<div class='counter col_fourth'><i class='fa fa-lightbulb-o fa-2x'></i><h2>"+count+"</h2><p class='count-text'>total reservations have been submitted by you<br>(According to the searching criteria).</p></div>");
                
    }
    
    function jque()
    {
        (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};

                    return $(this).each(function () {
                        // set options for current element
                        var settings = $.extend({}, $.fn.countTo.defaults, {
                            from:            $(this).data('from'),
                            to:              $(this).data('to'),
                            speed:           $(this).data('speed'),
                            refreshInterval: $(this).data('refresh-interval'),
                            decimals:        $(this).data('decimals')
                        }, options);

                        // how many times to update the value, and how much to increment the value on each update
                        var loops = Math.ceil(settings.speed / settings.refreshInterval),
                                increment = (settings.to - settings.from) / loops;

                        // references & variables that will change with each update
                        var self = this,
                                $self = $(this),
                                loopCount = 0,
                                value = settings.from,
                                data = $self.data('countTo') || {};

                        $self.data('countTo', data);

                        // if an existing interval can be found, clear it first
                        if (data.interval) {
                            clearInterval(data.interval);
                        }
                        data.interval = setInterval(updateTimer, settings.refreshInterval);

                        // initialize the element with the starting value
                        render(value);

                        function updateTimer() {
                            value += increment;
                            loopCount++;

                            render(value);

                            if (typeof(settings.onUpdate) == 'function') {
                                settings.onUpdate.call(self, value);
                            }

                            if (loopCount >= loops) {
                                // remove the interval
                                $self.removeData('countTo');
                                clearInterval(data.interval);
                                value = settings.to;

                                if (typeof(settings.onComplete) == 'function') {
                                        settings.onComplete.call(self, value);
                                }
                            }
                        }

                        function render(value) {
                            var formattedValue = settings.formatter.call(self, value, settings);
                            $self.html(formattedValue);
                        }
                    });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
          // custom formatting example
          $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
          });

          // start all the timers
          $('.timer').each(count);  

          function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
          }
        });
    }
    
    function ResDelete(res_id)
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
                data: {id:res_id},
                success: function (response) {
                                swal(
                                    'Deleted!',
                                    'Reservation has been deleted.',
                                    'success'
                                  ).then(function(){location.reload(); });                                
                           }
               });   
          });
    }  
    
    
</script>

<?php
/* @var $this ReservationController */
/* @var $model Reservation */
$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Make Reservation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.ad-search-form').toggle();
	return false;
});
$('.ad-search-form form').submit(function(){
	$.fn.yiiGridView.update('reservation-grid', {
		data: $(this).serialize()
	});  
        displayCount();
	return false;
});
$('.ad-search-form form').keyup(function(){
	$.fn.yiiGridView.update('reservation-grid', {
		data: $(this).serialize()
	});
        displayCount();
	return false;
});
$('.ad-search-form form').change(function(){
	$.fn.yiiGridView.update('reservation-grid', {
		data: $(this).serialize()
	});
        
        displayCount();
	return false;
});
");
?>

<div class="wrapper"></div>

<h1>My Reservations</h1>
<br>
<?php echo CHtml::link('<i class="fa fa-search" style="font-size: 24px;"></i>&nbsp;&nbsp;Advanced Search','#',array('class'=>'search-button', 'style'=>'font-size:16px;')); ?>
<div class="ad-search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reservation-grid',
	'dataProvider'=>$model->search_user(),
        'afterAjaxUpdate' => 'function(id,data){displayCount()}',
	//'filter'=>$model,
	'columns'=>array(
            array('name'=>'Reservarion_ID', 'value'=>'$data->Reservation_ID', 'htmlOptions'=>array('style'=>'display: none'), 'headerHtmlOptions'=>array('style'=>'display: none')),
            array('name'=>'Employee', 'value'=>'$data->user->employee->Employee_Name'),
            array('name'=>'Contact', 'value'=>'$data->user->employee->Phone_Number'),
            array('name'=>'Proj', 'value'=>'!empty($data->user->project->Project_Name)?$data->user->project->Project_Name : "Not Assigned"'),
            array('name'=>'Time_ID', 'value'=>'$data->time->Time'),
            array('name'=>'Route_ID', 'value'=>'$data->route->Route_Description'),
            array('name'=>'Reason_ID', 'value'=>'isset($data->reason->Reason_Description)?$data->reason->Reason_Description:"Not Submitted"'),
            'Nearest_City',
            'Added_Date',
            array(
                'class' => 'CButtonColumn',
                'htmlOptions' => array('width'=>'130px'),
                //'deleteConfirmation'=>'Do you want to delete this record?',
//                'afterDelete'=>'function(link,success,data){if(success){swal(
//                                                            "Deleted!",
//                                                            "Reservartion has been deleted.",
//                                                            "success"
//                                                          )}}',
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
                        'click'=>'function(){ResDelete($(this).parent().parent().children(":first-child").text())}',
                    ),
                )
            ),
        ),
)); ?>


