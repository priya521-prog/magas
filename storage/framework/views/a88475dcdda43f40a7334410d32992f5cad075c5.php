<?php $__env->startSection('page-css'); ?>
<?php $__env->stopSection(); ?>
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
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_a_category'); ?></label>

                            <div class="col-sm-8">
                                <select class="form-control select2" name="parent_category">
                                    <option value="0"><?php echo app('translator')->get('app.top_category'); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('category_name')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.category_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="category_name" value="<?php echo e(old('category_name')); ?>" name="category_name" placeholder="<?php echo app('translator')->get('app.category_name'); ?>">
                                <?php echo $errors->has('category_name')? '<p class="help-block">'.$errors->first('category_name').'</p>':''; ?>


                            </div>
                        </div>



                        <div class="form-group">
                            <label for="fa_icon" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_icon'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2icon" name="fa_icon">
                                    <option value="0"><?php echo app('translator')->get('app.select_icon'); ?></option>
                                    <?php $__currentLoopData = fa_icons(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($icon); ?>" data-icon="<?php echo e($icon); ?>"><?php echo e($icon); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="`color_class" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_color'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" name="color_class">
                                    <?php $__currentLoopData = category_classes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($class); ?>"><?php echo e($class); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('description')? 'has-error':''); ?>">
                            <label for="description" class="col-sm-4 control-label"><?php echo app('translator')->get('app.description'); ?></label>
                            <div class="col-sm-8">
                                <textarea name="description" id="description" class="form-control" rows="6"><?php echo e(old('description')); ?></textarea>
                                <?php echo $errors->has('description')? '<p class="help-block">'.$errors->first('description').'</p>':''; ?>


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.save_new_category'); ?></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>


                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered">
                            <tr>
                                <th><?php echo app('translator')->get('app.category_name'); ?> (<?php echo app('translator')->get('app.total_products'); ?>) </th>
                            </tr>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div class="clearfix">
                                            <strong><?php echo e($category->category_name); ?> (<?php echo e($category->product_count); ?>)</strong>
                                            <span class="pull-right">

                                            <a href="<?php echo e(route('edit_categories', $category->id)); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                                            <a href="javascript:;" class="btn btn-danger btn-xs" data-id="<?php echo e($category->id); ?>"><i class="fa fa-trash"></i> </a>
                                            </span>

                                        </div>

                                        <?php if($category->sub_categories->count() > 0): ?>
                                            <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="clearfix">
                                                    <hr style="margin: 3px 0" />

                                                    -- <?php echo e($sub_cat->category_name); ?> (<?php echo e($category->product_count); ?>)

                                                    <span class="pull-right">
                                                        <a href="<?php echo e(route('edit_categories', $sub_cat->id)); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                                                        <a href="javascript:;" class="btn btn-danger btn-xs" data-id="<?php echo e($sub_cat->id); ?>"><i class="fa fa-trash"></i> </a>
                                                    </span>

                                                </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>




            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->

</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function() {
            $('.btn-danger').on('click', function (e) {
                if (!confirm("Are you sure? its can't be undone")) {
                    e.preventDefault();
                    return false;
                }

                var selector = $(this);
                var data_id = $(this).data('id');

                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('delete_categories')); ?>',
                    data: {data_id: data_id, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('div').hide('slow');
                        }
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/categories.blade.php ENDPATH**/ ?>