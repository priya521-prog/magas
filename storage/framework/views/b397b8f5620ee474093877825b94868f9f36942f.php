<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="main">
		<div class="custom-container">
			<div class="listingbody">
     <div class="container" >
        <div class="row">
            <div class="col-md-3">
                <div class="bg-white">
                    <div class="sidebar-filter-wrapper">

                        <?php if($enable_monetize): ?>
                            <?php echo get_option('monetize_code_listing_sidebar_top'); ?>

                        <?php endif; ?>

                        <form action="" id="listingFilterForm" method="get"> <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="listingSidebarLeftHeader"><?php echo app('translator')->get('app.filter_ads'); ?>
                                        <span id="loaderListingIcon" class="pull-right" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="q" value="<?php echo e(request('q')); ?>" placeholder="<?php echo app('translator')->get('app.search___'); ?>" />
                            </div>

                            <hr />
                            <div class="form-group">
                                <select class="form-control select2" name="category">
                                    <option value=""><?php echo app('translator')->get('app.select_a_category'); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') ==  $category->id ? 'selected':''); ?>><?php echo e($category->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control select2" id="sub_category_select" name="sub_category">
                                    <option value=""><?php echo app('translator')->get('app.select_a_sub_category'); ?></option>
                                    <?php if($selected_categories): ?>
                                        <?php $__currentLoopData = $selected_categories->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($sub_category->id); ?>" <?php echo e(request('sub_category') ==  $sub_category->id ? 'selected':''); ?> ><?php echo e($sub_category->category_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            

                            <hr />
                            <?php $country_usage = get_option('countries_usage'); ?>
                            <?php if($country_usage == 'all_countries'): ?>
                                <div class="form-group">
                                    <select class="form-control select2" name="country">
                                        <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->id); ?>" <?php echo e(request('country') == $country->id ? 'selected' :''); ?>><?php echo e($country->country_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            <?php endif; ?>

                            <div class="form-group">
                                <select class="form-control select2" id="state_select" name="state">
                                    <option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>
                                    <?php if($selected_countries): ?>
                                        <?php $__currentLoopData = $selected_countries->states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($state->id); ?>" <?php echo e(request('state') ==  $state->id ? 'selected':''); ?> ><?php echo e($state->state_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control select2" id="city_select" name="city">
                                    <option value=""> <?php echo app('translator')->get('app.select_city'); ?> </option>
                                    <?php if($selected_states): ?>
                                        <?php $__currentLoopData = $selected_states->cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($city->id); ?>" <?php echo e(request('city') ==  $city->id ? 'selected':''); ?> ><?php echo e($city->city_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                            

                          

                            <hr />
                            <div class="form-group">
                                <div class="row">
                                    <div class=" col-sm-6 col-xs-12">
                                        <button class="btn btn-primary btn-block"><i class="fa fa-search"></i>  <?php echo app('translator')->get('app.filter'); ?></button>
                                    </div>
                                    <div class=" col-sm-6 col-xs-12">
                                        <a href="<?php echo e(route('listing')); ?>" class="btn btn-default btn-block"><i class="fa fa-refresh"></i>  <?php echo app('translator')->get('app.reset'); ?></a>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="clearfix"></div>

                        <?php if($enable_monetize): ?>
                            <?php echo get_option('monetize_code_listing_sidebar_bottom'); ?>

                        <?php endif; ?>

                    </div>

                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-12">

                        <?php
                        $allAdTab = route('listing').str_replace('/', '', str_replace(route('listing'), '', request()->fullUrlWithQuery(['adType'=>'all'])));
                        $personalAdTab = route('listing').str_replace('/', '', str_replace(route('listing'), '', request()->fullUrlWithQuery(['adType'=>'personal'])));
                        $businessAdTab = route('listing').str_replace('/', '', str_replace(route('listing'), '', request()->fullUrlWithQuery(['adType'=>'business'])));

                        ?>

                        <div class="listingTopFilterBar">
                            <ul class="filterAdType pull-left">
                                <li class="<?php echo e(request('adType') == false || request('adType') == 'all'? 'active':''); ?>"><a href="<?php echo e($allAdTab); ?>">All Results </li>

                            </ul>

                            <ul class="listingViewIcon pull-right">
                                
                                <li><a href="javascript:void(0)" id="showGridView">
                                        <i class="fa fa-th-large"></i> </a> </li>
                                <li><a href="javascript:void(0)" id="showListView">
                                        <i class="fa fa-list"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <?php if($enable_monetize): ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo get_option('monetize_code_listing_above_premium_ads'); ?>

                        </div>
                    </div>
                <?php endif; ?>


                <div class="ad-box-wrap">
                    <?php if( ! request('user_id')): ?>
                        <?php if($premium_ads): ?>
                            <?php if($premium_ads->count() > 0): ?>
                                <div class="ad-box-premium-wrap">
                                    <div class="ad-box-grid-view" style="display: <?php echo e(session('grid_list_view') ? (session('grid_list_view') == 'grid'? 'block':'none') : 'block'); ?>;">
                                        <div class="row">
                                            <?php $__currentLoopData = $premium_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php session('grid_list_view') ? (session('grid_list_view') == 'grid'? $ad->increase_impression() :'none') : $ad->increase_impression(); ?>

                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div itemscope itemtype="http://schema.org/Product" class="ads-item-thumbnail ad-box-<?php echo e($ad->price_plan); ?>">
                                                        <div class="ads-thumbnail">
                                                            <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
                                                                <img itemprop="image"  src="<?php echo e(media_url($ad->feature_img)); ?>" class="img-responsive" alt="<?php echo e($ad->title); ?>">
                                                            </a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" title="<?php echo e($ad->title); ?>"><span itemprop="name"><?php echo e(str_limit($ad->title, 40)); ?> </span></a></h4>
                                                            <a class="price text-muted" href="<?php echo e(route('listing', ['category' => $ad->category->id])); ?>"> <i class="fa fa-folder-o"></i> <?php echo e($ad->category->category_name); ?> </a>
                                                            <?php if($ad->city): ?>
                                                                <a class="location text-muted" href="<?php echo e(route('listing', ['city' => $ad->city->id])); ?>"> <i class="fa fa-location-arrow"></i> <?php echo e($ad->city->city_name); ?> </a>
                                                            <?php endif; ?>
                                                            <p class="date-posted text-muted"> <i class="fa fa-clock-o"></i> <?php echo e($ad->created_at->diffForHumans()); ?></p>
                                                            <p class="price"> <span itemprop="price" content="<?php echo e($ad->price); ?>"> <?php echo e(themeqx_price_ng($ad->price, $ad->is_negotiable)); ?> </span></p>
                                                            <link itemprop="availability" href="http://schema.org/InStock" />
                                                        </div>

                                                        <?php if($ad->price_plan == 'premium'): ?>
                                                            <div class="label-premium" data-toggle="tooltip" data-placement="top" title="<?php echo e(ucfirst($ad->price_plan)); ?> ad"><i class="fa fa-star-o"></i> </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="ad-box-list-view" style="display: <?php echo e(session('grid_list_view') == 'list'? 'block':'none'); ?>;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered table-responsive">
                                                <?php $__currentLoopData = $premium_ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php session('grid_list_view') == 'list'? $ad->increase_impression() :'none' ?>
                                                    <tr class="ad-<?php echo e($ad->price_plan); ?>">
                                                        <td width="100">
                                                            <img src="<?php echo e(media_url($ad->feature_img)); ?>" class="img-responsive" alt="">
                                                        </td>
                                                        <td>
                                                            <h5><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" ><?php echo e($ad->title); ?></a> </h5>
                                                            <p class="text-muted">
                                                                <?php if($ad->city): ?>
                                                                    <i class="fa fa-map-marker"></i> <a class="location text-muted" href="<?php echo e(route('listing', ['city'=>$ad->city->id])); ?>"> <?php echo e($ad->city->city_name); ?> </a>,
                                                                <?php endif; ?>
                                                                <i class="fa fa-clock-o"></i> <?php echo e($ad->created_at->diffForHumans()); ?>

                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <a class="price text-muted" href="<?php echo e(route('listing', ['category' => $ad->category->id])); ?>"> <i class="fa fa-folder-o"></i> <?php echo e($ad->category->category_name); ?> </a>
                                                            </p>
                                                            <h5><?php echo e(themeqx_price_ng($ad->price)); ?></h5>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>



                    <?php if($enable_monetize): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo get_option('monetize_code_listing_above_regular_ads'); ?>

                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if($ads->total() > 0): ?>

                        <div class="ad-box-grid-view" style="display: <?php echo e(session('grid_list_view') ? (session('grid_list_view') == 'grid'? 'block':'none') : 'block'); ?>;">

                            <div class="row">
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div itemscope itemtype="http://schema.org/Product" class="ads-item-thumbnail ad-box-<?php echo e($ad->price_plan); ?>">
                                            <div class="ads-thumbnail">
                                                <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
                                                    <img itemprop="image"  src="<?php echo e(media_url($ad->feature_img)); ?>" class="img-responsive" alt="<?php echo e($ad->title); ?>">
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <h4><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" title="<?php echo e($ad->title); ?>"><span itemprop="name"><?php echo e(str_limit($ad->title, 40)); ?> </span></a></h4>
                                                <a class="price text-muted" href="<?php echo e(route('listing', ['category' => $ad->category->id])); ?>"> <i class="fa fa-folder-o"></i> <?php echo e($ad->category->category_name); ?> </a>
                                                <?php if($ad->city): ?>
                                                    <a class="location text-muted" href="<?php echo e(route('listing', ['city' => $ad->city->id])); ?>"> <i class="fa fa-location-arrow"></i> <?php echo e($ad->city->city_name); ?> </a>
                                                <?php endif; ?>
                                                <p class="date-posted text-muted"> <i class="fa fa-clock-o"></i> <?php echo e($ad->created_at->diffForHumans()); ?></p>
                                                <p class="price"> <span itemprop="price" content="<?php echo e($ad->price); ?>"> <?php echo e(themeqx_price_ng($ad->price, $ad->is_negotiable)); ?> </span></p>
                                                <link itemprop="availability" href="http://schema.org/InStock" />
                                            </div>

                                            <?php if($ad->price_plan == 'premium'): ?>
                                                <div class="label-premium" data-toggle="tooltip" data-placement="top" title="<?php echo e(ucfirst($ad->price_plan)); ?> ad"><i class="fa fa-star-o"></i> </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <div class="ad-box-list-view" style="display: <?php echo e(session('grid_list_view') == 'list'? 'block':'none'); ?>;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-responsive">
                                        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="ad-<?php echo e($ad->price_plan); ?>">
                                                <td width="100">
                                                    <img src="<?php echo e(media_url($ad->feature_img)); ?>" class="img-responsive" alt="">
                                                </td>
                                                <td>
                                                    <h5><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" ><?php echo e($ad->title); ?></a> </h5>
                                                    <p class="text-muted">
                                                        <?php if($ad->city): ?>
                                                            <i class="fa fa-map-marker"></i> <a class="location text-muted" href="<?php echo e(route('listing', ['city'=>$ad->city->id])); ?>"> <?php echo e($ad->city->city_name); ?> </a>,
                                                        <?php endif; ?>
                                                        <i class="fa fa-clock-o"></i> <?php echo e($ad->created_at->diffForHumans()); ?>

                                                    </p>
                                                </td>
                                                <td>
                                                    <p>
                                                        <a class="price text-muted" href="<?php echo e(route('listing', ['category' => $ad->category->id])); ?>"> <i class="fa fa-folder-o"></i> <?php echo e($ad->category->category_name); ?> </a>
                                                    </p>
                                                    <h5><?php echo e(themeqx_price_ng($ad->price)); ?></h5>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($enable_monetize): ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php echo get_option('monetize_code_listing_below_regular_ads'); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>


                <div class="row">
                    <div class="col-xs-12">
                        <?php echo e($ads->appends(request()->input())->links()); ?>

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

        $(document).ready(function(){
            <?php if($country_usage == 'single_country'): ?>
            $('#loaderListingIcon').show();
            var country_id = <?php echo e(get_option('usage_single_country_id')); ?>;
            $.ajax({
                type : 'POST',
                url : '<?php echo e(route('get_state_by_country')); ?>',
                data : { country_id : country_id,  _token : '<?php echo e(csrf_token()); ?>' },
                success : function (data) {
                    generate_option_from_json(data, 'country_to_state');
                }
            });
            <?php endif; ?>
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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/modern/listing.blade.php ENDPATH**/ ?>