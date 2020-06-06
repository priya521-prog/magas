<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('social-meta'); ?>
    <meta property="og:title" content="<?php echo e($ad->title); ?>">
    <meta property="og:description" content="<?php echo e(substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160)); ?>">
    <?php if($ad->media_img->first()): ?>
        <meta property="og:image" content="<?php echo e(media_url($ad->media_img->first(), true)); ?>">
    <?php else: ?>
        <meta property="og:image" content="<?php echo e(asset('uploads/placeholder.png')); ?>">
    <?php endif; ?>
    <meta property="og:url" content="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!--  Non-Essential, But Recommended -->
    <meta name="og:site_name" content="<?php echo e(get_option('site_name')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fotorama-4.6.4/fotorama.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/owl.carousel/assets/owl.carousel.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>





	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
                                <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <?php if($ad->category): ?>
                            <li><a href="<?php echo e(route('bizz', ['category' => $ad->category->id])); ?>">  <?php  echo ucwords($ad->sub_category->category_name);?> </a> </li>
                            <?php endif; ?>
                            <li> <span><?php echo e($ad->title); ?></span> </li>
                        </ul>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="detailbannerprt">

							<div class="innerheading violet">
								BIZZ
							</div>
							<img src="../../uploads/theme/banner.jpg">

							<div class="innercontDetail">
								<div class="">
									<?php if ($ad->business_image== "") { ?>
									<img src="../../uploads/placeholder.png" style="width:300px">
									<?php } else { ?>
									<img src="../../uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:300px">
									<?php } ?>
								</div>

								
							</div>
				</div>

				<div class="twodetailpanel row">
					<div class="col-md-8">
						<div class="leftquestionprt">
							<h2><?php echo e($ad->title); ?></h2>

							<div class="innerinfopannel">
									
                                                                        <p><?php echo html_entity_decode($ad->description); ?> </p>
								</div>

<!--												<div class="arrowprt">
													<span>
														<img src="../../uploads/theme/previous-arrow.png">
														Previous
													</span>
													<span>
															<img src="../../uploads/theme/next-arrow.png">
															Next
														</span>
												</div>-->

						</div>
					</div>
					<div class="col-md-4">
						<div class="gettouchprt">
							<h2>Get in touch</h2>
							<button onclick="downloadthefile('<?php echo e($ad->pdffilename); ?>');" >Download Brochure</button>

<script>
function downloadthefile(filenamecustom){
if(filenamecustom !="") {
window.location = "<?php echo url('/');?>/uploads/pdf/<?php echo e($ad->pdffilename); ?>";
}else{
alert("No Documents found, Please write to info@magas.ae");
}
}
</script>
							<span><?php echo e($ad->seller_email); ?></span>
							<span><?php echo e($ad->seller_phone); ?></span>
							<span><?php echo e($ad->website); ?></span>
							<span><?php echo e($ad->category->category_name); ?></span>
                                                        
							<span>
									<i class="fa fa-map-marker"></i>
									<?php echo $ad->full_address(); ?>

							</span>

														<span>
	<a href="javascript:;" id="save_as_favorite" data-slug="<?php echo e($ad->slug); ?>">
                                    <?php if( ! $ad->is_my_favorite()): ?>
                                        <i class="fa fa-star-o"></i> <?php echo app('translator')->get('app.save_ad_as_favorite'); ?>
                                    <?php else: ?>
                                        <i class="fa fa-star"></i> <?php echo app('translator')->get('app.remove_from_favorite'); ?>
                                    <?php endif; ?>
                                </a></span>
							<div class="googlemapprt">
								<label>Google Map</label>
								<img src="../../uploads/theme/map.jpg">
							</div>
							<div class="viewsPrt">
								<i class="fa fa-share-alt " id="sharethis"></i>
								<?php echo e($ad->view); ?>  views
							</div>



<button>send a private feedback</button></a>
<div class="well well-sm">
                    <form action="<?php echo e(route('contact_us')); ?>" method="post" onsubmit="return myFunction()"> <?php echo csrf_field(); ?>
<section class='rating-widget'>
  
  <!-- Rating Stars Box -->
  <div class='rating-stars text-center'>
    <ul id='stars'>
      <li class='star' title='Poor' data-value='1'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5'>
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>
  </div>
  
  <div class='success-box'>
    <div class='text-message'></div>
  </div>
  
  
  
</section>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group <?php echo e($errors->has('name')? 'has-error':''); ?>">
                                    <label for="name"><?php echo app('translator')->get('app.name'); ?></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo app('translator')->get('app.enter_name'); ?>" value="<?php echo e(old('name')); ?>" required="required" />
                                    <?php echo $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':''; ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('email')? 'has-error':''); ?>">
                                    <label for="email"><?php echo app('translator')->get('app.email_address'); ?></label>
                                  
                                
                                        <input type="email" class="form-control" id="email" placeholder="<?php echo app('translator')->get('app.enter_email_address'); ?>" name="email" value="<?php echo e(old('email')); ?>" required="required" />
                             
                                    <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>


                                </div>

                                <div class="form-group <?php echo e($errors->has('message')? 'has-error':''); ?>">
                                    <label for="name"><?php echo app('translator')->get('app.message'); ?></label>
                                    <textarea name="message" id="message" class="form-control" required="required" placeholder="<?php echo app('translator')->get('app.message'); ?>"><?php echo e(old('message')); ?></textarea>
                                    <?php echo $errors->has('message')? '<p class="help-block">'.$errors->first('message').'</p>':''; ?>

                                </div>
                            </div>
