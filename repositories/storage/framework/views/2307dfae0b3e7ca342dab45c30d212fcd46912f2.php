<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
                            <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <li> <span>All Classifieds</span> </li>
                        </ul>
                    <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="<?php echo e(route('classifieds')); ?>" method="get"> <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                               <!--<div class="form-group">-->
                               <!--     <input type="text"  class="form-control" id="searchTerms" name="q" value="<?php echo e(request('q')); ?>" placeholder="Service Type" />-->
                               <!-- </div>-->
                                
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
                                <!--    <div class="form-group">-->
                                <!--        <select class="form-control select2" name="country">-->
                                <!--            <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>-->
                                <!--            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                                <!--                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>-->
                                <!--            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                                <!--        </select>-->
                                <!--    </div>-->
                                <!--<?php endif; ?>-->
                                
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
                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                            </form>
                        </div>

                    </div>

	<?php
					
	if(Auth::user()){
					?>

				<div class="innerListingbody">
					<div class="innerheading yellow">
						CLASSIFIEDS
					</div>

<?php
function shortDescription($fullDescription) {
$shortDescription = "";
$fullDescription = trim(strip_tags($fullDescription));
if ($fullDescription) {
		$initialCount = 300;
		if (strlen($fullDescription) > $initialCount) {
			$shortDescription = substr($fullDescription,0,$initialCount)."…";
		} else {
			return $fullDescription;
		 }
}
return $shortDescription;
}//End of function shortDescription

?>

<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>


<?php if($ads->count() > 0): ?>
					
                                              <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="topdetailintoprt">
						
						<div class="profinto">
							<h2>
<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"> <?php echo e($ad->seller_name); ?></a> </h2>
							<h3><?php  echo ucwords($ad->sub_category->category_name);?></h3>
							<span>
									
									<h3><i class="fa fa-map-marker"></i><?php echo e($ad->country->country_name); ?></h3>

								</span>
						</div>

						<div class="socialinto">
							<span>
								<i class="fa fa-phone"></i>
								<?php echo e($ad->seller_email); ?>

							</span>
							<span>
									<i class="fa fa-envelope"></i>
								<?php echo e($ad->seller_phone); ?>

								</span>
								
						</div>

						<div class="socialinto">
<span>
									

<a href="javascript:void(0);" onclick="save_as_favorite('<?php echo e($ad->slug); ?>')" id="save_as_favorite" data-slug="<?php echo e($ad->slug); ?>" >
<span id="<?php echo e($ad->slug); ?>">
                                    <?php if( ! $ad->is_my_favorite()): ?>
                                        <i class="fa fa-star-o"></i> <?php echo app('translator')->get('app.save_ad_as_favorite'); ?>
                                    <?php else: ?>
                                        <i class="fa fa-star"></i> <?php echo app('translator')->get('app.remove_from_favorite'); ?>
                                    <?php endif; ?>

</span>
                                </a>


								</span>
							<span>
									<a href="<?php echo e(route('classifieds', ['user_id'=>$ad->user_id])); ?>">
		<i class="fa fa-user"></i> <?php echo app('translator')->get('app.more_ads_by_this_seller'); ?>
	</a>
							</span>
							
								
						</div>

						<div class="viewsprt">
								<span>
										<i class="fa fa-share-alt"></i>
										<?php echo e($ad->view); ?> Views
									</span>

									
						</div>
					</div>

					<div class="personalinfoprt">



<div class="profinto" style="margin-bottom:20px;">
	<h2><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php echo e($ad->title); ?> </a></h2>	
						
</div>
						<div class="infoPanel">

							<?php echo shortDescription(html_entity_decode($ad->description));?>
<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" style="color:#c94574">&nbsp;&nbsp;Read More </a>
						</div>

					</div>
<hr style="height: 12px;

border: 0;

box-shadow: inset 0 12px 12px -12px
rgba(0, 0, 0, 0.5);"/>

					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
   <?php endif; ?>
				</div>
				<?php
	}else{
	    ?>
	    	<div class="innerListingbody">
					<div class="innerheading yellow">
						CLASSIFIEDS
					</div>

<?php
function shortDescription($fullDescription) {
$shortDescription = "";
$fullDescription = trim(strip_tags($fullDescription));
if ($fullDescription) {
		$initialCount = 300;
		if (strlen($fullDescription) > $initialCount) {
			$shortDescription = substr($fullDescription,0,$initialCount)."…";
		} else {
			return $fullDescription;
		 }
}
return $shortDescription;
}//End of function shortDescription

?>

<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>


<?php if($ads->count() > 0): ?>
					
                                              <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="topdetailintoprt">
						
						<div class="profinto">
							<h2>
<a href="<?php echo e(route('user.create')); ?>"> <?php echo e($ad->seller_name); ?></a> </h2>
							<h3><?php  echo ucwords($ad->sub_category->category_name);?></h3>
							<span>
									
									<h3><i class="fa fa-map-marker"></i><?php echo e($ad->country->country_name); ?></h3>

								</span>
						</div>

						<div class="socialinto">
							<span>
								<i class="fa fa-phone"></i>
								<?php echo e($ad->seller_email); ?>

							</span>
							<span>
									<i class="fa fa-envelope"></i>
								<?php echo e($ad->seller_phone); ?>

								</span>
								
						</div>

						<div class="socialinto">
<span>
									

<a href="javascript:void(0);" onclick="save_as_favorite('<?php echo e($ad->slug); ?>')" id="save_as_favorite" data-slug="<?php echo e($ad->slug); ?>" >
<span id="<?php echo e($ad->slug); ?>">
                                    <?php if( ! $ad->is_my_favorite()): ?>
                                        <i class="fa fa-star-o"></i> <?php echo app('translator')->get('app.save_ad_as_favorite'); ?>
                                    <?php else: ?>
                                        <i class="fa fa-star"></i> <?php echo app('translator')->get('app.remove_from_favorite'); ?>
                                    <?php endif; ?>

</span>
                                </a>


								</span>
							<span>
									<a href="<?php echo e(route('classifieds', ['user_id'=>$ad->user_id])); ?>">
		<i class="fa fa-user"></i> <?php echo app('translator')->get('app.more_ads_by_this_seller'); ?>
	</a>
							</span>
							
								
						</div>

						<div class="viewsprt">
								<span>
										<i class="fa fa-share-alt"></i>
										<?php echo e($ad->view); ?> Views
									</span>

									
						</div>
					</div>

					<div class="personalinfoprt">



<div class="profinto" style="margin-bottom:20px;">
	<h2><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php echo e($ad->title); ?> </a></h2>	
						
</div>
						<div class="infoPanel">

							<?php echo shortDescription(html_entity_decode($ad->description));?>
<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" style="color:#c94574">&nbsp;&nbsp;Read More </a>
						</div>

					</div>
<hr style="height: 12px;

border: 0;

box-shadow: inset 0 12px 12px -12px
rgba(0, 0, 0, 0.5);"/>

					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
   <?php endif; ?>
				</div>
	    <?php
	}
	?>
			</div>

<div class="row">
                    <div class="col-xs-12">
                        <?php echo e($ads->appends(request()->input())->links()); ?>

                    </div>
                </div>


		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-js'); ?>
    <script>

function save_as_favorite(slug) {
                var selector = slug;
               // var slug = selector.data('slug');

                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('save_ad_as_favorite')); ?>',
                    data : { slug : slug, action: 'add',  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        if (data.status == 1){
                            //selector.html(data.msg);
 				document.getElementById(slug).innerHTML = data.msg;
                        }else {
                            if (data.redirect_url){
                                location.href= data.redirect_url;
                            }
                        }
                    }
                });
            }


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

     

        
    </script>


    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/modern/classifieds.blade.php ENDPATH**/ ?>