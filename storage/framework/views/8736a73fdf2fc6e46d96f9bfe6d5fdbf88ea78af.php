<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  <div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid">
                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                        <form action="" id="businessadsPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>
                                <div class="form-tabs" >
                                    <ul>
                                        <li class="sign-up-tab each-form-tab active" onclick="showTab('bizz-tab', 'bizz-content');">
                                            <div class="circle">
                                                1
                                            </div>
                                            <div class="circle-title">
                                                CLASSIFIEDS
                                            </div>
                                        </li>

					<li class="sign-up-tab each-form-tab" style="float:right;">
                                            <div class="circle">
                                                <i class="fa fa-dashboard fa-fw"></i>
                                            </div>
                                            <div class="circle-title">
                                                <a href="<?php echo e(route('dashboard')); ?>" style="font-size:14px;"> Go Back</a>
                                            </div>
                                        </li>
                                       

                                    </ul>
                                    <div class="clearfix"></div>
                                    <div class="bizz-content tab">
                                        <div class="curved-buttons">
                                            Create New Classified 
                                        </div>
                                        <div class="box">
                                            
                                            <div class="box-left">
                                                <div class="sign-up-form">
                                                    <div class="input-row">
                                                         <input type="text" name="ad_title" id="" class="input-field" value="<?php echo e(old('ad_title')); ?>" placeholder="HEADING"  />
<?php echo $errors->has('ad_title')? '<p class="help-block" style="color:red;">Please enter the Title of the ad. </p>':''; ?>

                                                    </div>
                                                     <div class="input-row">
                                                        <input type="text" name="company_name" id="" class="input-field" value="" placeholder="LINKEDIN URL"  />
                                                    </div>
						<div class="box-heading">
                                                     DESCRIPTION
                                                </div>	
                                                     <div class="input-row">
						    <textarea name="ad_description" id="ad_description" class="form-control" rows="8"></textarea>
                                <?php echo $errors->has('ad_description')? '<p class="help-block" style="color:red;">Please enter the Description. </p>':''; ?>

                                <p class="text-info">  A description will help End users to know More about your Ad</p>