<input type ="hidden" name="rating" id="rating" >
<input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> <?php echo app('translator')->get('app.send_message'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="clearfix"></div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script src="<?php echo e(asset('assets/plugins/fotorama-4.6.4/fotorama.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/SocialShare/SocialShare.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/form-validator/form-validator.min.js')); ?>"></script>

    <script>
        $('#sharethis').ShareLink({
            title: '<?php echo e($ad->title); ?>', // title for share message
            text: '<?php echo e(substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160)); ?>', // text for share message

            <?php if($ad->media_img->first()): ?>
            image: '<?php echo e(media_url($ad->media_img->first(), true)); ?>', // optional image for share message (not for all networks)
            <?php else: ?>
            image: '<?php echo e(asset('uploads/placeholder.png')); ?>', // optional image for share message (not for all networks)
            <?php endif; ?>
            url: '<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>', // link on shared page
            class_prefix: 's_', // optional class prefix for share elements (buttons or links or everything), default: 's_'
            width: 640, // optional popup initial width
            height: 480 // optional popup initial height
        })
    </script>
    <script>
        $.validate();
    </script>
    <script>
        $(document).ready(function(){
            $(".themeqx_new_regular_ads_wrap").owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                },
                navText : ['<i class="fa fa-arrow-circle-o-left"></i>','<i class="fa fa-arrow-circle-o-right"></i>']
            });
        });
    </script>
    <script>
        $(function(){
            $('#onClickShowPhone').click(function(){
                $('#ShowPhoneWrap').html('<i class="fa fa-phone"></i> <?php echo e($ad->seller_phone); ?>');
            });

            $('#save_as_favorite').click(function(){
                var selector = $(this);
                var slug = selector.data('slug');

                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('save_ad_as_favorite')); ?>',
                    data : { slug : slug, action: 'add',  _token : '<?php echo e(csrf_token()); ?>' },
                    success : function (data) {
                        if (data.status == 1){
                            selector.html(data.msg);
                        }else {
                            if (data.redirect_url){
                                location.href= data.redirect_url;
                            }
                        }
                    }
                });
            });

            $('button#report_ad').click(function(){
                var reason = $('[name="reason"]').val();
                var email = $('[name="email"]').val();
                var message = $('[name="message"]').val();
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                var error = 0;
                if(reason.length < 1){
                    $('#reason_info').html('<p class="text-danger">Reason required</p>');
                    error++;
                }else {
                    $('#reason_info').html('');
                }
                if(email.length < 1){
                    $('#email_info').html('<p class="text-danger">Email required</p>');
                    error++;
                }else {
                    if ( ! regex.test(email)){
                        $('#email_info').html('<p class="text-danger">Valid email required</p>');
                        error++;
                    }else {
                        $('#email_info').html('');
                    }
                }
                if(message.length < 1){
                    $('#message_info').html('<p class="text-danger">Message required</p>');
                    error++;
                }else {
                    $('#message_info').html('');
                }

                if (error < 1){
                    $('#loadingOverlay').show();
                    $.ajax({
                        type : 'POST',
                        url : '<?php echo e(route('report_ads_pos')); ?>',
                        data : { reason : reason, email: email,message:message, slug:'<?php echo e($ad->slug); ?>',  _token : '<?php echo e(csrf_token()); ?>' },
                        success : function (data) {
                            if (data.status == 1){
                                toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                            }else {
                                toastr.error(data.msg, '<?php echo app('translator')->get('app.error'); ?>', toastr_options);
                            }
                            $('#reportAdModal').modal('hide');
                            $('#loadingOverlay').hide();
                        }
                    });
                }
            });

            $('#replyByEmailForm').submit(function(e){
                e.preventDefault();
                var reply_email_form_data = $(this).serialize();

                $('#loadingOverlay').show();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('reply_by_email_post')); ?>',
                    data : reply_email_form_data,
                    success : function (data) {
                        if (data.status == 1){
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }else {
                            toastr.error(data.msg, '<?php echo app('translator')->get('app.error'); ?>', toastr_options);
                        }
                        $('#replyByEmail').modal('hide');
                        $('#loadingOverlay').hide();
                    }
                });
            });


  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 0) {
        msg = "You are rating  " + ratingValue + " stars for this Business listing";

	 document.getElementById("rating").value=ratingValue;
    }
    responseMessage(msg);
    
  });




        });

function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html( msg );
}

function myFunction() {
   var checkrating = document.getElementById("rating").value;
   if(checkrating <=0) {
	alert("Please rate the Business.");
	return false;
   } 
}
    </script>

<style>
.success-box {
  padding:10px 10px;
  border:1px solid #eee;
  background:#f9f9f9;
}

.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}

.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#888;
}



/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#fac30f;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#fac30f;
}


</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/modern/bizz_ad.blade.php ENDPATH**/ ?>