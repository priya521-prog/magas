<?php
//echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;

?>

<div class="thankyou-content">
<div class="row">
      <div class="col-lg-6">
                                          <div class="box-heading">
                                                Thank you, <?php echo $nameboth;?>!
                                            </div> <div class="box-title">
                                                You now have Standard User Privileges 
                                            </div>
                                        </div> 
                                          <div class="col-lg-6"> 
                                      
                                            </div>
</div>
    <div class="row">
    <div class="col-lg-12">
          
                                       
                                        <div class="box-right">
                                           <div class="link">
                                               
                                                <!--<a href="<?php echo e(route('initiatepayments')); ?>" class="custom-button">Upgrade To Premium</a><br>-->
                                                 <a href="<?php echo e(route('premium_update')); ?>" class="custom-button">Upgrade To Premium</a><br>
                                                 
                                                  <!--<a href="<?php echo e(route('my-store')); ?>" class="custom-button">Upgrade To Premium</a><br>-->
                                              
                                            <!--<p style="color:red;font-size: 12px;">** BEFORE UPGRADING ACCOUNT TO  PREMIUM EDIT YOUR PROFILE WITH ADDRESS, FROM STANDARD ACCESS TO PREMIUM ACCESS AND ENTER AFFILIATE CODE IF YOU HAVE</p>                    -->
                                            <!--<a href="<?php echo e(route('invoice')); ?>" class="custom-button">Upgrade To Premium</a>-->
                                            </div>
                                            <div class="container-fluid">
                                                   
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="p-rate" style="font-size: 28px;text-transform:lowercase">
                                                            $49 p.a.
                                                        </div>
                                                        <div class="p-text">
                                                            Upgrade & Enjoy the Premium Features as low as $49 per annum
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7">
                                                        <ul class="p-list">
                                                            <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> (Full Profile with Photo & 1 File Upload)</li>
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Products</span> on the platform</li>
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
                                                        <div class="p-rate" style="font-size: 20px;text-transform:lowercase">
                                                            $99 p.a.
                                                        </div>
                                                        <div class="link">
                                                            <!--<a href="" class="custom-button">Bizz Benefits</a>-->
                                                            <a href="#" class="custom-button" data-toggle="modal" data-target="#myModal">Bizz Benefits</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Buy a Whitepaper
                                                        </div>
                                                        <div class="p-desc">
                                                            List a whitepaper
                                                        </div>
                                                        <div class="p-rate" style="font-size: 20px;text-transform:lowercase">
                                                            $499
                                                        </div>
                                                        <div class="link">
                                                            <!--<a href="" class="custom-button">Whitepaper Benefits</a>-->
                                                             <a href="#" class="custom-button" data-toggle="modal" data-target="#myModal1">Whitepaper Benefits</a>
                                                        </div>
                                                    </div>

                                                    <div class="feature">
                                                        <div class="p-heading">
                                                            Associate and Earn  
                                                        </div>
                                                        <div class="p-desc">
                                                            Become a member
                                                        </div>
                                                        <div class="p-rate" style="font-size: 20px;text-transform:lowercase">
                                                            $999 p.a.
                                                        </div>
                                                        <div class="link">
                                                            <!--<a href="<?php URL::to('/');?>" class="custom-button">Associate Benefits</a>-->
                                                            <a href="#" class="custom-button" data-toggle="modal" data-target="#myModal2">Associate Benefits</a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                </div>

                                            </div>
</div>
</div>
</div>
            <!-- /.row -->

<link rel="stylesheet" href="<?php echo e(asset('assets/css/globalp.css')); ?>">
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">BIZZ BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            
  <li>Premium Homepage highlighter with Free Edit Option

</li>
  <li>Full Page Profile with one Image, Banner & File Upload</li>
  <li>Dimensions 100&100</li>
  <li>Viewership Analytics & Private Feedback Channel</li>
  <li>Hyperlinking to website </li>
  <li>Intergrated SEO Benefit</li>
  <li>Generate Direct Leads

</li>
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
 <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">WHITEPAPER BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            
  <li>Promotion & Visibility on MAGAS and its Affiliate Marketing Channels</li>
  <li>Receive Direct Enquiries and Feedback</li>
  <li>Lisitng on Platform & Viewership Analytics </li>
  <li>PAAS Benefits in terms of Networking & Service Delivery </li>
  <li>Discount on all Services Listed on Portal </li>
 
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">ASSOCIATE BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            
  <li>Brand License to operate as "Associate" </li>
  <li>Recurring Commission upto 1 year for clients introduced </li>
  <li>Discount on Services from our channel partners  </li>
  <li>PAAS Benefits in terms of Networking & Service Delivery  </li>
  <li> Free BIZZ /PRO Listing on MAGAS Platform </li>
 
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
<?php /**PATH /home/sermagas/public_html/resources/views/admin/standarddashboard.blade.php ENDPATH**/ ?>