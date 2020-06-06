<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>
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


                        <div class="alert alert-warning">
                            <?php echo app('translator')->get('app.category_edit_page_warning_msg'); ?> <br />
                            <?php echo app('translator')->get('app.current_slug'); ?> : <strong><?php echo e($edit_category->category_slug); ?></strong>
                        </div>


                        <form action="" class="form-horizontal" method="post"> <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_a_category'); ?></label>

                            <div class="col-sm-8">
                                <select class="form-control select2" name="parent_category">
                                    <option value="0">Top Category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e($edit_category->category_id == $category->id ? 'selected="selected"' : ''); ?>><?php echo e($category->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('category_name')? 'has-error':''); ?>">
                            <label for="category_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.category_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="category_name" value="<?php echo e(old('category_name') ? old('category_name') : $edit_category->category_name); ?>" name="category_name" placeholder="<?php echo app('translator')->get('app.category_name'); ?><">
                                <?php echo $errors->has('category_name')? '<p class="help-block">'.$errors->first('category_name').'</p>':''; ?>


                            </div>
                        </div>


                        <div class="form-group">
                            <label for="fa_icon" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_icon'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2icon" name="fa_icon">
                                    <option value="0"><?php echo app('translator')->get('app.select_icon'); ?></option>
                                    <?php $__currentLoopData = fa_icons(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($icon == $edit_category->fa_icon): ?>
                                        <option value="<?php echo e($icon); ?>" data-icon="<?php echo e($icon); ?>" selected><?php echo e($icon); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($icon); ?>" data-icon="<?php echo e($icon); ?>"><?php echo e($icon); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="`color_class" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_color'); ?></label>
                            <div class="col-sm-8">
                                <select class="form-control select2" name="color_class">
                                    <?php $__currentLoopData = category_classes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $selected = ($class == $edit_category->color_class) ? 'selected':''; ?>
                                        <option value="<?php echo e($class); ?>" <?php echo e($selected); ?>><?php echo e($class); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('description')? 'has-error':''); ?>">
                            <label for="description" class="col-sm-4 control-label"><?php echo app('translator')->get('app.description'); ?></label>
                            <div class="col-sm-8">
                                <textarea name="description" id="description" class="form-control" rows="6"><?php echo e(old('description')? old('description') : $edit_category->description); ?></textarea>
                                <?php echo $errors->has('description')? '<p class="help-block">'.$errors->first('description').'</p>':''; ?>


                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.edit_category'); ?></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>





            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
 </div>  


    </div> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/edit_category.blade.php ENDPATH**/ ?>