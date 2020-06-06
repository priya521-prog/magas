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
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> @lang('app.dashboard')</a>
            </li>
             

           
           
              
            <li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>
             <li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>
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
                    <li>  <a href="{{ route('bizz') }}" id="changecolor" >Bizz</a> </li>
                    <li> <a href="{{ route('listyourbusiness') }}" id="changecolor">@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
            <?php
              }
                ?>
          
<li> <a href="{{ route('bizz_payment') }}" id="changecolor">Buy Bizz</a> </li>
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> @lang('app.blog')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('posts') }}" id="changecolor" >@lang('app.posts')</a> </li>
                    <li>  <a href="{{ route('create_new_post') }}" id="changecolor" >@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
             <li>
                <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>
                    <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>
                </ul>
            </li>
            
             <li>
                <a href="#"><i class="fa fa-rss-square"></i> Project<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('projects') }}" id="changecolor" >Project</a> </li>
                    <li>  <a href="{{ route('createprojects') }}" id="changecolor"> Create Project Listing</a> </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('pro') }}" id="changecolor" >Pro</a> </li>
                    <li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Pro Listing</a> </li>
                </ul>
            </li>
            
           
            
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Whitepaper<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>  <a href="{{ route('whitepaper_list') }}" id="changecolor" >Whitepaper</a> </li>-->
            <!--        <li> <a href="{{ route('create_your_whitepaper') }}" id="changecolor"> Post a White Paper Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
        
          
            <li> <a href="{{ route('payments') }}" id="changecolor"><i class="fa fa-money"></i> @lang('app.payments')</a>  </li>
            <li> <a href="{{ route('profile') }}" id="changecolor"><i class="fa fa-user"></i> @lang('app.profile')</a>  </li>
            <li> <a href="{{ route('change_password') }}" id="changecolor"><i class="fa fa-lock"></i> @lang('app.change_password')</a>  </li>


        </ul>
         
    </div>
    <!-- /.sidebar-collapse -->
</div>
