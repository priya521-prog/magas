<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>
use Auth;
<?php $__env->startSection('main'); ?>

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
			  <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <!--<?php if($ad->category): ?>-->
                            <li><a href="<?php echo e(route('pro')); ?>"> All Profile Listing </a> </li>
                            <!--<?php endif; ?>-->
                            <li> <span><?php echo e($ad->title); ?></span> </li>
                        </ul>
                          
                        </div>
                        
                        <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="<?php echo e(route('pro')); ?>" method="get"> <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                              
                                 <div class="form-group">
                                       <div class="select">
                                                            <select class="form-control select2" name="q" id="searchTerms">
                                                                <option value ="">Service Type</option>
                                                                 <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Advertising and Marketing">Advertising and Marketing</option>
                                                                <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Analysts">Analysts</option>
                                                                <option value="Architects">Architects</option>
                                                                <option value="Archivists & Curator">Archivists & Curator</option>
                                                                <option value="Artist">Artist</option>
                                                                <option value="Auditing & Assurance">Auditing & Assurance</option>
                                                                <option value="Authors & Writer">Authors & Writer</option>
                                                                <option value="Cartographers and Surveyor">Cartographers and Surveyor</option>
                                                                <option value="Consultant">Consultant</option>
                                                                <option value="Dancers & Choreographer">Dancers & Choreographer</option>
                                                                <option value="Interior Decorator">Interior Decorator</option>
                                                                <option value="Designer">Designer</option>
                                                                <option value="Designer">Developer</option>
                                                                <option value="Economist">Economist</option>
                                                                <option value="Governmental">Governmental</option>
                                                                <option value="IT Specialist">IT Specialist</option>
                                                                <option value="Lawyer">Lawyer</option>
                                                                <option value="Medical Practitioner">Medical Practitioner</option>
                                                                <option value="Musicians, Singers & Composers">Musicians, Singers & Composers</option>
                                                                <option value="Pharmacist">Pharmacist</option>
                                                                <option value="Physio Therapists">Physio Therapists</option>
                                                                <option value="Public Relation Officer">Public Relation Officer</option>
                                                                <option value="Repairs & Maintenance">Repairs & Maintenance</option>
                                                                <option value="Tax Expert">Tax Expert</option>
                                                                <option value="Teacher">Teacher</option>
                                                                <option value="Therapist">Therapist</option>
                                                                <option value="Trainer">Trainer</option>
                                                                <option value="Translation">Translation</option>
                                                                <option value="Translators & Interpreters">Translators & Interpreters</option>
                                                                <option value="Travel Agent">Travel Agent</option>
                                                                <option value="Visual Artists">Visual Artists</option>
                                                                <option value="Visual Artists">Web & Multimedia</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                <div class="form-group">
                                    <select class="form-control select2" name="sub_category">
                                        <option value="">Select Industry</option>
                                         
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         
                                            <?php if($category->sub_categories->count() > 0): ?>
                                                <optgroup label="<?php echo e($category->category_name); ?>">
                                                    <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  
                                                        <option value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->category_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </optgroup>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <!--<?php $country_usage = get_option('countries_usage'); ?>-->
                                <!--<?php if($country_usage == 'all_countries'): ?>-->
                                    <div class="form-group">
                                        <select class="form-control select2" name="country">
                                            <!--<option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>-->
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                <!--<?php endif; ?>-->
                                <?php
                               // dd($countries);
                                foreach($countries as $country){
                                   // echo $country->country_name;
                                }
                                ?>
                                <div class="form-group">
                                     <select class="form-control select2" name="country">
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <!--<option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>-->
                                        <option value="">Select Location</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                            </form>
                        </div>
                    </div>
                    



				<div class="innerListingbody" >
					<div class="innerheading blue">
						PRO
					</div>

					<div class="topdetailintoprt">
						<div >
							<?php if ($ad->business_image== "") { ?>
							<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:160px" class="img-circle">
							<?php } else { ?>
							<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:250px" class="img-circle">
							<?php } ?>
						</div>
						<div class="profinto">
							<h2><?php echo e($ad->seller_name); ?> </h2>
							<h3><?php echo e($ad->designation); ?></h3>			

							<span>
								<i class="fa fa-map-marker"></i>
								<?php if($ad->city_name): ?> <?php echo e($ad->city->city_name); ?>   <?php endif; ?>
								<?php if($ad->state_name): ?> <?php echo e($ad->state->state_name); ?>    <?php endif; ?> 
								<?php echo e($ad->country->country_name); ?>

							</span>
						</div>

						<div class="socialinto">
							<span>
								<i class="fa fa-envelope"></i>
								<?php echo e($ad->seller_email); ?>

							</span>
							<span>
								<i class="fa fa-phone"></i>
								<?php echo e($ad->seller_phone); ?>

								</span>
								<span>

									<i class="fa fa-linkedin"></i>
								<?php if($ad->company_name): ?> <a href="<?php echo e($ad->company_name); ?>" style="color:#181b4f" target="_BLANK">
								<?php echo e($ad->company_name); ?></a>   <?php endif; ?>

								<?php if(!$ad->company_name): ?> Not Linked   <?php endif; ?>	
								</span>
								<span>
									<i class="fa fa-info"></i>
									<?php echo e($ad->sub_category->category_name); ?> <?php echo e($ad->servicename); ?> 

								</span> 
						</div>

						<div class="viewsprt">
								<span>
										<i class="fa fa-share-alt"></i>
										<?php echo e($ad->view); ?> Views 
									</span>
									<?php $x="pdf/".$ad->pdffilename;
									?>
									<a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal" >Download CV</a>
						</div>
					</div>

					<div class="personalinfoprt">
						<div class="infoPanel">
							<?php echo html_entity_decode($ad->description); ?> 
						</div>

					</div>
					
					<div>
				
					</div>
					
				</div>
				  <?php 
				//dd($user);
				//  	  $logged_in=$ad->user_id;
				
				// $user = Auth::user();
		
					 $user=$ad->user_id;
					  if($user = Auth::user()){
					  ?>
					     <a class="btn theme-btn" style="background-color:#191a50;"  href="<?php echo e(route('editpro', [$ad->id])); ?>">Edit </a> 
						&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="<?php echo e(route('deletead', [$ad->id])); ?>">Delete </a>
			<?php
			
					  }
					  ?>
				  <center>
				<div>
				   
                   <a class="btn theme-btn" style="background-color:#e8215a;" href="<?php echo e(route('previousad',[$ad->id])); ?>"> < </a>&nbsp &nbsp &nbsp
                   <a class="btn theme-btn" style="background-color:#e8215a;" href="<?php echo e(route('nextad', [$ad->id])); ?>"> > </a>
                </div>
                </center>
			</div>
		</div>
	</div>
	
	
	<!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Download Form</h3>
        </div>
        <div class="modal-body ">
            <form action="<?php echo e(route('downloadmedia')); ?>" method="post" > <?php echo csrf_field(); ?>
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group <?php echo e($errors->has('name')? 'has-error':''); ?>">
                                    <label for="name"><?php echo app('translator')->get('app.name'); ?></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo app('translator')->get('app.enter_name'); ?>" value="<?php echo e(old('name')); ?>" required="required" />
                                    <?php echo $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':''; ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('email')? 'has-error':''); ?>">
                                    <label for="email"><?php echo app('translator')->get('app.email_address'); ?></label>
                                        <input type="email" class="form-control" id="email" placeholder="<?php echo app('translator')->get('app.enter_email_address'); ?>" name="email" value="<?php echo e(old('email')); ?>" required="required" />
                                       <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>

                                </div>
                            </div>
                            <input type ="hidden" name="url" id="url" value="<?php echo e($x); ?>" >
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div>


	<div class="clearfix"></div>
	
	

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function() {
            $('#shortBySelect').change(function () {
                var form_input = $('#listingFilterForm').serialize();
                location.href = '<?php echo e(route('listing')); ?>?' + form_input + '&shortBy=' + $(this).val();
            });
        });
        function generate_option_from_json(jsonData, fromLoad){
            //Load Category Json Data To Brand Select
            if (fromLoad === 'category_to_sub_category'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> <?php echo trans('app.select_a_sub_category') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].category_name +' </option>';
                    }
                    $('#sub_category_select').html(option);
                    $('#sub_category_select').select2();
                }else {
                    $('#sub_category_select').html('<option value=""><?php echo app('translator')->get('app.select_a_sub_category'); ?></option>');
                    $('#sub_category_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }else if (fromLoad === 'category_to_brand'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> <?php echo trans('app.select_a_brand') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].brand_name +' </option>';
                    }
                    $('#brand_select').html(option);
                    $('#brand_select').select2();
                }else {
                    $('#brand_select').html('<option value=""><?php echo app('translator')->get('app.select_a_brand'); ?></option>');
                    $('#brand_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }else if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> <?php echo app('translator')->get('app.select_state'); ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('<option value="" selected> <?php echo app('translator')->get('app.select_state'); ?> </option>');
                    $('#state_select').select2();
                }
                $('#loaderListingIcon').hide('slow');

            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> <?php echo app('translator')->get('app.select_city'); ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('<option value="" selected> <?php echo app('translator')->get('app.select_city'); ?> </option>');
                    $('#city_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }
        }

        $(function(){
            $('[name="category"]').change(function(){
                var category_id = $(this).val();
                $('#loaderListingIcon').show();
                //window.history.pushState("", "", 'newpage');
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_sub_category_by_category')); ?>',
                    data : { category_id : category_id,  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        generate_option_from_json(data, 'category_to_sub_category');
                    }
                });
            });

            $('[name="sub_category"]').change(function(){
                var category_id = $(this).val();
                $('#loaderListingIcon').show();

                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_brand_by_category')); ?>',
                    data : { category_id : category_id,  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        generate_option_from_json(data, 'category_to_brand');
                    }
                });
            });

            $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#loaderListingIcon').show();
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
                $('#loaderListingIcon').show();
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

     

        $(function(){
            $('#showGridView').click(function(){
                $('.ad-box-grid-view').show();
                $('.ad-box-list-view').hide();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('switch_grid_list_view')); ?>',
                    data : { grid_list_view : 'grid',  _token : '<?php echo e(csrf_token()); ?>' },
                });
            });
            $('#showListView').click(function(){
                $('.ad-box-grid-view').hide();
                $('.ad-box-list-view').show();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('switch_grid_list_view')); ?>',
                    data : { grid_list_view : 'list',  _token : '<?php echo e(csrf_token()); ?>' },
                });
            });
        });
    </script>


    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/pro_ad.blade.php ENDPATH**/ ?>