</div>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="box-heading">
                                                    Profile Information
                                                </div>
                                                <!--<div class="form-text">-->
                                                <!--    * ALL ARE MANDATORY FIELDS-->
                                                <!--</div>-->
                                                <div class="sign-up-form">
                                                    
                                                    <div class="input-row">
                                                        <input type="text" name="seller_name" id="seller_name" class="input-field" value="<?php echo e(old('seller_name')); ?>" placeholder="ENTER FULL NAME"  /> <?php echo $errors->has('seller_name')? '<p class="help-block"style="color:red;">Please enter the name to be displayed on Ad.</p>':''; ?>


                                                    </div>
                                                  
                                                    <div class="input-row">
                                                        <input type="email" name="seller_email" id="" class="input-field" value="<?php echo e(old('seller_email')); ?>" placeholder="EMAIL"  />
 <?php echo $errors->has('seller_email')? '<p class="help-block"style="color:red;">Please enter the Email Id to be displayed on Ad.</p>':''; ?>

                                                    </div>
                                                    <div class="input-row">
                                                        <input type="text" name="seller_phone" id="seller_phone" class="input-field" value="<?php echo e(old('seller_phone')); ?>"  placeholder="PHONE"  /> 
                                                        <?php echo $errors->has('seller_phone')? '<p class="help-block"style="color:red;">Please enter the phone no to be displayed on Ad.</p>':''; ?>

                                                    </div>


						    <div class="input-row">
                                                        <div class="select">
                                                            <select class="form-control select2" name="category">
                                    <option value="">Select Industry</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->sub_categories->count() > 0): ?>
                                            <optgroup label="<?php echo e($category->category_name); ?>">
                                                <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($sub_category->id); ?>" <?php echo e(old('category') == $sub_category->id ? 'selected' :''); ?>><?php echo e($sub_category->category_name); ?></option>
                                                 
                                                    <!--<option value="<?php echo e($sub_category->id); ?>" ><?php echo e($sub_category->category_name); ?></option>-->
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                                        </div>
                                <?php echo $errors->has('category')? '<p class="help-block"style="color:red;">Please Select the industry.</p>':''; ?>

                                                    </div>



						    <div class="input-row">
                                                        <div class="select">
                                                            <select class="form-control select2" name="servicetype" id="servicetype">
                                                                <option value ="">Service Type</option>
                                                                
                                                                 <!--<option value="Accounting & Book Keeping">Accounting & Book Keeping</option>-->
                                                                 
                                                                  <option value="Accounting & Book Keeping" <?php echo e(old('servicetype') == "Accounting & Book Keeping" ? 'selected' :''); ?>>Accounting & Book Keeping</option>
                                                                  
                                                                <option value="Actor" <?php echo e(old('servicetype') == "Actor" ? 'selected' :''); ?>>Actor</option>
                                                                <option value="Administration" <?php echo e(old('servicetype') == "Administration" ? 'selected' :''); ?>>Administration</option>
                                                                <option value="Advertising and Marketing" <?php echo e(old('servicetype') == "Advertising and Marketing" ? 'selected' :''); ?>>Advertising and Marketing</option>
                                                                <!--<option value="Accounting & Book Keeping" <?php echo e(old('servicetype') == "Accounting & Book Keeping" ? 'selected' :''); ?>>Accounting & Book Keeping</option>-->
                                                                <!--<option value="Actor">Actor</option>-->
                                                                <!--<option value="Administration">Administration</option>-->
                                                                <option value="Analysts"  <?php echo e(old('servicetype') == "Analysts" ? 'selected' :''); ?>>Analysts</option>
                                                                <option value="Architects"  <?php echo e(old('servicetype') == "Architects" ? 'selected' :''); ?>>Architects</option>
                                                                <option value="Archivists & Curator"  <?php echo e(old('servicetype') == "Archivists & Curator" ? 'selected' :''); ?>>Archivists & Curator</option>
                                                                <option value="Artist"  <?php echo e(old('servicetype') == "Artist" ? 'selected' :''); ?>>Artist</option>
                                                                <option value="Auditing & Assurance"  <?php echo e(old('servicetype') == "Auditing & Assurance" ? 'selected' :''); ?>>Auditing & Assurance</option>
                                                                <option value="Authors & Writer"  <?php echo e(old('servicetype') == "Authors & Writer" ? 'selected' :''); ?>>Authors & Writer</option>
                                                                <option value="Cartographers and Surveyor"  <?php echo e(old('servicetype') == "Cartographers and Surveyor" ? 'selected' :''); ?>>Cartographers and Surveyor</option>
                                                                <option value="Consultant"  <?php echo e(old('servicetype') == "Consultant" ? 'selected' :''); ?>>Consultant</option>
                                                                <option value="Dancers & Choreographer"  <?php echo e(old('servicetype') == "Dancers & Choreographer" ? 'selected' :''); ?>>Dancers & Choreographer</option>
                                                                <option value="Interior Decorator"  <?php echo e(old('servicetype') == "Interior Decorator" ? 'selected' :''); ?>>Interior Decorator</option>
                                                                <option value="Designer"  <?php echo e(old('servicetype') == "Designer" ? 'selected' :''); ?>>Designer</option>
                                                                <option value="Developer"  <?php echo e(old('servicetype') == "Developer" ? 'selected' :''); ?>>Developer</option>
                                                                <option value="Economist"  <?php echo e(old('servicetype') == "Economist" ? 'selected' :''); ?>>Economist</option>
                                                                <option value="Governmental"  <?php echo e(old('servicetype') == "Governmental" ? 'selected' :''); ?>>Governmental</option>
                                                                <option value="IT Specialist"  <?php echo e(old('servicetype') == "IT Specialist" ? 'selected' :''); ?>>IT Specialist</option>
                                                                <option value="Lawyer"  <?php echo e(old('servicetype') == "Lawyer" ? 'selected' :''); ?>>Lawyer</option>
                                                                <option value="Medical Practitioner"  <?php echo e(old('servicetype') == "Medical Practitioner" ? 'selected' :''); ?>>Medical Practitioner</option>
                                                                <option value="Musicians, Singers & Composers" <?php echo e(old('servicetype') == "Musicians, Singers & Composers" ? 'selected' :''); ?>>Musicians, Singers & Composers</option>
                                                                <option value="Pharmacist"  <?php echo e(old('servicetype') == "Pharmacist" ? 'selected' :''); ?>>Pharmacist</option>
                                                                <option value="Physio Therapists"  <?php echo e(old('servicetype') == "Physio Therapists" ? 'selected' :''); ?>>Physio Therapists</option>
                                                                <option value="Public Relation Officer"  <?php echo e(old('servicetype') == "Public Relation Officer" ? 'selected' :''); ?>>Public Relation Officer</option>
                                                                <option value="Repairs & Maintenance"  <?php echo e(old('servicetype') == "Repairs & Maintenance" ? 'selected' :''); ?>>Repairs & Maintenance</option>
                                                                <option value="Tax Expert"  <?php echo e(old('servicetype') == "Tax Expert" ? 'selected' :''); ?>>Tax Expert</option>
                                                                <option value="Teacher"  <?php echo e(old('servicetype') == "Teacher" ? 'selected' :''); ?>>Teacher</option>
                                                                <option value="Therapist"  <?php echo e(old('servicetype') == "Therapist" ? 'selected' :''); ?>>Therapist</option>
                                                                <option value="Trainer"  <?php echo e(old('servicetype') == "Trainer" ? 'selected' :''); ?>>Trainer</option>
                                                                <option value="Translation"  <?php echo e(old('servicetype') == "Translation" ? 'selected' :''); ?>>Translation</option>
                                                                <option value="Translators & Interpreters" <?php echo e(old('servicetype') == "Translators & Interpreters" ? 'selected' :''); ?>>Translators & Interpreters</option>
                                                                <option value="Travel Agent"  <?php echo e(old('servicetype') == "Travel Agent" ? 'selected' :''); ?>>Travel Agent</option>
                                                                <option value="Visual Artists"  <?php echo e(old('servicetype') == "Visual Artists" ? 'selected' :''); ?>>Visual Artists</option>
                                                                <option value="Web & Multimedia"  <?php echo e(old('servicetype') == "Web & Multimedia" ? 'selected' :''); ?>>Web & Multimedia</option>
                                                                <option value="Others"  <?php echo e(old('servicetype') == "Others" ? 'selected' :''); ?>>Others</option>
                                                            </select>
                                                        </div>
                                <?php echo $errors->has('servicetype')? '<p class="help-block"style="color:red;">Please Select the Service type.</p>':''; ?>

                                                    </div>


                                                    <div class="input-row">
                                                        <div class="select">
                                                            <select name="country" id="slct" class="form-control select2">
                                                                <option value="">Select Country</option>

                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!--<option value="<?php echo e($country->id); ?>" }}><?php echo e($country->country_name); ?></option>-->
                                         <option value="<?php echo e($country->id); ?>" <?php echo e(old('country') == $country->id ? 'selected' :''); ?>><?php echo e($country->country_name); ?></option>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                                            </select>
                                                        </div>
                                <?php echo $errors->has('country')? '<p class="help-block"style="color:red;">Please Select Country.</p>':''; ?>


                                                    </div>
                                                    <div class="input-row">
                                                        <div class="select">
                                                            <select id="state_select" name="state" class="form-control select2">

                                                                <option value="<?php echo e(old('state')); ?>" required>Please Select State</option>
                                                            </select>
                                                        </div>
                                                         <!--<?php echo $errors->has('state')? '<p class="help-block"style="color:red;">Please Select State.</p>':''; ?>-->
                                                    </div>
						    <div class="input-row">
                                                        <div class="select">
                                                            <select id="city_select" name="city" class="form-control select2">
                                                                <option value="<?php echo e(old('city')); ?>" required>Please Select City</option>
                                                            </select>
                                                        </div>
                                                         <!--<?php echo $errors->has('city')? '<p class="help-block"style="color:red;">Please Select City.</p>':''; ?>-->
                                                    </div>
                                                    <div class="input-row">
                                                        <div class="text">
                                                            Google Map
                                                        </div>
                                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2090.893618076263!2d55.31723178533374!3d25.23519913442785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d33eb90b045%3A0x181bb23636514747!2sGulf%20Towers!5e0!3m2!1sen!2sin!4v1573293400864!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                                    </div>

                                                    <div class="input-row ">
                                                        <div class="text share">
                                                            <img src="<?php echo e(asset('assets/images/icon-share.png')); ?>" alt="" class="pull-left"/>
                                                            0 Views
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

