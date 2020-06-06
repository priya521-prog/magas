<?php
  namespace App\Http\Controllers;

use App\Ad;
use App\Contact_query;
use App\Payment;
use App\Report_ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
?>
<?php if($lUser->is_admin()|| $lUser->is_superadmin()): ?>

<?php endif; ?>


<?php $__env->startSection('main'); ?>

    <div class="main">
	<div class="custom-container">
		<div class="listingbody">


    <div id="wrapper">
        <?php
       //echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;
$user = Auth::user();
                  $user_id=$user->id;
                  $pay = Payment::whereUserId($user_id)->first();
                  ?>
          <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div id="page-wrapper">

            <?php if(session('error')): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <br />
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!--<div class="row">-->
            <!--    <div class="col-lg-12">-->
            <!--        <h1 class="page-header" style="color:black;font-size:19px;"><?php echo app('translator')->get('app.dashboard'); ?></h1>-->
            <!--    </div>-->
                 <!--/.col-lg-12 -->
            <!--</div>-->

	 


				<?php if($user_type == 'user') { ?>
					<!--<?php //if($pay->status == "success") { ?>-->
						<?php if($paymentmade == "paid") { ?>
        					<?php echo $__env->make('admin.premiumdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        				
					<?php } else { ?> 
        					<?php echo $__env->make('admin.standarddashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        				
					<?php } ?>

				<?php } ?> 

<?php if($lUser->account_type=='premiumplan'): ?>

<div class="row">
                <div class="col-lg-3 col-md-6" >
                    <div class="panel" style="background-color:#591546;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12" >
                                    <div class="huge" ><?php echo e($businessadscount); ?></div>
                                    <div  >Business Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#f7f701;color:black;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($classifiedscount); ?></div>
                                    <div>Classifieds Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#016dd0;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($prolistscounts); ?></div>
                                    <div>Profile Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#03bd96;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($oppurtunitiescounts); ?></div>
                                    <div>Projects Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>

<?php endif; ?>
 <?php if($lUser->is_superadmin()): ?>

<!--<div class="row">-->
<!--                <div class="col-lg-3 col-md-6" >-->
<!--                    <div class="panel" style="background-color:#591546;color:white;">-->
<!--                        <div class="panel-heading">-->
<!--                            <div class="row">-->
<!--                                <div class="col-xs-12" >-->
<!--                                    <div class="huge" ><?php echo e($businessadscount); ?></div>-->
<!--                                    <div  >Business Listing Counts</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-6">-->
<!--                    <div class="panel" style="background-color:#f7f701;color:black;">-->
<!--                        <div class="panel-heading">-->
<!--                            <div class="row">-->
<!--                                <div class="col-xs-12">-->
<!--                                    <div class="huge"><?php echo e($classifiedscount); ?></div>-->
<!--                                    <div>Classifieds Counts</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 col-md-6">-->
<!--                    <div class="panel" style="background-color:#016dd0;color:white;">-->
<!--                        <div class="panel-heading">-->
<!--                            <div class="row">-->
<!--                                <div class="col-xs-12">-->
<!--                                    <div class="huge"><?php echo e($prolistscounts); ?></div>-->
<!--                                    <div>Profile Listing Counts</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--		<div class="col-lg-3 col-md-6">-->
<!--                    <div class="panel" style="background-color:#03bd96;color:white;">-->
<!--                        <div class="panel-heading">-->
<!--                            <div class="row">-->
<!--                                <div class="col-xs-12">-->
<!--                                    <div class="huge"><?php echo e($oppurtunitiescounts); ?></div>-->
<!--                                    <div>Projects Listing Counts</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


<!--</div>-->

 		 <?php endif; ?>

                <?php if($lUser->is_admin()|| $lUser->is_superadmin()): ?>

<div class="row">
                <div class="col-lg-3 col-md-6" >
                    <div class="panel" style="background-color:#591546;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12" >
                                    <div class="huge" ><?php echo e($businessadscount); ?></div>
                                    <div  >Business Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#f7f701;color:black;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($classifiedscount); ?></div>
                                    <div>Classifieds Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#016dd0;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($prolistscounts); ?></div>
                                    <div>Profile Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color:#03bd96;color:white;">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($oppurtunitiescounts); ?></div>
                                    <div>Projects Listing Counts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>

 		 <?php endif; ?>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($approved_ads); ?></div>
                                    <div>Total Approved Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($pending_ads); ?></div>
                                    <div>Pending Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($blocked_ads); ?></div>
                                    <div>Blocked Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if($ten_contact_messages): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($total_users); ?></div>
                                    <div>Total Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($total_reports); ?></div>
                                    <div><?php echo app('translator')->get('app.reports'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge"><?php echo e($total_payments); ?></div>
                                    <div><?php echo app('translator')->get('app.success_payments'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="huge">  <?php echo e($total_payments_amount); ?> <sup><?php echo e(get_option('currency_sign')); ?></sup></div>
                                    <div><?php echo app('translator')->get('app.total_payment'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
             <!--/.row -->

                  <?php if($lUser->is_admin()|| $lUser->is_superadmin()): ?>
            <div class="row">
                <?php if($ten_contact_messages): ?>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo app('translator')->get('app.latest_ten_contact_messages'); ?>
                        </div>
                        <div class="panel-body">

<table class="table">
  <thead>
    <tr>
      <th scope="col"><?php echo app('translator')->get('app.sender'); ?></th>
      <th scope="col"><?php echo app('translator')->get('app.message'); ?></th>
      <th scope="col">Referal Page</th>

    </tr>
  </thead>
  <tbody>
                                <?php $__currentLoopData = $ten_contact_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><i class="fa fa-user"></i> <?php echo e($message->name); ?> <br />
                                            <i class="fa fa-envelope-o"></i> <?php echo e($message->email); ?> <br />
                                            <i class="fa fa-phone"></i> <?php echo e($message->contact); ?> <br />
                                            <i class="fa fa-clock-o"></i> <?php echo e($message->created_at->diffForHumans()); ?></th>
      <td><?php echo e($message->message); ?> <br/>
<?php if($message->rating!='') { ?> 
Ratings : <?php echo e($message->rating); ?>

<?php } ?>   
</td>
      <td><?php echo e($message->fullpageurl); ?></td>

    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>




                           
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($reports): ?>
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Latest 10 Reported Classifieds Listings
                        </div>
                        <div class="panel-body">

                            <?php if($reports->count() > 0): ?>
                                <table class="table table-bordered table-striped table-responsive">
                                    <tr>
                                        <th><?php echo app('translator')->get('app.reason'); ?></th>
                                        <th><?php echo app('translator')->get('app.email'); ?></th>
                                        <th><?php echo app('translator')->get('app.message'); ?></th>
                                        <th><?php echo app('translator')->get('app.ad_info'); ?></th>
                                    </tr>

                                    <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($report->reason); ?></td>
                                            <td> <?php echo e($report->email); ?>  </td>
                                            <td>
                                                <?php echo e($report->message); ?>

                                                <hr />
                                                <p class="text-muted"> <i><?php echo app('translator')->get('app.date_time'); ?>: <?php echo e($report->posting_datetime()); ?></i></p>
                                            </td>
                                            <td>
                                                <?php if($report->ad): ?>
                                                    <a href="<?php echo e(route('single_ad', [$report->ad->id, $report->ad->slug])); ?>" target="_blank"><?php echo app('translator')->get('app.view_ad'); ?></a>
                                                    <i class="clearfix"></i>
                                                    <a href="<?php echo e(route('reports_by_ads', $report->ad->slug)); ?>">
                                                        <i class="fa fa-exclamation-triangle"></i> <?php echo app('translator')->get('app.reports'); ?> : <?php echo e($report->ad->reports->count()); ?>

                                                    </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>



        </div>
         <!--/#page-wrapper -->
    </div>
     <!--/#wrapper -->

    </div> <!-- /#container -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magas_services\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>