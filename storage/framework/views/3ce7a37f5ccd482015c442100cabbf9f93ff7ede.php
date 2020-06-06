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
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i> <?php echo app('translator')->get('app.dashboard'); ?></a>
            </li>
             <li> <a href="<?php echo e(route('profile')); ?>" id="changecolor"><i class="fa fa-user"></i> <?php echo app('translator')->get('app.profile'); ?></a>  </li>
            
             <?php
//echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;
 //$pay = Payment::whereUserId($user_id)->orderBy('status','desc')->first();
//dd($pay);
?>
<?php if($user_type == 'user') { ?>
<?php if($lUser->account_type == 'premiumplan') { ?>
					<?php if($paymentmade=="paid") { ?>
					 <li> <a href="<?php echo e(route('user_messages')); ?>" id="changecolor">Messages</a> </li>
				
<!--             <li> <a href="<?php echo e(route('bizz_payment')); ?>" id="changecolor">Buy Bizz</a> </li>-->
 <li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>
             <li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>
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
              <?php
					}
					//else{
					   ?>
					    
					  
					    <!--<li>-->
         <!--       <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
         <!--       <ul class="nav nav-second-level">-->
         <!--           <li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>-->
         <!--           <li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>-->
         <!--       </ul>-->
         <!--   </li>-->
         <!--   <li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>-->
         <!--    <li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>-->
             <?php
					}
}
?>

           
                
                
                <!--<a href="#" id="changecolor"><i class="fa fa-bullhorn"></i> <?php echo app('translator')->get('app.my_ads'); ?><span class="fa arrow"></span></a>-->
                <!--<ul class="nav nav-second-level collapse in" aria-expanded="true" style="">-->

                    <!--<li>  <a href="<?php echo e(route('my_ads')); ?>" id="changecolor" >My Posts</a> </li>-->
                      <!--<li>  <a href="<?php echo e(route('createprojects')); ?>" id="changecolor"> Post Project Listing</a> </li>-->
                    <!--<li>  <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor"> Post Free Classified</a> </li>-->
                <!--    <li>-->
                <!--<a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
                <!--<ul class="nav nav-second-level">-->
                    <!--<li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>-->
                    <!--<li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
             <!--<li>-->
             <!--   <a href="#"><i class="fa fa-rss-square"></i> Pro<span class="fa arrow"></span></a>-->
             <!--   <ul class="nav nav-second-level">-->
                    <!--<li>  <a href="<?php echo e(route('pro')); ?>" id="changecolor" >Pro</a> </li>-->
                    <!--<li>  <a href="<?php echo e(route('create_proad')); ?>" id="changecolor"> Post Pro Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
                    <!--<li>  <a href="<?php echo e(route('create_proad')); ?>" id="changecolor"> Post Profile Listing</a> </li>-->
                    <!--<li>  <a href="<?php echo e(route('projectevaluation')); ?>" id="changecolor"> Free Project Evaluation</a> </li>-->
                    <!--<li>  <a href="<?php echo e(route('listyourbusiness')); ?>" id="changecolor"> Post Business Listing</a> </li>-->
                    
            <!--<?php if($lUser->is_admin()): ?>-->
                    <!--<li>  <a href="<?php echo e(route('createprojects')); ?>" id="changecolor"> Post a Project Listing</a> </li>-->
            <!--<?php endif; ?>-->
                    <!--<li>  <a href="javascript:void(0);" id="changecolor"> Post a White Paper Listing</a> </li>-->
                    <!-- <li> <a href="<?php echo e(route('create_your_whitepaper')); ?>" id="changecolor"> Post a White Paper Listing</a> </li>-->
                    <!--<li>  <a href="javascript:void(0);" id="changecolor"> Post a Blog Listing</a> </li>-->
                    <!--<?php if(!$lUser->is_admin() || !$lUser->is_superadmin()): ?>-->
                   
                    <!--<li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>-->
                    <!--<?php endif; ?>-->
                    <!--                    <?php if(!$lUser->is_superadmin()): ?>-->
                   
                    <!--<li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>-->
                    <!--<?php endif; ?>-->
                    <!--<li>  <a href="<?php echo e(route('favorite_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.favourite_ads'); ?></a> </li>-->
                <!--</ul>-->
            </li>
            
            

            <?php if($lUser->is_admin()): ?>
            
             
              <!--<li> <a href="<?php echo e(route('add_superadministrator')); ?>"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
            

            <!--<li> <a href="<?php echo e(route('parent_categories')); ?>" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>-->
            <!--<li> <a href="<?php echo e(route('admin_brands')); ?>" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>-->
            <li>
                <a href="#" id="changecolor"><i class="fa fa-bullhorn"></i> <?php echo app('translator')->get('app.ads'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li>  <a href="<?php echo e(route('my_ads')); ?>" id="changecolor" >My Posts</a> </li>
                    <!--<li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>-->
                     <li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('admin_pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('admin_blocked_ads')); ?>" id="changecolor" ><?php echo app('translator')->get('app.blocked_ads'); ?></a> </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-rss-square"></i> <?php echo app('translator')->get('app.blog'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('posts')); ?>" id="changecolor" ><?php echo app('translator')->get('app.posts'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('create_new_post')); ?>" id="changecolor" ><?php echo app('translator')->get('app.create_new_post'); ?></a> </li>
                </ul>
            </li>
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Business<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('bizz')); ?>" id="changecolor" >Bizz</a> </li>
                    <li> <a href="<?php echo e(route('listyourbusiness')); ?>" id="changecolor"><?php echo app('translator')->get('app.create_new_post'); ?></a> </li>
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
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Profile<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>  <a href="<?php echo e(route('pro')); ?>" id="changecolor" >Profile</a> </li>-->
            <!--        <li>  <a href="<?php echo e(route('create_proad')); ?>" id="changecolor"> Post Profile Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Whitepaper<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('whitepaper_list')); ?>" id="changecolor" >Whitepaper</a> </li>
                    <li> <a href="<?php echo e(route('create_your_whitepaper')); ?>" id="changecolor"> Post a White Paper Listing</a> </li>
                </ul>
            </li>
             <li> <a href="<?php echo e(route('Project_eval')); ?>" id="changecolor"><i class="fa fa-file-word-o"></i> Project Evaluation List</a>  </li>
            <li> <a href="<?php echo e(route('pages')); ?>" id="changecolor"><i class="fa fa-file-word-o"></i> <?php echo app('translator')->get('app.pages'); ?></a>  </li>
            <li> <a href="<?php echo e(route('slider')); ?>" id="changecolor"><i class="fa fa-sliders"></i> <?php echo app('translator')->get('app.slider'); ?></a>  </li>
            <li> <a href="<?php echo e(route('ad_reports')); ?>" id="changecolor"><i class="fa fa-exclamation"></i> Classifieds Reports</a>  </li>
            <li> <a href="<?php echo e(route('users')); ?>" id="changecolor"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.users'); ?></a>  </li>
             <!--<li> <a href="<?php echo e(route('add_superadministrator')); ?>"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
                           <!--<li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>-->

            <!--<li>
                <a href="#"><i class="fa fa-desktop fa-fw"></i> <?php echo app('translator')->get('app.appearance'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo e(route('theme_settings')); ?>"><?php echo app('translator')->get('app.theme_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('modern_theme_settings')); ?>"><?php echo app('translator')->get('app.modern_theme_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('social_url_settings')); ?>"><?php echo app('translator')->get('app.social_url'); ?></a> </li>
                </ul>
           </li>-->

            <li>
                <a href="#"><i class="fa fa-map-marker" id="changecolor"></i> <?php echo app('translator')->get('app.locations'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li> <a href="<?php echo e(route('country_list')); ?>" id="changecolor"><?php echo app('translator')->get('app.countries'); ?></a> </li>
                    <li> <a href="<?php echo e(route('state_list')); ?>" id="changecolor"><?php echo app('translator')->get('app.states'); ?></a> </li>
                    <li> <a href="<?php echo e(route('city_list')); ?>" id="changecolor"><?php echo app('translator')->get('app.cities'); ?></a> </li>
                </ul>

            </li>

           <li> <a href="<?php echo e(route('contact_messages')); ?>" id="changecolor"><i class="fa fa-envelope-o"></i> <?php echo app('translator')->get('app.contact_messages'); ?></a>  </li>
             <li> <a href="<?php echo e(route('parent_categories')); ?>" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>
            <li> <a href="<?php echo e(route('admin_brands')); ?>" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>
             <!--<li> <a href="<?php echo e(route('add_superadministrator')); ?>"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
               <li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>
               <li> <a href="<?php echo e(route('payment_settings')); ?>"><?php echo app('translator')->get('app.payment_settings'); ?></a> </li>
                <li> <a href="<?php echo e(route('other_settings')); ?>"><?php echo app('translator')->get('app.other_settings'); ?></a> </li>
           <li> <a href="<?php echo e(route('general_settings')); ?>"><?php echo app('translator')->get('app.general_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('ad_settings')); ?>"><?php echo app('translator')->get('app.ad_settings_and_pricing'); ?></a> </li>
            <!-- <li> <a href="<?php echo e(route('monetization')); ?>"><i class="fa fa-dollar"></i> <?php echo app('translator')->get('app.monetization'); ?></a>  </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> <?php echo app('translator')->get('app.settings'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo e(route('general_settings')); ?>"><?php echo app('translator')->get('app.general_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('ad_settings')); ?>"><?php echo app('translator')->get('app.ad_settings_and_pricing'); ?></a> </li>
                    <li> <a href="<?php echo e(route('payment_settings')); ?>"><?php echo app('translator')->get('app.payment_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('language_settings')); ?>"><?php echo app('translator')->get('app.language_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('file_storage_settings')); ?>"><?php echo app('translator')->get('app.file_storage_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('social_settings')); ?>"><?php echo app('translator')->get('app.social_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('blog_settings')); ?>"><?php echo app('translator')->get('app.blog_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('other_settings')); ?>"><?php echo app('translator')->get('app.other_settings'); ?></a> </li>
                </ul>

            </li>

                <li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>-->


            <?php endif; ?>
           <?php if($lUser->is_superadmin()): ?>
           <!--<li> <a href="<?php echo e(route('add_superadministrator')); ?>"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
            

            <!--<li> <a href="<?php echo e(route('parent_categories')); ?>" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>-->
            <!--<li> <a href="<?php echo e(route('admin_brands')); ?>" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>-->
            <li>
                <a href="#" id="changecolor"><i class="fa fa-bullhorn"></i> <?php echo app('translator')->get('app.ads'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li>  <a href="<?php echo e(route('my_ads')); ?>" id="changecolor" >My Posts</a> </li>
                    <!--<li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>-->
                     <li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('admin_pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('admin_blocked_ads')); ?>" id="changecolor" ><?php echo app('translator')->get('app.blocked_ads'); ?></a> </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-rss-square"></i> <?php echo app('translator')->get('app.blog'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('posts')); ?>" id="changecolor" ><?php echo app('translator')->get('app.posts'); ?></a> </li>
                    <li>  <a href="<?php echo e(route('create_new_post')); ?>" id="changecolor" ><?php echo app('translator')->get('app.create_new_post'); ?></a> </li>
                </ul>
            </li>
            <!--<li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Business<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('bizz')); ?>" id="changecolor" >Bizz</a> </li>
                    <li> <a href="<?php echo e(route('listyourbusiness')); ?>" id="changecolor"><?php echo app('translator')->get('app.create_new_post'); ?></a> </li>
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
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Profile<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>  <a href="<?php echo e(route('pro')); ?>" id="changecolor" >Profile</a> </li>-->
            <!--        <li>  <a href="<?php echo e(route('create_proad')); ?>" id="changecolor"> Post Profile Listing</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            
            <li>
                <a href="#"><i class="fa fa-rss-square"></i> Whitepaper<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>  <a href="<?php echo e(route('whitepaper_list')); ?>" id="changecolor" >Whitepaper</a> </li>
                    <li> <a href="<?php echo e(route('create_your_whitepaper')); ?>" id="changecolor"> Post a White Paper Listing</a> </li>
                </ul>
            </li>
             <li> <a href="<?php echo e(route('Project_eval')); ?>" id="changecolor"><i class="fa fa-file-word-o"></i> Project Evaluation List</a>  </li>
            <li> <a href="<?php echo e(route('pages')); ?>" id="changecolor"><i class="fa fa-file-word-o"></i> <?php echo app('translator')->get('app.pages'); ?></a>  </li>
            <li> <a href="<?php echo e(route('slider')); ?>" id="changecolor"><i class="fa fa-sliders"></i> <?php echo app('translator')->get('app.slider'); ?></a>  </li>
            <li> <a href="<?php echo e(route('ad_reports')); ?>" id="changecolor"><i class="fa fa-exclamation"></i> Classifieds Reports</a>  </li>
            <li> <a href="<?php echo e(route('users')); ?>" id="changecolor"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.users'); ?></a>  </li>
             <!--<li> <a href="<?php echo e(route('add_superadministrator')); ?>"><i class="fa fa-users"></i> Add Super Admin</a>  </li>-->
                           <!--<li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>-->

            <!--<li>
                <a href="#"><i class="fa fa-desktop fa-fw"></i> <?php echo app('translator')->get('app.appearance'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo e(route('theme_settings')); ?>"><?php echo app('translator')->get('app.theme_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('modern_theme_settings')); ?>"><?php echo app('translator')->get('app.modern_theme_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('social_url_settings')); ?>"><?php echo app('translator')->get('app.social_url'); ?></a> </li>
                </ul>
           </li>-->

            <li>
                <a href="#"><i class="fa fa-map-marker" id="changecolor"></i> <?php echo app('translator')->get('app.locations'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li> <a href="<?php echo e(route('country_list')); ?>" id="changecolor"><?php echo app('translator')->get('app.countries'); ?></a> </li>
                    <li> <a href="<?php echo e(route('state_list')); ?>" id="changecolor"><?php echo app('translator')->get('app.states'); ?></a> </li>
                    <li> <a href="<?php echo e(route('city_list')); ?>" id="changecolor"><?php echo app('translator')->get('app.cities'); ?></a> </li>
                </ul>

            </li>

           <li> <a href="<?php echo e(route('contact_messages')); ?>" id="changecolor"><i class="fa fa-envelope-o"></i> <?php echo app('translator')->get('app.contact_messages'); ?></a>  </li>
             <li> <a href="<?php echo e(route('parent_categories')); ?>" id="changecolor"><i class="fa fa-list"></i> Industries</a>  </li>
            <li> <a href="<?php echo e(route('admin_brands')); ?>" id="changecolor"><i class="fa fa-adjust"></i> Services</a>  </li>
             <li> <a href="<?php echo e(route('add_superadministrator')); ?>"><i class="fa fa-users"></i> Add Super Admin</a>  </li>
               <li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>
           
            <!-- <li> <a href="<?php echo e(route('monetization')); ?>"><i class="fa fa-dollar"></i> <?php echo app('translator')->get('app.monetization'); ?></a>  </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> <?php echo app('translator')->get('app.settings'); ?><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo e(route('general_settings')); ?>"><?php echo app('translator')->get('app.general_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('ad_settings')); ?>"><?php echo app('translator')->get('app.ad_settings_and_pricing'); ?></a> </li>
                    <li> <a href="<?php echo e(route('payment_settings')); ?>"><?php echo app('translator')->get('app.payment_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('language_settings')); ?>"><?php echo app('translator')->get('app.language_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('file_storage_settings')); ?>"><?php echo app('translator')->get('app.file_storage_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('social_settings')); ?>"><?php echo app('translator')->get('app.social_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('blog_settings')); ?>"><?php echo app('translator')->get('app.blog_settings'); ?></a> </li>
                    <li> <a href="<?php echo e(route('other_settings')); ?>"><?php echo app('translator')->get('app.other_settings'); ?></a> </li>
                </ul>

            </li>

                <li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>-->
             <?php endif; ?>
            
            
           <?php if($lUser->account_type=='standardaccess' && $lUser->user_type=='user'): ?>
              <li>
                <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>
                    <li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>
                </ul>
            </li>
            <li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>
             <li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>
            <?php endif; ?>
            <!-- <?php if($lUser->payment=='pending' && $lUser->account_type=='premiumplan'): ?>-->
            <!--   <li>-->
            <!--    <a href="#"><i class="fa fa-rss-square"></i> Classified<span class="fa arrow"></span></a>-->
            <!--    <ul class="nav nav-second-level">-->
            <!--        <li>   <a href="<?php echo e(route('classifieds')); ?>" id="changecolor">Classified</a> </li>-->
            <!--        <li>   <a href="<?php echo e(route('createclassifieds')); ?>" id="changecolor">Create Classified</a> </li>-->
            <!--    </ul>-->
            <!--</li>-->
            <!--<li>  <a href="<?php echo e(route('approved_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.approved_ads'); ?></a> </li>-->
            <!-- <li>  <a href="<?php echo e(route('pending_ads')); ?>" id="changecolor"><?php echo app('translator')->get('app.pending_for_approval'); ?></a> </li>-->
            <!--   <?php endif; ?>-->
               
        
            <!--<?php if(!$lUser->is_admin()): ?>-->
           <!--<li> <a href="<?php echo e(route('administrators')); ?>"><i class="fa fa-users"></i> <?php echo app('translator')->get('app.administrators'); ?></a>  </li>-->
             <!--<?php endif; ?>-->
            
            
            <!--<?php if($lUser->is_admin()): ?>-->
              
             
             <!--<?php endif; ?>-->
          
            <li> <a href="<?php echo e(route('payments')); ?>" id="changecolor"><i class="fa fa-money"></i> <?php echo app('translator')->get('app.payments'); ?></a>  </li>
           
            <li> <a href="<?php echo e(route('change_password')); ?>" id="changecolor"><i class="fa fa-lock"></i> <?php echo app('translator')->get('app.change_password'); ?></a>  </li>


        </ul>
         
    </div>
    <!-- /.sidebar-collapse -->
</div>
<?php /**PATH C:\xampp\htdocs\magas_services\resources\views/admin/sidebar_menu.blade.php ENDPATH**/ ?>