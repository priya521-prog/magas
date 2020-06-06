<?php $__env->startSection('title'); ?> Register | ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
   <div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-tabs">

                                    <?php echo $errors->has('first_name')? '<p class="help-block" style="color:red;font-weight:bold;">*'.$errors->first('first_name').'</p>':''; ?>

                                    <?php echo $errors->has('last_name')? '<p class="help-block" style="color:red;font-weight:bold;">*'.$errors->first('last_name').'</p>':''; ?>

                                    <?php echo $errors->has('email')? '<p class="help-block" style="color:red;font-weight:bold;">*'.$errors->first('email').'</p>':''; ?>

                                    <?php echo $errors->has('password')? '<p class="help-block" style="color:red;font-weight:bold;">*'.$errors->first('password').'</p>':''; ?>

                                    <?php echo $errors->has('phone')? '<p class="help-block" style="color:red;font-weight:bold;">*'.$errors->first('phone').'</p>':''; ?>

                                    <?php echo $errors->has('country')? '<p class="help-block" style="color:red;font-weight:bold;"> *'.$errors->first('country').'</p>':''; ?>

                     <?php
				$texthere = "Please click on your interests.";
				$texthereone = "Please read the terms and click Agree.";
			?>                  
                                    <?php echo $errors->has('interests')? '<p class="help-block" style="color:red;font-weight:bold;"> *'.$texthere.'</p>':''; ?>              
                                    <?php echo $errors->has('agree')? '<p class="help-block" style="color:red;font-weight:bold;"> *'.$texthereone.'</p>':''; ?>              

 <ul>
                                        <li class="sign-up-tab each-form-tab active" onclick="showTab('sign-up-tab', 'sign-up-content');">
                                            <div class="circle">
                                                1
                                            </div>
                                            <div class="circle-title">
                                                Sign Up
                                            </div>
                                        </li>
                                        <li class="premium-tab each-form-tab" onclick="showTab('premium-tab', 'premium-content');">
                                            <div class="circle">
                                                2
                                            </div>
                                            <div class="circle-title">
                                                PREMIUN
                                            </div>
                                        </li>
                                       <li class="payment-tab each-form-tab" onclick="javascript:void(0);">
                                            <div class="circle">
                                                3
                                            </div>
                                            <div class="circle-title">
                                                Payment
                                            </div>
                                        </li>
                                        <li class="payment-tab each-form-tab" onclick="javascript:void(0);">
                                            <div class="circle">
                                                4
                                            </div>
                                            <div class="circle-title">
                                                Thank you
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    <div class="sign-up-content tab">
                                        <div class="box-left">
                                            <div class="form-text">
                                                * ALL ARE MANDATORY FIELDS
                                            </div>

                    <form action="<?php echo e(route('user.store')); ?>" role="form" method="post" onsubmit="myFunction()"> <?php echo csrf_field(); ?>
                                            <div class="sign-up-form">
                                                <div class="input-row">
                                                    <input type="text" name="first_name" id="first_name" class="input-field" value="<?php echo e(old('first_name')); ?>"  placeholder="FIRST NAME"  />
                                                </div>
                                                <div class="input-row">
                                                    <input type="text" name="last_name" id="last_name" class="input-field" value="<?php echo e(old('last_name')); ?>" placeholder="LAST NAME"  />
                                                </div>
                                                 <div class="input-row">
                                                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"  class="input-field" value="" placeholder="EMAIL"  />
                                                </div>
                                                <div class="input-row">
                                                    <input type="password" name="password" id="password" class="input-field" placeholder="PASSWORD"  />
                                                </div>
                                               <div class="input-row">
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="input-field" placeholder="CONFIRM PASSWORD"  />
                                                </div>
                                                <div class="input-row">
                                                    <input type="tel"  name="phone" id="phone" class="input-field" value="<?php echo e(old('password')); ?>"  placeholder="MOBILE NO"  />
                                                </div>

						<div class="input-row">
							<div class="select">
                                                       <select id="gender" name="gender" class="form-control select2">
								<option value="">Select Gender</option>
                                        			<option value="male">Male</option>
                                        			<option value="female">FeMale</option>
							</select>
							</div>
                                                </div>
                                                
                                                <div class="input-row">
                                                    <div class="select">
                                                       <select id="slct" name="country" class="form-control select2">
                                        <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->id); ?>" <?php echo e(old('country') == $country->id ? 'selected' :''); ?>><?php echo e($country->country_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="input-row input-row-border">
                                                    <div class="text">
                                                        I'm Interested in 
                                                    </div>
                                                    <div class="cc">
                                                        <input id="checkbox-1" class="checkbox-custom" name="interests[]" type="checkbox" value="Bizz">
                                                        <label for="checkbox-1" class="checkbox-custom-label" >Bizz</label>
                                                    </div>
                                                    <div class="cc">
                                                        <input id="checkbox-2" class="checkbox-custom" name="interests[]" type="checkbox" value="Pro">
                                                        <label for="checkbox-2" class="checkbox-custom-label">Pro</label>
                                                    </div>
                                                    <div class="cc">
                                                        <input id="checkbox-3" class="checkbox-custom" name="interests[]" type="checkbox" value="projects">
                                                        <label for="checkbox-3" class="checkbox-custom-label">Projects</label>
                                                    </div>
                                                    <div class="cc">
                                                        <input id="checkbox-4" class="checkbox-custom" name="interests[]" type="checkbox" value="Content">
                                                        <label for="checkbox-4" class="checkbox-custom-label">Content</label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="input-row input-row-border-none">
                                                    <div class="cc">
                                                        <input id="checkbox-5" class="checkbox-custom" name="checkbox-5" type="checkbox">
                                                        <label for="checkbox-5" class="checkbox-custom-label">Notify me of my interest</label>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                

						<div class="input-row ">
							<div class="link">
			                                        <a href="javascript:void(0)" class="custom-button" onclick="hideothertabs('premium-tab', 'premium-content');">Next</a>
		                                    </div>

						</div>
						
                                            </div>
                                        </div>
                                        <div class="box-right">
                                            <div class="link">
                                                <a href="javascript:void();" onclick="showTab('premium-tab', 'premium-content');" class="custom-button">Upgrade To Premium</a>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="p-rate">
                                                            $49
                                                        </div>
                                                        <div class="p-text">
                                                            Upgrade & Enjoy the Premium Features as low as $49 per annum
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <ul class="p-list">
                                                            <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> your Full Profile with Photo with One</li>
                                                            <li>File Upload</li>
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Content</span> on the platform</li>
                                                        </ul>
                                                    </div>
                                             </div>
                                                <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Earn and Associate
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate">
                                                            $999
                                                        </div>
                                                        <div class="link">
                                                            <a href="../endorsements" class="custom-button">Membership Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="premium-content tab">
                                        <div class="box-right">
                                            <div class="box-heading">
                                                BENIFITS OF PREMIUM FOR AS LOW AS $49 PER ANNUM
                                            </div>
                                            <div class="container-fluid">
                                                <div class="p-features">
                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            PRO
                                                        </div>
                                                        <div class="p-desc">
                                                            Post for <span class="p-rate" style="font-size: 14px;"> FREE</span> in PRO your full profile with photo with one File Upload.
                                                        </div>
                                                       
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a PRO</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            CLASSIFIEDS
                                                        </div>
                                                        <div class="p-desc">
                                                           Post CLASSIFIEDS <br/> <span class="p-rate" style="font-size: 14px;"> UNLIMITED</span>
                                                        </div>
                                                        
                                                        <div class="link">
                                                            <a href="" class="custom-button">VIEW CLASSIFIEDS</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            PROJECT
                                                        </div>
                                                        <div class="p-desc">
                                                            Post a Project for
                                                        </div>
                                                        <div class="p-rate" style="font-size: 14px;">
                                                            FREE EVALUATION
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">VIEW A PROJECT</a>
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            CONTENT
                                                        </div>
                                                        <div class="p-desc">
                                                            Access to 
                                                        </div>
                                                        <div class="p-rate" style="font-size: 14px;">
                                                            All Content
                                                        </div>
							<div class="p-desc">
                                                            on the platform. 
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">VIEW BLOGS</a>
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            BLOGS
                                                        </div>
                                                        <div class="p-desc">
                                                            Post BLOGS
                                                        </div>
                                                        <div class="p-rate" style="font-size: 14px;">
                                                            UNLIMITED
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">VIEW BLOGS</a>
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            BUY A BIZZ
                                                        </div>
                                                        <div class="p-desc">
                                                            Add Your Business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">VIEW A BIZZ</a>
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            WHITEPAPER
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">VIEW A WHITEPAPER</a>
                                                        </div>
                                                    </div>
                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Earn and Associate
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate">
                                                            $999
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">Membership Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

					<div class="input-row input-row-border-none">
                                                    <div class="price_input_group">
                         <label><input type="radio" value="standardaccess" name="account_type" data-price="0"  />&nbsp;&nbsp;STANDARD USER</label> &nbsp;&nbsp;&nbsp;
                         <label><input type="radio" value="premiumplan" name="account_type" data-price="49" />&nbsp;&nbsp;PREMIUM USER </label>
                         <hr />
                                         <div class="well" id="price_summery" style="display: none;">
                                                    <?php echo app('translator')->get('app.payable_amount'); ?> :
                                                    <span id="payable_amount"><?php echo e(get_option('regular_ads_price')); ?> </span>$ USD PER ANNUM. 
                                                </div>
                                                <?php echo $errors->has('price_plan')? '<p class="help-block">'.$errors->first('price_plan').'</p>':''; ?>

                                            </div>



						

                                                    <div class="clearfix"></div>
                                                </div>
					
						<div class="input-row ">
                                                       <div class="cc">
                                                               <input id="checkbox-11" class="checkbox-custom" name="agree" value="1" type="checkbox" >
                                                               <label for="checkbox-11" class="checkbox-custom-label">
