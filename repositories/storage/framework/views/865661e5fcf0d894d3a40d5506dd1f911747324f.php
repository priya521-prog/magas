<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
			  <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <?php if($ad->category): ?>
                            <li><a href="<?php echo e(route('pro', ['category' => $ad->category->id])); ?>"> <?php  echo ucwords($ad->sub_category->category_name);?> </a> </li>
                            <?php endif; ?>
                            <li> <span><?php echo e($ad->title); ?></span> </li>
                        </ul>
                          
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

									<a href="<?php echo url('/');?>/uploads/pdf/<?php echo e($ad->pdffilename); ?>" class="btn btn-lg btn-primary btn-block" download>Download CV</a>
						</div>
					</div>

					<div class="personalinfoprt">
						<div class="infoPanel">
							<?php echo html_entity_decode($ad->description); ?> 
						</div>

					</div>

					
				</div>
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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/modern/pro_ad.blade.php ENDPATH**/ ?>