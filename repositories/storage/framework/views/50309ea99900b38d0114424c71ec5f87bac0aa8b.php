
<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="container">

        <div id="wrapper">

            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <?php echo e($title); ?>  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-md-10 col-xs-12">

                        <form action="" id="adsPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>

                        <legend><?php echo app('translator')->get('app.ad_info'); ?></legend>

                        <div class="form-group  <?php echo e($errors->has('category')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.category'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" name="category">
                                    <option value=""><?php echo app('translator')->get('app.select_a_category'); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->sub_categories->count() > 0): ?>
                                            <optgroup label="<?php echo e($category->category_name); ?>">
                                                <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($sub_category->id); ?>" <?php echo e(old('category') == $sub_category->id ? 'selected': ''); ?>><?php echo e($sub_category->category_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $errors->has('category')? '<p class="help-block">'.$errors->first('category').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="brand_select" class="col-sm-4 control-label">
                                <?php echo app('translator')->get('app.brand'); ?>
                            </label>
                            <div class="col-sm-8 <?php echo e($errors->has('brand')? 'has-error':''); ?>">
                                <select class="form-control select2" name="brand" id="brand_select">
                                    <?php if($previous_brands->count() > 0): ?>
                                        <?php $__currentLoopData = $previous_brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($brand->id); ?>" <?php echo e(old('brand') == $brand->id ? 'selected':''); ?>><?php echo e($brand->brand_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>


                                <?php echo $errors->has('brand')? '<p class="help-block">'.$errors->first('brand').'</p>':''; ?>

                                <p class="text-info"><?php echo app('translator')->get('app.skip_brand_text'); ?>                                 <span id="brand_loader" style="display: none;"><i class="fa fa-spin fa-spinner"></i> </span>
                                </p>

                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('ad_title')? 'has-error':''); ?>">
                            <label for="ad_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.ad_title'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ad_title" value="<?php echo e(old('ad_title')); ?>" name="ad_title" placeholder="<?php echo app('translator')->get('app.ad_title'); ?>">
                                <?php echo $errors->has('ad_title')? '<p class="help-block">'.$errors->first('ad_title').'</p>':''; ?>

                                <p class="text-info"> <?php echo app('translator')->get('app.great_title_info'); ?></p>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('ad_description')? 'has-error':''); ?>">
                            <label for="ad_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.ad_description'); ?></label>
                            <div class="col-sm-8">
                                <textarea name="ad_description" class="form-control" rows="8"><?php echo e(old('ad_description')); ?></textarea>
                                <?php echo $errors->has('ad_description')? '<p class="help-block">'.$errors->first('ad_description').'</p>':''; ?>

                                <p class="text-info"> <?php echo app('translator')->get('app.ad_description_info_text'); ?></p>
                            </div>
                        </div>



                        <div class="form-group required <?php echo e($errors->has('type')? 'has-error':''); ?>">
                            <label class="col-md-4 control-label"><?php echo app('translator')->get('app.add_type'); ?> </label>
                            <div class="col-md-8">
                                <label for="type_private" class="radio-inline">
                                    <input type="radio" value="personal" id="type_private" name="type"  <?php echo e(old('type') == 'personal'? 'checked="checked"' : ''); ?>>
                                    <?php echo app('translator')->get('app.private'); ?>
                                </label>
                                <label for="type_business" class="radio-inline">
                                    <input type="radio" value="business" id="type_business" name="type" <?php echo e(old('type') == 'business'? 'checked="checked"' : ''); ?>>

                                    <?php echo app('translator')->get('app.business'); ?>
                                </label>
                                <?php echo $errors->has('type')? '<p class="help-block">'.$errors->first('type').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('condition')? 'has-error':''); ?>">
                            <label for="condition" class="col-sm-4 control-label"><?php echo app('translator')->get('app.condition'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2NoSearch" name="condition" id="condition">
                                    <option value="new" <?php echo e(old('condition') == 'new' ? 'selected':''); ?>><?php echo app('translator')->get('app.new'); ?></option>
                                    <option value="used" <?php echo e(old('condition') == 'used' ? 'selected':''); ?>><?php echo app('translator')->get('app.used'); ?></option>
                                </select>
                                <?php echo $errors->has('condition')? '<p class="help-block">'.$errors->first('condition').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group  <?php echo e($errors->has('price')? 'has-error':''); ?>">
                            <label for="price" class="col-md-4 control-label"><?php echo app('translator')->get('app.price'); ?></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><?php echo e(get_option('currency_sign')); ?></span>
                                    <input type="text" placeholder="<?php echo app('translator')->get('app.ex_price'); ?>" class="form-control" name="price" id="price" value="<?php echo e(old('price')); ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="negotiable" id="negotiable" <?php echo e(old('negotiable') == 1 ? 'checked':''); ?>>
                                        <?php echo app('translator')->get('app.negotiable'); ?>
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-8 col-md-offset-4">
                                <?php echo $errors->has('price')? '<p class="help-block">'.$errors->first('price').'</p>':''; ?>

                                <p class="text-info"><?php echo app('translator')->get('app.pick_a_good_price'); ?> </p>
                            </div>

                        </div>


                        <legend><?php echo app('translator')->get('app.image'); ?></legend>

                        <div class="form-group <?php echo e($errors->has('images')? 'has-error':''); ?>">
                            <div class="col-sm-12">

                                <div id="uploaded-ads-image-wrap">

                                    <?php if($ads_images->count() > 0): ?>
                                        <?php $__currentLoopData = $ads_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="creating-ads-img-wrap">
                                                <img src="<?php echo e(media_url($img, false)); ?>" class="img-responsive" />
                                                <div class="img-action-wrap" id="<?php echo e($img->id); ?>">
                                                    <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                                    <a href="javascript:;" class="imgFeatureBtn"><i class="fa fa-star<?php echo e($img->is_feature ==1 ? '':'-o'); ?>"></i> </a>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                </div>


                                <div class="file-upload-wrap">
                                    <label>
                                        <input type="file" name="images" id="images" style="display: none;" />
                                        <i class="fa fa-cloud-upload"></i>
                                        <p><?php echo app('translator')->get('app.upload_image'); ?></p>

                                        <div class="progress" style="display: none;"></div>

                                    </label>
                                </div>

                                <?php echo $errors->has('images')? '<p class="help-block">'.$errors->first('images').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('video_url')? 'has-error':''); ?>">
                            <label for="ad_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.video_url'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="video_url" value="<?php echo e(old('video_url')); ?>" name="video_url" placeholder="<?php echo app('translator')->get('app.video_url'); ?>">
                                <?php echo $errors->has('video_url')? '<p class="help-block">'.$errors->first('video_url').'</p>':''; ?>

                                <p class="help-block"><?php echo app('translator')->get('app.video_url_help'); ?></p>
                                <p class="text-info"><?php echo app('translator')->get('app.video_url_help_for_modern_theme'); ?></p>
                            </div>
                        </div>


                        <legend><?php echo app('translator')->get('app.location_info'); ?></legend>

                        <div class="form-group  <?php echo e($errors->has('country')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.country'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" name="country">
                                    <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>

                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>" <?php echo e(old('country') == $country->id ? 'selected' :''); ?>><?php echo e($country->country_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $errors->has('country')? '<p class="help-block">'.$errors->first('country').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group  <?php echo e($errors->has('state')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.state'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" id="state_select" name="state">
                                    <?php if($previous_states->count() > 0): ?>
                                        <?php $__currentLoopData = $previous_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($state->id); ?>" <?php echo e(old('state') == $state->id ? 'selected' :''); ?>><?php echo e($state->state_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <p class="text-info">
                                    <span id="state_loader" style="display: none;"><i class="fa fa-spin fa-spinner"></i> </span>
                                </p>
                            </div>
                        </div>

                        <div class="form-group  <?php echo e($errors->has('city')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.city'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" id="city_select" name="city">
                                    <?php if($previous_cities->count() > 0): ?>
                                        <?php $__currentLoopData = $previous_cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($city->id); ?>" <?php echo e(old('city') == $city->id ? 'selected':''); ?>><?php echo e($city->city_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <p class="text-info">
                                    <span id="city_loader" style="display: none;"><i class="fa fa-spin fa-spinner"></i> </span>
                                </p>
                            </div>
                        </div>


                        <legend><?php echo app('translator')->get('app.seller_info'); ?></legend>

                        <div class="form-group <?php echo e($errors->has('seller_name')? 'has-error':''); ?>">
                            <label for="ad_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.seller_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="seller_name" value="<?php echo e(old('seller_name')? old('seller_name') : $lUser->name); ?>" name="seller_name" placeholder="<?php echo app('translator')->get('app.seller_name'); ?>">
                                <?php echo $errors->has('seller_name')? '<p class="help-block">'.$errors->first('seller_name').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('seller_email')? 'has-error':''); ?>">
                            <label for="ad_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.seller_email'); ?></label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="seller_email" value="<?php echo e(old('seller_email')? old('seller_email') : $lUser->email); ?>" name="seller_email" placeholder="<?php echo app('translator')->get('app.seller_email'); ?>">
                                <?php echo $errors->has('seller_email')? '<p class="help-block">'.$errors->first('seller_email').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('seller_phone')? 'has-error':''); ?>">
                            <label for="ad_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.seller_phone'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="seller_phone" value="<?php echo e(old('seller_phone') ? old('seller_phone') : $lUser->phone); ?>" name="seller_phone" placeholder="<?php echo app('translator')->get('app.seller_phone'); ?>">
                                <?php echo $errors->has('seller_phone')? '<p class="help-block">'.$errors->first('seller_phone').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('address')? 'has-error':''); ?>">
                            <label for="address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.address'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" value="<?php echo e(old('address')? old('address') : $lUser->address); ?>" name="address" placeholder="<?php echo app('translator')->get('app.address'); ?>">
                                <?php echo $errors->has('address')? '<p class="help-block">'.$errors->first('address').'</p>':''; ?>

                                <p class="text-info"><?php echo app('translator')->get('app.address_line_help_text'); ?></p>
                            </div>
                        </div>



                        <?php if(get_option('ads_price_plan') != 'all_ads_free'): ?>



                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo app('translator')->get('app.payment_info'); ?></h3>
                                </div>
                                <div class="panel-body">




                                    <div class="form-group <?php echo e($errors->has('price_plan')? 'has-error':''); ?>">
                                        <label for="price_plan" class="col-sm-4 control-label"><?php echo app('translator')->get('app.price_plan'); ?></label>
                                        <div class="col-sm-8">

                                            <div class="price_input_group">

                                                <label><input type="radio" value="regular" name="price_plan" data-price="<?php echo e(get_ads_price()); ?>"  /><?php echo app('translator')->get('app.regular'); ?> </label> <br />

                                                <label><input type="radio" value="premium" name="price_plan" data-price="<?php echo e(get_ads_price('premium')); ?>" /><?php echo app('translator')->get('app.premium'); ?> </label>

                                                <hr />
                                                <div class="addon-ad-charge">
                                                    <label><input type="checkbox" class="mark_ad_urgent" name="mark_ad_urgent" value="1" data-price="<?php echo e(get_option('urgent_ads_price')); ?>" /> <?php echo app('translator')->get('app.mark_as_urgent'); ?> </label>
                                                </div>

                                                <div class="well" id="price_summery" style="display: none;">
                                                    <?php echo app('translator')->get('app.payable_amount'); ?> :
                                                    aaaaaaaaa<span id="payable_amount"><?php echo e(get_option('regular_ads_price')); ?></span>
                                                </div>


                                                <?php echo $errors->has('price_plan')? '<p class="help-block">'.$errors->first('price_plan').'</p>':''; ?>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group <?php echo e($errors->has('payment_method')? 'has-error':''); ?>">
                                        <label for="payment_method" class="col-sm-4 control-label"><?php echo app('translator')->get('app.payment_method'); ?></label>
                                        <div class="col-sm-8">
                                            <select class="form-control select2NoSearch" name="payment_method" id="payment_method">
                                                <?php if(get_option('enable_paypal') == 1): ?>
                                                    <option value="paypal" <?php echo e(old('payment_method') == 'paypal' ? 'selected':''); ?>><?php echo app('translator')->get('app.paypal'); ?></option>
                                                <?php endif; ?>
                                                <?php if(get_option('enable_stripe') == 1): ?>
                                                    <option value="stripe" <?php echo e(old('payment_method') == 'stripe' ? 'selected':''); ?>><?php echo app('translator')->get('app.stripe'); ?></option>
                                                <?php endif; ?>
                                            </select>
                                            <?php echo $errors->has('payment_method')? '<p class="help-block">'.$errors->first('payment_method').'</p>':''; ?>

                                        </div>
                                    </div>

                                </div>
                            </div>


                        <?php endif; ?>



                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.save_new_ad'); ?></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>


    <script>
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

        $(document).ready(function(){
            $('[name="category"]').change(function(){
                var category_id = $(this).val();
                $('#brand_loader').show();

                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_brand_by_category')); ?>',
                    data : { category_id : category_id,  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        generate_option_from_json(data, 'category_to_brand');
                    }
                });

/*                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_category_info')); ?>',
                    data : { category_id : category_id,  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        if (data.category_slug == 'jobs'){
                            alert('Jobs');
                        }
                    }
                });
                */
            });


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

            $("#images").change(function() {
                var fd = new FormData(document.querySelector("form#adsPostForm"));
                //$('#loadingOverlay').show();
                $('.progress').show();
                $.ajax({
                    url : '<?php echo e(route('upload_ads_image')); ?>',
                    type: "POST",
                    data: fd,

                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                //console.log(percentComplete);

                                var progress_bar = '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: '+percentComplete+'%">'+percentComplete+'% </div>';

                                if (percentComplete === 100) {
                                    $('.progress').hide();
                                }

                            }
                        }, false);

                        return xhr;
                    },

                    cache: false,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,   // tell jQuery not to set contentType
                    success : function (data) {
                        //$('#loadingOverlay').hide('slow');
                        if (data.success == 1){
                            $('#uploaded-ads-image-wrap').load('<?php echo e(route('append_media_image')); ?>');
                        } else{
                            toastr.error(data.msg, '<?php echo trans('app.error') ?>', toastr_options);
                        }
                    }
                });
            });


            $('body').on('click', '.imgDeleteBtn', function(){
                //Get confirm from user
                if ( ! confirm('<?php echo e(trans('app.are_you_sure')); ?>')){
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                $.ajax({
                    url : '<?php echo e(route('delete_media')); ?>',
                    type: "POST",
                    data: { media_id : img_id, _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        if (data.success == 1){
                            current_selector.closest('.creating-ads-img-wrap').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
            $('body').on('click', '.imgFeatureBtn', function(){
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                var current_selector = $(this);

                $.ajax({
                    url : '<?php echo e(route('feature_media_creating_ads')); ?>',
                    type: "POST",
                    data: { media_id : img_id, _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        if (data.success == 1){
                            $('.imgFeatureBtn').html('<i class="fa fa-star-o"></i>');
                            current_selector.html('<i class="fa fa-star"></i>');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
/*
            $('input[name="price_plan"]').click(function(){
                var price = $(this).data('price');

                $('#payable_amount').text(price);
                $('#price_summery').show('slow');
            });

            */

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


        });
    </script>


    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/create_ad.blade.php ENDPATH**/ ?>