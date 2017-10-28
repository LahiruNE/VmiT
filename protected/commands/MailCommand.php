<?php

class MailCommand extends CConsoleCommand
{
    public function run($args)
    {
        $todayDate = date("Y-m-d");    
        $startOfDay = $todayDate . ' 00:00:00'; 
        $endOfDay = $todayDate . ' 23:59:59'; 

        $criteria=new CDbCriteria;
        $criteria->addBetweenCondition('Added_Date', $startOfDay , $endOfDay );       
        $currentModel = Reservation::model()->findAll($criteria);

        if(!empty($value->user->project->Project))
        {
            $project = $value->user->project->Project;
        }
        else
        {
            $project = "Not Assigned";
        }       


        $content = '<body itemscope itemtype="http://schema.org/EmailMessage" style="text-align:center; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
                    <div class="content" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                            <meta itemprop="name" content="Confirm Email" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" /><table width="100%" cellpadding="0" cellspacing="0" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                <tr><td><image src="http://drive.google.com/uc?export=view&id=0B7cfk70CA7DjSF9LaW9lbGdMWTg"></td></tr>
                                <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                    <h2>These are the current reservations.</h2> 
                                            </td>
                                    </tr><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                    Considered Date : '.$todayDate.'
                                            </td>
                                    </tr>
                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                <div style="max-width:500px; overflow: scroll;">
                                                <table class="container" width="600" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                                                <tr>
                                                <th style="border:1px solid #000; padding:5px">Reservation ID</th>
                                                <th style="border:1px solid #000; padding:5px">Username</th>
                                                <th style="border:1px solid #000; padding:5px">Route Description</th>
                                                <th style="border:1px solid #000; padding:5px">Time</th>
                                                <th style="border:1px solid #000; padding:5px">Reason Description</th>
                                                <th style="border:1px solid #000; padding:5px">Nearest City</th>
                                                <th style="border:1px solid #000; padding:5px">Added Time</th>
                                                <th style="border:1px solid #000; padding:5px">Employee Name</th>
                                                <th style="border:1px solid #000; padding:5px">Phone Number</th>
                                                <th style="border:1px solid #000; padding:5px">Project</th></tr>
                                            ';

        foreach($currentModel as $key=>$value)
        {
            $addedTime = explode(" ", $value->Added_Date)[1];

            $content .= '<tr>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->Reservation_ID.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->user->Username.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->route->Route_Description.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->time->Time.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->reason->Reason_Description.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->Nearest_City.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$addedTime.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->user->employee->Employee_Name.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$value->user->employee->Phone_Number.'</td>'
                . '<td style="border:1px solid #000; padding:5px">'.$project.'</td></tr>';
        }

        $content .= '</table></div></td></tr></table></tr></table></div></body>';
        
         $to = "lahiruepa@gmail.com";
         $subject = "Pending Reservations Reminder";
                  
         $header = "From:SignUpRequestAlert@vmit.com \r\n";
         $header .= "Cc:gihanishara926@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$content,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      
    }
}