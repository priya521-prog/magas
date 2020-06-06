<?php
//echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;
?>

<div class="thankyou-content">
                                        <div class="box-left">
                                             <div class="box-heading">
                                                Thank you, <?php echo $nameboth;?>!
                                            </div>
                                            <div class="box-title">
                                                You now have Standard User Privileges 
                                            </div>
                                            <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                   
                                                    <div class="clearfix"></div>

                                                </div>
                                        </div>
                                        <div class="box-right">
                                            <div class="link">
                                                <a href="<?php echo e(route('initiatepayments')); ?>" class="custom-button">Upgrade To Premium</a>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="p-rate">
                                                            $49
                                                        </div>
                                                        <div class="p-text">
                                                            Upgrade & Enjoy the Premium Features as low as $49 per annum
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <ul class="p-list">
                                                            <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> your Full Profile with Photo with One</li>
                                                            <li>File Upload</li>
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Content</span> on the platform</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="p-features">

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Bizz
                                                        </div>
                                                        <div class="p-desc">
                                                            Add your business
                                                        </div>
                                                        <div class="p-rate">
                                                            $99
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">View a Bizz</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="custom-button">List a Whitepaper</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Earn and Associate
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate">
                                                            $999
                                                        </div>
                                                        <div class="link">
                                                            <a href="<?php URL::to('/');?>" class="custom-button">Membership Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

                                            </div>
</div>
            <!-- /.row -->

<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
<?php /**PATH /home/sermagas/public_html/beta/resources/views/admin/standarddashboard.blade.php ENDPATH**/ ?>