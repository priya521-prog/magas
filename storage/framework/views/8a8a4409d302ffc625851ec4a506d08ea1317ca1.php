<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
            
		<div class="custom-container">
        
               
       
			<div class="listingbody">
        <!--<div class="container">-->


                        <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <li> <span>All Business Listing</span> </li>
                        </ul>
                    <!--</div>-->

 
                    <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="<?php echo e(route('bizz')); ?>" method="get"> <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                               <div class="form-group">
                                    <input type="text"  class="form-control" id="searchTerms" name="q" value="<?php echo e(request('q')); ?>" placeholder="<?php echo app('translator')->get('app.search___'); ?>" />
                                </div>
                                
                              
                                <div class="form-group">
                                    <select class="form-control select2" name="sub_category">
                                        <option value=""><?php echo app('translator')->get('app.select_a_category'); ?></option>
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

                                <?php $country_usage = get_option('countries_usage'); ?>
                                <?php if($country_usage == 'all_countries'): ?>
                                    <div class="form-group">
                                        <select class="form-control select2" name="country">
                                            <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                            </form>
                        </div>

                    </div>



				<div class="innerListingbody">
					<div class="innerheading violet">
						BIZZ
					</div>

<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>

<?php if($ads->count() > 0): ?>
					<ul>
                                              <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


						<li>
                                                    <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
							<div class="topproductimgprt">
									<?php if ($ad->business_image== "") { ?>
									<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:300px">
									<?php } ?>

								<div class="imgcont">
									<?php echo e($ad->title); ?>

								</div>
							</div>
							<h2><?php echo e($ad->slug); ?></h2>
							<h3><?php echo e($ad->sub_category->category_name); ?></h3>
							<span>
								<i class="fa fa-map-marker"></i>
								<?php echo e($ad->country->country_name); ?>

							</span>
                                                    </a>
						</li>


					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
   <?php endif; ?>
				</div>


                </div>
<div class="row">
                    <div class="col-xs-12">
                        <?php echo e($ads->appends(request()->input())->links()); ?>

                    </div>
                </div>
			</div>
		</div>
	</div>

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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/modern/bizz.blade.php ENDPATH**/ ?>