I agree to <a href="page/terms-and-condition" target="_blank" style="color:blue;">terms and conditions</a></label>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                </div>



							<div class="input-row ">
								
								<div class="link" id="showthisnow" >
								<input type="submit" value="Register" class="custom-button" tabindex="7">
								</div>


							</div>






                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="payment-content tab">
                                        <div class="box-left">
                                            <div class="form-text">
                                                <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>SELECT</th>
        <th>TYPE OF SOLUTION</th>
        <th>COST</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>PREMIUM</td>
        <td>49$</td>
      </tr>
      <tr>
        <td>
                                                        <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox" checked>
                                                    </td>
        <td>TOTAL</td>
        <td>49$</td>
      </tr>
     
    </tbody>
  </table>
                                            </div>


							<div class="input-row ">
								<div class="link">
<a href="javascript:void(0)" class="custom-button" onclick="showTab('premium-tab', 'premium-content');" style="background-color:#191a50;">BACK</a>
<a href="javascript:void(0)" class="custom-button" onclick="showTab('payment-tab', 'payment-content');">PAY WITH PAYPAL</a>

		                                    		</div>



							</div>

                                        </div>
                                        <div class="box-right">
                                            <div class="box-heading">
                                                Benifits of Premium
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <ul class="p-list">
                                                            <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> your Full Profile with Photo with One</li>
                                                            <li>File Upload</li>
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Content</span> on the platform</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Earn and Associate
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate">
                                                            $999
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">Membership Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="thankyou-content tab">
                                        <div class="box-left">
                                             <div class="box-heading">
                                                Thank you
                                            </div>
                                            <div class="box-title">
                                                You now have Standard User Privileges 
                                            </div>
                                            <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                   
                                                    <div class="clearfix"></div>

                                                </div>
                                        </div>
                                        <div class="box-right">
                                            <div class="link">
                                                <a href="" class="custom-button">Upgrade To Premium</a>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="p-rate">
                                                            $49
                                                        </div>
                                                        <div class="p-text">
                                                            Upgrade & Enjoy the Premium Features as low as $49 per annum
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <ul class="p-list">
                                                            <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> your Full Profile with Photo with One</li>
                                                            <li>File Upload</li>
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Content</span> on the platform</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Earn and Associate
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate">
                                                            $999
                                                        </div>
                                                        <div class="link">
                                                            <a href="<?php URL::to('/');?>" class="custom-button">Membership Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

                                            </div>
                                        </div>
</form>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function() {
            $('#phone').keyup(function(){
                $(this).val($(this).val().replace(/[^0-9]/g,""));
            });
        });

    </script>


<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
<script type="text/javascript">

            function showTab(tabButton, tabContent) {
                $('.each-form-tab').removeClass("active");
                $('.' + tabButton).addClass("active");
                $('.tab').hide();
                $('.' + tabContent).show();
            }



	   function hideothertabs(tabButton, tabContent){
                $('.each-form-tab').removeClass("active");
                $('.' + tabButton).addClass("active");
                $('.tab').hide();
                $('.' + tabContent).show();
                $('.upgrade-to-premium').hide();

	   }


        $(document).ready(function(){

		$(document).on('change', '.price_input_group', function(){
                var price = 0;

                var checkedValues = $('.price_input_group input:checked').map(function() {
                    return $(this).data('price');
                }).get();

                for( var i = 0; i < checkedValues.length; i++ ){
                    price += parseInt( checkedValues[i]); //don't forget to add the base
                }
		

                $('#payable_amount').text(price);
                $('#price_summery').show('slow');
            });
		 $('.price_input_group').prop('checked', false);


	 });


        </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/user_create.blade.php ENDPATH**/ ?>