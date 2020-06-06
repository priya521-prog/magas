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
<style>
@media (min-width: 768px) {
#scrollfordesktop{
height:800px;overflow:scroll
}

}
</style>

<div class="navbar-default sidebar" role="navigation" id='scrollfordesktop' >
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu1">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i> <?php echo app('translator')->get('app.dashboard'); ?></a>
            </li>
             

           
           
              
            <li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>
             <li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>
              <?php 
                 $user = Auth::user();
                  $user_id=$user->id;
               //  $total_payments = Payment::whereStatus('success')->whereUserId($user_id)->first();
               // $total_payments = Payment::whereUserId($user_id);
                $pay = Payment::whereUserId($user_id)->first();
                
              // dd($pay->pay_cat_status);
              if($pay->pay_cat_status=='success' && $pay->payment_category=='bizz'){
                  ?>
                               <li>
                <a href="#"><i class="fa fa-rss-square"></i> Business<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('bizz')); ?>" id="changecolor" >Bizz</a> </li>
                    <li> <a href="<?php echo e(route('listyourbusiness')); ?>" id="changecolor"><?php echo app('translator')->get('app.create_new_post'); ?></a> </li>
                </ul>
            </li>
            <?php
              }
                ?>
          
<li> <a href="<?php echo e(route('bizz_payment')); ?>" id="changecolor">Buy Bizz</a> </li>
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> <?php echo app('translator')->get('app.blog'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('posts')); ?>" id="changecolor" ><?php echo app('translator')->get('app.posts'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('create_new_post')); ?>" id="changecolor" ><?php echo app('translator')->get('app.create_new_post'); ?></a> </li>
                </ul>
            </li>
             <li>
                <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>
                    <li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>
                </ul>
            </li>
            
             <li>
                <a href="#"><i class="fa fa-rss-square"></i> Project<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('projects')); ?>" id="changecolor" >Project</a> </li>
                    <li>  <a href="<?php echo e(route('createprojects')); ?>" id="changecolor"> Create Project Listing</a> </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('pro')); ?>" id="changecolor" >Pro</a> </li>
                    <li>  <a href="<?php echo e(route('create_proad')); ?>" id="changecolor"> Post Pro Listing</a> </li>
                </ul>
            </li>
            
           
            
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Whitepaper<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>  <a href="<?php echo e(route('whitepaper_list')); ?>" id="changecolor" >Whitepaper</a> </li>-->
            <!--        <li> <a href="<?php echo e(route('create_your_whitepaper')); ?>" id="changecolor"> Post a White Paper Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
        
          
            <li> <a href="<?php echo e(route('payments')); ?>" id="changecolor"><i class="fa fa-money"></i> <?php echo app('translator')->get('app.payments'); ?></a>  </li>
            <li> <a href="<?php echo e(route('profile')); ?>" id="changecolor"><i class="fa fa-user"></i> <?php echo app('translator')->get('app.profile'); ?></a>  </li>
            <li> <a href="<?php echo e(route('change_password')); ?>" id="changecolor"><i class="fa fa-lock"></i> <?php echo app('translator')->get('app.change_password'); ?></a>  </li>


        </ul>
         
    </div>
    <!-- /.sidebar-collapse -->
</div>
<?php /**PATH /home/sermagas/public_html/resources/views/admin/premium_sidebar.blade.php ENDPATH**/ ?>