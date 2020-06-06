
<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
                                <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <li> <span>All Profile Listing</span> </li>
                        </ul>
                     <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="<?php echo e(route('pro')); ?>" method="get"> <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                               
                                 <div class="form-group">
                                       <div class="select">
                                                            <select class="form-control select2" name="q" id="searchTerms">
                                                                <option value ="">Service Type</option>
                                                                 <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Advertising and Marketing">Advertising and Marketing</option>
                                                                <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Analysts">Analysts</option>
                                                                <option value="Architects">Architects</option>
                                                                <option value="Archivists & Curator">Archivists & Curator</option>
                                                                <option value="Artist">Artist</option>
                                                                <option value="Auditing & Assurance">Auditing & Assurance</option>
                                                                <option value="Authors & Writer">Authors & Writer</option>
                                                                <option value="Cartographers and Surveyor">Cartographers and Surveyor</option>
                                                                <option value="Consultant">Consultant</option>
                                                                <option value="Dancers & Choreographer">Dancers & Choreographer</option>
                                                                <option value="Interior Decorator">Interior Decorator</option>
                                                                <option value="Designer">Designer</option>
                                                                <option value="Designer">Developer</option>
                                                                <option value="Economist">Economist</option>
                                                                <option value="Governmental">Governmental</option>
                                                                <option value="IT Specialist">IT Specialist</option>
                                                                <option value="Lawyer">Lawyer</option>
                                                                <option value="Medical Practitioner">Medical Practitioner</option>
                                                                <option value="Musicians, Singers & Composers">Musicians, Singers & Composers</option>
                                                                <option value="Pharmacist">Pharmacist</option>
                                                                <option value="Physio Therapists">Physio Therapists</option>
                                                                <option value="Public Relation Officer">Public Relation Officer</option>
                                                                <option value="Repairs & Maintenance">Repairs & Maintenance</option>
                                                                <option value="Tax Expert">Tax Expert</option>
                                                                <option value="Teacher">Teacher</option>
                                                                <option value="Therapist">Therapist</option>
                                                                <option value="Trainer">Trainer</option>
                                                                <option value="Translation">Translation</option>
                                                                <option value="Translators & Interpreters">Translators & Interpreters</option>
                                                                <option value="Travel Agent">Travel Agent</option>
                                                                <option value="Visual Artists">Visual Artists</option>
                                                                <option value="Visual Artists">Web & Multimedia</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                <div class="form-group">
                                    <select class="form-control select2" name="sub_category">
                                        <option value="">Select Industry</option>
                                         
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         
                                            <?php if($category->sub_categories->count() > 0): ?>
                                                <optgroup label="<?php echo e($category->category_name); ?>">
                                                    <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  
                                                        <option value="<?php echo e($sub_category->id); ?>"><?php echo e($sub_category->category_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </optgroup>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <!--<?php $country_usage = get_option('countries_usage'); ?>-->
                                <!--<?php if($country_usage == 'all_countries'): ?>-->
                                    <div class="form-group">
                                        <select class="form-control select2" name="country">
                                            <!--<option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>-->
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                <!--<?php endif; ?>-->
                                <?php
                               // dd($countries);
                                foreach($countries as $country){
                                   // echo $country->country_name;
                                }
                                ?>
                                <div class="form-group">
                                     <select class="form-control select2" name="country">
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                                <option value="<?php echo e($country->id); ?>" ><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <!--<option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>-->
                                        <option value="">Select Location</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                            </form>
                        </div>

                    </div>


<?php
function shortDescription($fullDescription) {
$shortDescription = "";
$fullDescription = trim(strip_tags($fullDescription));
if ($fullDescription) {
// 		$initialCount = 125;
	$initialCount = 125;
		if (strlen($fullDescription) > $initialCount) {
			$shortDescription = substr($fullDescription,0,$initialCount)."…";
		} else {
			return $fullDescription;
		 }
}
return $shortDescription;
}//End of function shortDescription

?>
 <?php
					
	if(Auth::user()){
					?>
				<div class="innerListingbody" style="box-shadow: none;-webkit-box-shadow:none">

						<div>
					<span class="innerheading blue" style="background: #EA1C57!important; top: -29px !important;
    left: 19px !important;"> PRO</span>
						</div>
						
<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>

<style>

@media (max-width: 700px) {
   #mobilecustomcss{
	width: 100%;
    }
}

@media (min-width: 768px) {
   #mobilecustomcss{
	width: 50%;
    }
}



</style>
		
<?php if($ads->count() > 0): ?>

 <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
 
				<div class="topdetailintoprt" id="mobilecustomcss" style=" float: left;margin_bottom:0px;display: inline-flex;border: 1px solid #afa8a5;
    
