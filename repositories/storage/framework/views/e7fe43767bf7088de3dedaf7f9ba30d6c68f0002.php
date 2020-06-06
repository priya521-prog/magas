<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="jumbotron jumbotron-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2><?php echo app('translator')->get('app.contact_with_us'); ?></h2>
                </div>
            </div>
        </div>
    </div>

<div class="container" style="margin-top: 65px;">
        <div class="row">
            <div class="col-md-6">

                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> <?php echo app('translator')->get('app.our_office'); ?></legend>

                    <address>
                        <strong><?php echo e(get_text_tpl(get_option('footer_company_name'))); ?></strong>
                        <?php if(get_option('footer_address')): ?>
                            <br />
                            <i class="fa fa-map-marker"></i>
                            <?php echo get_option('footer_address'); ?>

                        <?php endif; ?>
                        <?php if(get_option('site_phone_number')): ?>
                            <br><i class="fa fa-phone"></i>
                            <abbr title="Phone"><?php echo get_option('site_phone_number'); ?></abbr>
                        <?php endif; ?>

                    </address>

                    <?php if(get_option('site_email_address')): ?>
                        <address>
                            <strong><?php echo app('translator')->get('app.email'); ?></strong>
                            <br> <i class="fa fa-envelope-o"></i>
                            <a href="mailto:<?php echo e(get_option('site_email_address')); ?>"> <?php echo e(get_option('site_email_address')); ?> </a>
                        </address>
                    <?php endif; ?>

                </form>

                <div class="well well-sm">
                    <form action="" method="post"> <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group <?php echo e($errors->has('name')? 'has-error':''); ?>">
                                    <label for="name"><?php echo app('translator')->get('app.name'); ?></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo app('translator')->get('app.enter_name'); ?>" value="<?php echo e(old('name')); ?>" required="required" />
                                    <?php echo $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':''; ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('email')? 'has-error':''); ?>">
                                    <label for="email"><?php echo app('translator')->get('app.email_address'); ?></label>
                                    <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" class="form-control" id="email" placeholder="<?php echo app('translator')->get('app.enter_email_address'); ?>" name="email" value="<?php echo e(old('email')); ?>" required="required" />
                                    </div>
                                    <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>


                                </div>

                                <div class="form-group <?php echo e($errors->has('message')? 'has-error':''); ?>">
                                    <label for="name"><?php echo app('translator')->get('app.message'); ?></label>
                                    <textarea name="message" id="message" class="form-control" required="required" placeholder="<?php echo app('translator')->get('app.message'); ?>"><?php echo e(old('message')); ?></textarea>
                                    <?php echo $errors->has('message')? '<p class="help-block">'.$errors->first('message').'</p>':''; ?>

                                </div>
                            </div>
<input type ="hidden" name="rating" id="rating"  >
<input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> <?php echo app('translator')->get('app.send_message'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <?php echo get_option('google_map_embedded_code'); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>


    <script>
        <?php if(session('success')): ?>
        toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/contact_us.blade.php ENDPATH**/ ?>