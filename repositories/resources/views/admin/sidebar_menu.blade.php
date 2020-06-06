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

.collapse {
    display: none;
     visibility: visible; 
}
</style>

<div class="navbar-default sidebar" role="navigation" id='scrollfordesktop' >
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> @lang('app.dashboard')</a>
            </li>
             <li> <a href="{{ route('profile') }}" id="changecolor"><i class="fa fa-user"></i> @lang('app.profile')</a>  </li>
             
            
             <?php
//echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;
$user_id=$lUser->id;
 $ads = Ad::whereUserId($user_id)->where('type','pro')->where('status','0')->get();
 
 $ads1 = Ad::whereUserId($user_id)->where('type','pro')->where('status','1')->get();
 
//dd($ads);
?>
<?php if($user_type == 'user') { ?>
<?php if($lUser->account_type == 'premiumplan') { ?>
<li>
                <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>
                    <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>
                    <li>  <a href="#" id="changecolor">Save ad as favorite</a> </li>
                </ul>
            </li>
            <?php
}
}
?>

<?php if($user_type == 'user') { ?>
<?php if($lUser->account_type == 'premiumplan') { ?>
					<?php if($paymentmade=="paid") { ?>
					 <li> <a href="{{ route('user_messages') }}" id="changecolor">My Inbox</a> </li>
				
          
 <li>  <a href="{{ route('user_approvedads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>
             <li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>
             <li>  <a href="{{ route('user_blocked_ads') }}" id="changecolor" >@lang('app.blocked_ads')</a> </li>
                <!--<li> <a href="{{ route('initiatebizzPayments') }}" id="changecolor">Buy Bizz</a> </li>-->
                 <li>
                <a href="#"><i class="fa fa-rss-square"></i> Bizz<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('bizz') }}" id="changecolor" >Bizz</a> </li>
                    <li> <a href="{{ route('listyourbusiness') }}" id="changecolor">@lang('app.create_new_post')</a> </li>
                    <li>  <a href="#" id="changecolor">Save ad as favorite</a> </li>
                </ul>
            </li>
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('pro') }}" id="changecolor" >Pro</a> </li>
                    <?php
                    if(count($ads) >= 1 || count($ads1) >= 1 ){
    // dd('1');
 }else{
   ?>
    <li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Pro Listing</a> </li>
    <?php
 }
 
                    ?>
                   
                </ul>
            </li>
             <li>
                <a href="#"><i class="fa fa-rss-square"></i> Project<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('projects') }}" id="changecolor" >Opportunities</a> </li>
                    <li>  <a href="{{ route('createprojects') }}" id="changecolor"> Create Opportunities Listing</a> </li>
                </ul>
            </li>
                   <li>
                <a href="#"><i class="fa fa-rss-square"></i> @lang('app.blog')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('posts') }}" id="changecolor" >@lang('app.posts')</a> </li>
                    <li>  <a href="{{ route('create_new_post') }}" id="changecolor" >@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> White Papers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="#" id="changecolor" >@lang('app.posts')</a> </li>
                    <li>  <a href="#" id="changecolor" >@lang('app.create_new_post')</a> </li>
                    <li>  <a href="#" id="changecolor">Save ad as favorite</a> </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Packages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="#" id="changecolor" >@lang('app.posts')</a> </li>
                    <li>  <a href="#" id="changecolor" >@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
            <li><a href="{{ route('code_utilize') }}" id="changecolor" >Utilized Code</a></li>
          
            <!-- <li>-->
            
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            
           
              <?php
					}
					//else{
					   ?>
					    
					  
					    <!--<li>-->
         <!--       <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
         <!--       <ul class="nav nav-second-level">-->
         <!--           <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>-->
         <!--           <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>-->
         <!--       </ul>-->
         <!--   </li>-->
         <!--   <li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>-->
         <!--    <li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>-->
             <?php
					}
}
?>

           
                
                
                <!--<a href="#" id="changecolor"><i class="fa fa-bullhorn"></i> @lang('app.my_ads')<span class="fa arrow"></span></a>-->
                <!--<ul class="nav nav-second-level collapse in" aria-expanded="true" style="">-->

                    <!--<li>  <a href="{{ route('my_ads') }}" id="changecolor" >My Posts</a> </li>-->
                      <!--<li>  <a href="{{ route('createprojects') }}" id="changecolor"> Post Project Listing</a> </li>-->
                    <!--<li>  <a href="{{ route('createclassifieds') }}" id="changecolor"> Post Free Classified</a> </li>-->
                <!--    <li>-->
                <!--<a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
                <!--<ul class="nav nav-second-level">-->
                    <!--<li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>-->
                    <!--<li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
             <!--<li>-->
             <!--   <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>-->
             <!--   <ul class="nav nav-second-level">-->
                    <!--<li>  <a href="{{ route('pro') }}" id="changecolor" >Pro</a> </li>-->
                    <!--<li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Pro Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
                    <!--<li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Profile Listing</a> </li>-->
                    <!--<li>  <a href="{{ route('projectevaluation') }}" id="changecolor"> Free Project Evaluation</a> </li>-->
                    <!--<li>  <a href="{{ route('listyourbusiness') }}" id="changecolor"> Post Business Listing</a> </li>-->
                    
            <!--@if($lUser->is_admin())-->
                    <!--<li>  <a href="{{ route('createprojects') }}" id="changecolor"> Post a Project Listing</a> </li>-->
            <!--@endif-->
                    <!--<li>  <a href="javascript:void(0);" id="changecolor"> Post a White Paper Listing</a> </li>-->
                    <!-- <li> <a href="{{ route('create_your_whitepaper') }}" id="changecolor"> Post a White Paper Listing</a> </li>-->
                    <!--<li>  <a href="javascript:void(0);" id="changecolor"> Post a Blog Listing</a> </li>-->
                    <!--@if(!$lUser->is_admin() || !$lUser->is_superadmin())-->
                   
                    <!--<li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>-->
                    <!--@endif-->
                    <!--                    @if(!$lUser->is_superadmin())-->
                   
                    <!--<li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>-->
                    <!--@endif-->
                    <!--<li>  <a href="{{ route('favorite_ads') }}" id="changecolor">@lang('app.favourite_ads')</a> </li>-->
                <!--</ul>-->
            </li>
            
            

            @if($lUser->is_admin())
            
             
              <!--<li> <a href="{{ route('add_superadministrator') }}"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
            

            <!--<li> <a href="{{ route('parent_categories') }}" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>-->
            <!--<li> <a href="{{ route('admin_brands') }}" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>-->
             <li> <a href="{{ route('contact_messages') }}" id="changecolor"><i class="fa fa-envelope-o"></i> My Inbox</a>  </li>
            <li>
                <a href="#" id="changecolor"><i class="fa fa-bullhorn"></i> @lang('app.ads')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li>  <a href="{{ route('my_ads') }}" id="changecolor" >My Ads</a> </li>
                    <!--<li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>-->
                     <li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>
                    <li>  <a href="{{ route('admin_pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>
                    <li>  <a href="{{ route('admin_blocked_ads') }}" id="changecolor" >@lang('app.blocked_ads')</a> </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-rss-square"></i> @lang('app.blog')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('posts') }}" id="changecolor" >@lang('app.posts')</a> </li>
                    <li>  <a href="{{ route('create_new_post') }}" id="changecolor" >@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Bizz<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('bizz') }}" id="changecolor" >Bizz</a> </li>
                    <li> <a href="{{ route('listyourbusiness') }}" id="changecolor">@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('pro') }}" id="changecolor" >Pro</a> </li>
                    <li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Pro Listing</a> </li>
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
           
            
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Profile<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>  <a href="{{ route('pro') }}" id="changecolor" >Profile</a> </li>-->
            <!--        <li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Profile Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Whitepaper<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('whitepaper_list') }}" id="changecolor" >Whitepaper</a> </li>
                    <li> <a href="{{ route('create_your_whitepaper') }}" id="changecolor"> Post a White Paper Listing</a> </li>
                </ul>
            </li>
             <li> <a href="{{ route('Project_eval') }}" id="changecolor"><i class="fa fa-file-word-o"></i> Project Evaluation List</a>  </li>
            <li> <a href="{{ route('pages') }}" id="changecolor"><i class="fa fa-file-word-o"></i> @lang('app.pages')</a>  </li>
            <li> <a href="{{ route('slider') }}" id="changecolor"><i class="fa fa-sliders"></i> @lang('app.slider')</a>  </li>
            <!--<li> <a href="{{ route('ad_reports') }}" id="changecolor"><i class="fa fa-exclamation"></i> Classifieds Reports</a>  </li>-->
            <li> <a href="{{ route('users') }}" id="changecolor"><i class="fa fa-users"></i> @lang('app.users')</a>  </li>
             <!--<li> <a href="{{ route('add_superadministrator') }}"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
                           <!--<li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>-->

            <!--<li>
                <a href="#"><i class="fa fa-desktop fa-fw"></i> @lang('app.appearance')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('theme_settings') }}">@lang('app.theme_settings')</a> </li>
                    <li> <a href="{{ route('modern_theme_settings') }}">@lang('app.modern_theme_settings')</a> </li>
                    <li> <a href="{{ route('social_url_settings') }}">@lang('app.social_url')</a> </li>
                </ul>
           </li>-->

            <li>
                <a href="#"><i class="fa fa-map-marker" id="changecolor"></i> @lang('app.locations')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li> <a href="{{ route('country_list') }}" id="changecolor">@lang('app.countries')</a> </li>
                    <li> <a href="{{ route('state_list') }}" id="changecolor">@lang('app.states')</a> </li>
                    <li> <a href="{{ route('city_list') }}" id="changecolor">@lang('app.cities')</a> </li>
                </ul>

            </li>
 <li><a href="{{ route('profile1') }}" id="changecolor" >PDF Report</a></li>
          
            <li> <a href="{{ route('fetch_user') }}" id="changecolor">Assign Affilate Code</a> </li>
                <li> <a href="{{ route('code_report') }}" id="changecolor">Affilate Code Report</a> </li>

                   <li> <a href="{{ route('add_logo') }}" id="changecolor">Add Logos</a> </li>
              <li> <a href="{{ route('premium_status') }}" id="changecolor">Upgrade to Premium</a> </li>
              
               <li> <a href="{{ route('fetch_bizz') }}" id="changecolor">Set Bizz Expiry </a> </li>
                <li> <a href="{{ route('assign_aduser') }}" id="changecolor">Assign Ads to users  </a> </li>
             <li> <a href="{{ route('parent_categories') }}" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>
            <li> <a href="{{ route('admin_brands') }}" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>
            
            <!--<li> <a href="{{ route('inmailSearch') }}" id="changecolor"><i class="fa fa-envelope-o"></i>In-mail</a>  </li>-->
             <!--<li> <a href="{{ route('add_superadministrator') }}"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
           <!--    <li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>-->
           <!--    <li> <a href="{{ route('payment_settings') }}">@lang('app.payment_settings')</a> </li>-->
           <!--     <li> <a href="{{ route('other_settings') }}">@lang('app.other_settings')</a> </li>-->
           <!--<li> <a href="{{ route('general_settings') }}">@lang('app.general_settings')</a> </li>-->
           <!--         <li> <a href="{{ route('ad_settings') }}">@lang('app.ad_settings_and_pricing')</a> </li>-->
            <!-- <li> <a href="{{ route('monetization') }}"><i class="fa fa-dollar"></i> @lang('app.monetization')</a>  </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> @lang('app.settings')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('general_settings') }}">@lang('app.general_settings')</a> </li>
                    <li> <a href="{{ route('ad_settings') }}">@lang('app.ad_settings_and_pricing')</a> </li>
                    <li> <a href="{{ route('payment_settings') }}">@lang('app.payment_settings')</a> </li>
                    <li> <a href="{{ route('language_settings') }}">@lang('app.language_settings')</a> </li>
                    <li> <a href="{{ route('file_storage_settings') }}">@lang('app.file_storage_settings')</a> </li>
                    <li> <a href="{{ route('social_settings') }}">@lang('app.social_settings')</a> </li>
                    <li> <a href="{{ route('blog_settings') }}">@lang('app.blog_settings')</a> </li>
                    <li> <a href="{{ route('other_settings') }}">@lang('app.other_settings')</a> </li>
                </ul>

            </li>

                <li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>-->


            @endif
           @if($lUser->is_superadmin())
           <!--<li> <a href="{{ route('add_superadministrator') }}"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
            

            <!--<li> <a href="{{ route('parent_categories') }}" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>-->
            <!--<li> <a href="{{ route('admin_brands') }}" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>-->
               <li> <a href="{{ route('contact_messages') }}" id="changecolor"><i class="fa fa-envelope-o"></i>My Inbox</a>  </li>
            <li>
                <a href="#" id="changecolor"><i class="fa fa-bullhorn"></i> @lang('app.ads')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li>  <a href="{{ route('my_ads') }}" id="changecolor" >My Ads</a> </li>
                    <!--<li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>-->
                     <li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>
                    <li>  <a href="{{ route('admin_pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>
                    <li>  <a href="{{ route('admin_blocked_ads') }}" id="changecolor" >@lang('app.blocked_ads')</a> </li>
                </ul>
            </li>

           
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Bizz<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('bizz') }}" id="changecolor" >Bizz</a> </li>
                    <li> <a href="{{ route('listyourbusiness') }}" id="changecolor">@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('pro') }}" id="changecolor" >Pro</a> </li>
                    <li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Pro Listing</a> </li>
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
                <a href="#"><i class="fa fa-rss-square"></i> @lang('app.blog')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('posts') }}" id="changecolor" >@lang('app.posts')</a> </li>
                    <li>  <a href="{{ route('create_new_post') }}" id="changecolor" >@lang('app.create_new_post')</a> </li>
                </ul>
            </li>
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Profile<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>  <a href="{{ route('pro') }}" id="changecolor" >Profile</a> </li>-->
            <!--        <li>  <a href="{{ route('create_proad') }}" id="changecolor"> Post Profile Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Whitepaper<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="{{ route('whitepaper_list') }}" id="changecolor" >Whitepaper</a> </li>
                    <li> <a href="{{ route('create_your_whitepaper') }}" id="changecolor"> Post a White Paper Listing</a> </li>
                </ul>
            </li>
             <li> <a href="{{ route('Project_eval') }}" id="changecolor"><i class="fa fa-file-word-o"></i> Project Evaluation List</a>  </li>
            <li> <a href="{{ route('pages') }}" id="changecolor"><i class="fa fa-file-word-o"></i> @lang('app.pages')</a>  </li>
            <li> <a href="{{ route('slider') }}" id="changecolor"><i class="fa fa-sliders"></i> @lang('app.slider')</a>  </li>
            <li> <a href="{{ route('ad_reports') }}" id="changecolor"><i class="fa fa-exclamation"></i> Classifieds Reports</a>  </li>
            <li> <a href="{{ route('users') }}" id="changecolor"><i class="fa fa-users"></i> @lang('app.users')</a>  </li>
             <!--<li> <a href="{{ route('add_superadministrator') }}"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
                           <!--<li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>-->

            <!--<li>
                <a href="#"><i class="fa fa-desktop fa-fw"></i> @lang('app.appearance')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('theme_settings') }}">@lang('app.theme_settings')</a> </li>
                    <li> <a href="{{ route('modern_theme_settings') }}">@lang('app.modern_theme_settings')</a> </li>
                    <li> <a href="{{ route('social_url_settings') }}">@lang('app.social_url')</a> </li>
                </ul>
           </li>-->

            <li>
                <a href="#"><i class="fa fa-map-marker" id="changecolor"></i> @lang('app.locations')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li> <a href="{{ route('country_list') }}" id="changecolor">@lang('app.countries')</a> </li>
                    <li> <a href="{{ route('state_list') }}" id="changecolor">@lang('app.states')</a> </li>
                    <li> <a href="{{ route('city_list') }}" id="changecolor">@lang('app.cities')</a> </li>
                </ul>

            </li>

        <li><a href="{{ route('profile1') }}" id="changecolor" >PDF Report</a></li>
          
            <li> <a href="{{ route('fetch_user') }}" id="changecolor">Assign Affilate Code</a> </li>
                <li> <a href="{{ route('code_report') }}" id="changecolor">Affilate Code Report</a> </li>
                
                   <!--<li> <a href="{{ route('add_logo') }}" id="changecolor">Add Logos</a> </li>-->
              <li> <a href="{{ route('premium_status') }}" id="changecolor">Upgrade to Premium</a> </li>
             <li> <a href="{{ route('parent_categories') }}" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>
            <li> <a href="{{ route('admin_brands') }}" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>
             <li> <a href="{{ route('add_superadministrator') }}"><i class="fa fa-users"></i> Add Super Admin</a>  </li>
               <li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>
                <li><a href="{{ route('code_utilize') }}" id="changecolor" >Utilized Code</a></li>
            
           
            <!-- <li> <a href="{{ route('monetization') }}"><i class="fa fa-dollar"></i> @lang('app.monetization')</a>  </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> @lang('app.settings')<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ route('general_settings') }}">@lang('app.general_settings')</a> </li>
                    <li> <a href="{{ route('ad_settings') }}">@lang('app.ad_settings_and_pricing')</a> </li>
                    <li> <a href="{{ route('payment_settings') }}">@lang('app.payment_settings')</a> </li>
                    <li> <a href="{{ route('language_settings') }}">@lang('app.language_settings')</a> </li>
                    <li> <a href="{{ route('file_storage_settings') }}">@lang('app.file_storage_settings')</a> </li>
                    <li> <a href="{{ route('social_settings') }}">@lang('app.social_settings')</a> </li>
                    <li> <a href="{{ route('blog_settings') }}">@lang('app.blog_settings')</a> </li>
                    <li> <a href="{{ route('other_settings') }}">@lang('app.other_settings')</a> </li>
                </ul>

            </li>

                <li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>-->
             @endif
            
            
           @if($lUser->account_type=='standardaccess' && $lUser->user_type=='user')
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>
                    <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>
                </ul>
            </li>
            <li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>
             <li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>
            @endif
            <!-- @if($lUser->payment=='pending' && $lUser->account_type=='premiumplan')-->
            <!--   <li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="{{ route('classifieds') }}" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="{{ route('createclassifieds') }}" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            <!--<li>  <a href="{{ route('approved_ads') }}" id="changecolor">@lang('app.approved_ads')</a> </li>-->
            <!-- <li>  <a href="{{ route('pending_ads') }}" id="changecolor">@lang('app.pending_for_approval')</a> </li>-->
            <!--   @endif-->
               
        
            <!--@if(!$lUser->is_admin())-->
           <!--<li> <a href="{{ route('administrators') }}"><i class="fa fa-users"></i> @lang('app.administrators')</a>  </li>-->
             <!--@endif-->
            
            
            <!--@if($lUser->is_admin())-->
              
             
             <!--@endif-->
          
            <!--<li> <a href="{{ route('payments') }}" id="changecolor"><i class="fa fa-money"></i> @lang('app.payments')</a>  </li>-->
           
            <li> <a href="{{ route('change_password') }}" id="changecolor"><i class="fa fa-lock"></i> @lang('app.change_password')</a>  </li>

           


        </ul>
         
    </div>
    <!-- /.sidebar-collapse -->
</div>