<div class="input-row ">
							<div class="link">
			                                        

<button type="submit" id="submit" class="custom-button">Submit</button>
		                                    </div>

						</div>
                                        </div>


</form>
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
    


<script type="text/javascript">

        $(document).ready(function(){
 $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#state_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_state_by_country')); ?>',
                    data : { country_id : country_id,  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        generate_option_from_json(data, 'country_to_state');
                    }
                });
            });

            $('[name="state"]').change(function(){
                var state_id = $(this).val();
                $('#city_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_city_by_state')); ?>',
                    data : { state_id : state_id,  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        generate_option_from_json(data, 'state_to_city');
                    }
                });
            });

 });


 function generate_option_from_json(jsonData, fromLoad){

            //Load Category Json Data To Brand Select
            if (fromLoad === 'category_to_brand'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> <?php echo trans('app.select_a_brand') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].brand_name +' </option>';
                    }
                    $('#brand_select').html(option);
                    $('#brand_select').select2();
                }else {
                    $('#brand_select').html('');
                    $('#brand_select').select2();
                }
                $('#brand_loader').hide('slow');
            }else if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> <?php echo app('translator')->get('app.select_state'); ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('');
                    $('#state_select').select2();
                }
                $('#state_loader').hide('slow');

            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> <?php echo app('translator')->get('app.select_city'); ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('');
                    $('#city_select').select2();
                }
                $('#city_loader').hide('slow');

            }

        }

            function showTab(tabButton, tabContent) {
                $('.each-form-tab').removeClass("active");
                $('.' + tabButton).addClass("active");
                $('.tab').hide();
                $('.' + tabContent).show();
            }

        </script>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
        <script type="text/javascript" src="<?php echo e(asset('assets/js/fileupload.js')); ?>"></script>       
<script src="<?php echo e(asset('assets/plugins/ckeditor/ckeditor.js')); ?>"></script>
<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'ad_description' );
    </script>
 <script>
    
//     $( "#target" ).click(function() {
//   alert( "Handler for .click() called." );
// });
//  $("#submit1").on('click', function () {
//     // alert("hi");
//             $("#submit").show();
//              $("#submit1").hide();
//         });
        
// $("#review").on('click', function () {
//      //alert("");
//             $("#check_rev").show();
//             $("#cre_biz").hide();
//         });
</script>
<style type="text/css">
    .bizz-content .box-left .input-field{
            text-transform: capitalize;

    }
    .bizz-content .box-right .input-field{
     text-transform: capitalize;   
    }
    
    .select2-container .select2-choice > .select2-chosen{
        text-transform: capitalize; 
    }
</style>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/createclassifieds.blade.php ENDPATH**/ ?>