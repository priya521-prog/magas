<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<div class="main"><div class="custom-container"><div class="listingbody">

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
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="" class="form-horizontal" method="post"> <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="country" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_a_category'); ?></label>

                            <div class="col-sm-8 <?php echo e($errors->has('country')? 'has-error':''); ?>">
                                <select class="form-control select2" name="country">
                                    <option value=""><?php echo app('translator')->get('app.select_country'); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>"><?php echo e($country->country_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $errors->has('country')? '<p class="help-block">'.$errors->first('country').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group  <?php echo e($errors->has('state')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.state'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" id="state_select" name="state">
                                </select>
                                <p class="text-info">
                                    <span id="state_loader" style="display: none;"><i class="fa fa-spin fa-spinner"></i> </span>
                                </p>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('city_name')? 'has-error':''); ?>">
                            <label for="city_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.city_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="city_name" value="<?php echo e(old('city_name')); ?>" name="city_name" placeholder="<?php echo app('translator')->get('app.city_name'); ?>">
                                <?php echo $errors->has('city_name')? '<p class="help-block">'.$errors->first('city_name').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.save_new_city'); ?></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>

                <hr />
                <div class="row">
                    <div class="col-xs-12">


                        <form method="get">
                            <p>
                                <input type="text" name="city_name" value="<?php echo e(request('city_name')); ?>" placeholder="<?php echo app('translator')->get('app.city_name'); ?>">
                                <button type="submit"><?php echo app('translator')->get('app.search'); ?></button>
                            </p>
                        </form>

                        <table class="table table-bordered table-striped" >
                            <tr>
                                <th><?php echo app('translator')->get('app.city_name'); ?></th>
                                <th><?php echo app('translator')->get('app.state_name'); ?></th>
                                <th><?php echo app('translator')->get('app.country_name'); ?></th>
                                <th><?php echo app('translator')->get('app.actions'); ?></th>
                            </tr>

                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $city->city_name; ?></td>
                                    <td><?php echo $city->state_name; ?></td>
                                    <td><?php echo $city->country_name; ?></td>
                                    <td>
                                        <?php
                                        $html = '<a href="'.route('edit_city', $city->id).'" class="btn btn-primary"><i class="fa fa-edit"></i> </a>';
                                        $html .= '<a href="javascript:;" data-id="'.$city->id.'" class="btn btn-danger deleteCity"><i class="fa fa-trash"></i> </a>';
                                        echo $html;
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>

                        <?php echo $cities->links();; ?>


                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>

        function generate_option_from_json(jsonData, fromLoad){
            //Load Category Json Data To Brand Select
            if(fromLoad === 'country_to_state'){
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
            }
        }
        $(document).ready(function() {
            $('[name="country"]').change(function () {
                var country_id = $(this).val();
                $('#state_loader').show();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('get_state_by_country')); ?>',
                    data: {country_id: country_id, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        generate_option_from_json(data, 'country_to_state');
                    }
                });
            });

            $('body').on('click', '.deleteCity', function (e) {
                if (!confirm("Are you sure? its can't be undone")) {
                    e.preventDefault();
                    return false;
                }
                var selector = $(this);
                var data_id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('delete_city')); ?>',
                    data: {city_id: data_id, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/cities.blade.php ENDPATH**/ ?>