">
<br>			    <div class="row">
			        <div class="col-md-12">
			            <div class="col-md-6" style="width:40%">
			                  <div style=" padding:6%;" >
               
					<?php if ($ad->business_image== "") { ?>
							<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
							    <img src="<?php echo url('/');?>/uploads/placeholder.png"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } else { ?>
							<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
							    <img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } ?>
						<span >	
						<p style="font-size:18px;text-transform: capitalize;">
						    <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php echo e($ad->seller_name); ?></a> </p>
							<p style="font-size:18px"><?php echo e($ad->designation); ?> </p>
                                
                                    <!--<?php echo shortDescription($ad->description);?> -->
	                               <p style="font-size:18px"> <i class="fa fa-map-marker"></i>
	                                <?php if($ad->state_name): ?> <?php echo e($ad->state->state_name); ?>    <?php endif; ?>  <?php echo e($ad->country->country_name); ?></p>
								</span>
				</div>
			            </div>
			            
			             
			              <div class="col-md-6">
			                  	<div class="socialinto" style="text-align: justify;margin-left:-19px;margin-top: 53px;">
							<span style="font-size:15px">
                            <?php echo shortDescription($ad->description);?><br/><br/> 
                            <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" class="btn theme-btn"  style="background-color:#191a50;"> VIEW </a> 
                            
							</span>
							
						</div>
			              </div>
			        </div>
			    </div>
			   
			     <!--<table border="2" width="100%">			-->
          
			
 <!--<div class="clearfix"></div>-->
					

						
						
<!--<div class="vl" style="border-left: 6px solid green;-->
<!--  height: 500px;"></div>-->
</div>
<!--</table>-->
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <?php endif; ?>
   
 <!--<div class="clearfix"></div>-->
 
				</div>
				
				<?php
	}else{
				?>
					<div class="innerListingbody" style="box-shadow: none;-webkit-box-shadow:none">

						<div>
						<span class="innerheading blue" style="background: #EA1C57!important; top: -29px !important;
    left: 19px !important;"> PRO</span>
						</div>
						
<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>

<style>

@media (max-width: 700px) {
   #mobilecustomcss{
	width: 100%;
    }
}

@media (min-width: 768px) {
   #mobilecustomcss{
	width: 50%;
    }
}

.innerheading {
    
    top: -29px !important;
    left: 19px !important;
    
}

</style>
		
<?php if($ads->count() > 0): ?>

 <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 
 
			<div class="topdetailintoprt" id="mobilecustomcss" style=" float: left;margin_bottom:0px;display: inline-flex;border: 1px solid #afa8a5;
    
">
<br>			    <div class="row">
			        <div class="col-md-12">
			            <div class="col-md-6" style="width:40%">
			                  <div style=" padding:6%;" >
               
					<?php if ($ad->business_image== "") { ?>
							<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
							    <img src="<?php echo url('/');?>/uploads/placeholder.png"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } else { ?>
							<a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>">
							    <img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } ?>
						<span >	
						<p style="font-size:18px;text-transform: capitalize;">
						    <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php echo e($ad->seller_name); ?></a> </p>
							<p style="font-size:18px"><?php echo e($ad->designation); ?> </p>
                                
                                    <!--<?php echo shortDescription($ad->description);?> -->
	                               <p style="font-size:18px"> <i class="fa fa-map-marker"></i>
	                                <?php if($ad->state_name): ?> <?php echo e($ad->state->state_name); ?>    <?php endif; ?>  <?php echo e($ad->country->country_name); ?></p>
								</span>
				</div>
			            </div>
			            
			             
			              <div class="col-md-6">
			                  	<div class="socialinto" style="text-align: justify;margin-left:-19px;margin-top: 53px;">
							<span style="font-size:15px">
                            <?php echo shortDescription($ad->description);?><br/><br/> 
                            <a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" class="btn theme-btn"  style="background-color:#191a50;"> VIEW </a> 
                            
							</span>
							
						</div>
			              </div>
			        </div>
			    </div>
			   
			     <!--<table border="2" width="100%">			-->
          
			
 <!--<div class="clearfix"></div>-->
					

						
						
<!--<div class="vl" style="border-left: 6px solid green;-->
<!--  height: 500px;"></div>-->
</div>
<!--</table>-->
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

   <?php endif; ?>
   
 <!--<div class="clearfix"></div>-->
 
				</div>
				<?php
	}
	?>
			</div>

<div class="row">
                    <div class="col-xs-12">
                        <?php echo e($ads->appends(request()->input())->links()); ?>

                    </div>
                </div>
		</div>
	</div>
	
	<style>
	.crop {
        /*width: 100px;*/
        /*height: 100px;*/
        /*overflow: hidden;*/
         width: 100px;
        height: 100px;
    }

    .crop img {
        /*width: 400px;*/
        /*height: 300px;*/
        /*margin: -75px 0 0 -100px;*/
         width: 100px;
        height: 100px;
    }
	    
	    
	</style>

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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/magas21/public_html/resources/views/pro.blade.php ENDPATH**/ ?>