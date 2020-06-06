<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>


<div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">
            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Assign Affiliate Code </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>
                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="<?php echo e(route('set_expiry')); ?>" class="form-horizontal" method="post" name="myForm"> <?php echo csrf_field(); ?>
<br><br><br>
                        <div class="form-group">
                            <label for="country_id" class="col-sm-4 control-label">Select Bizz</label>

                            <div class="col-sm-8">
                                <select  class="form-control select2" name="name" id="name">
                                    <option value="">Select Bizz</option>
                                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $queries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  value="<?php echo e($queries->id); ?>" <?php echo e(old('name') == $queries->id ? 'selected' :''); ?>><?php echo e($queries->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                             

                            </div>
                                                      </div>
                               
                        <?php echo $errors->has('name')? '<p class="help-block"style="color:red;">Please Select Bizz.</p>':''; ?>

 
                        <div class="form-group">
                            <label for="state_name" class="col-sm-4 control-label">Select Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control"  id="code"  name="code"  placeholder="enter code">
                              

                            </div>
                            
                        </div>
                         <?php echo $errors->has('code')? '<p class="help-block"style="color:red;">Please Select Date.</p>':''; ?>

                        
                        <!-- <div class="form-group">-->
                        <!--    <label for="state_name" class="col-sm-4 control-label">Notes</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <textarea name="notes" class="form-control"  id="notes"   placeholder="enter notes" required>-->
                        <!--            </textarea>-->
                              

                        <!--    </div>-->
                        <!--</div>-->


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Set Expiry</button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>

                <hr />



                <div class="row">
                   
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/fetch_bizz.blade.php ENDPATH**/ ?>