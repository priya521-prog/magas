<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  	<div class="main">
		<div class="custom-container">
		    
		  <!--  <div class="well" style="border: 1px solid #591546;padding-top: 6px;padding-bottom: 1px;border-radius: 17px">-->
    <!--         <div class="modern-home-search-bar-wrap">-->
    <!--                    <div class="search-wrapper" style="margin-top: -16px;-->
    <!--margin-bottom: -45px;">-->
                             <?php
                             //$string='';


                            //  foreach($ads as $ad){
                            //      echo $ad;
                            //  }
		  // dd($ads-user_id);
		    ?>
		    	<div class="listingbody" style="margin-top: 10px;">
		    	     <div class="well" style="border: 1px solid #591546;padding-top: 6px;padding-bottom: 1px;border-radius: 17px">
                        <div class="search-wrapper">
                            <form class="form-inline" action="<?php echo e(route('inmail_search')); ?>" method="get"> <?php echo csrf_field(); ?>
                            
                                <div class="form-group">
                                   
                                    <h3>SEARCH FILTERS</h3>
                               
                                </div>
                               <!--<div class="form-group">-->
                                    <!--<input type="text"  class="form-control" id="searchTerms" name="q" value="<?php echo e(request('q')); ?>" placeholder="<?php echo app('translator')->get('app.search___'); ?>" />-->
                                     <!--<input type="text"  class="form-control" id="searchTerms" name="q" value="<?php echo e(request('q')); ?>" placeholder="Service Type" />-->
                                     
                                <!--</div>-->
                                
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
                                        <select class="form-control select2" name="country">
                                            <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>
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
                                        <option value=""> <?php echo app('translator')->get('app.select_state'); ?> </option>
                                    </select>
                                </div>
                                

                                <button type="submit" class="btn theme-btn" style="background:#1f2152"> <i class="fa fa-search"></i> FIND</button>
                            </form>
                        </div>

                    </div>
		   
<?php if($ads->count() <= 0): ?>

<p> No Records Found.</p>
   <?php endif; ?>
 
<div class="innerListingbody">
    
                  
					<div class="innerheading green" style="background-color:#EA1C57!important">
						SEARCH RESULTS
					</div>
					<?php
					dd($user_ids);
					?>
					  <!--<button>Message</button>-->
					  <?php
					  
				// 	  foreach($ads as $ad){
					      
				// 	   echo $ad->title;
				// 	   // echo $arr_id;
					   
				// // 	    $res=implode(' ',$arr_id);
				// // 	  dd($res);
				// 	  }
					  
					  ?>
					  	<?php
					  //	dd($ads);
					  	?>
                                 
                                                	 
<?php if($ads->count() > 0): ?>
					 <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo $ad->user_id.","; 
				// 	$res=$ad->user_id.",";
				// 	$arr=array();
				// 	echo $arr;
				
				// 	echo $res;
					?>
					
				
					 	<!--<h3><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php //echo $ad->user->name; ?></a></h3>-->
					 	<!--<div><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>"><?php //echo $ad->title; ?></a></div>-->




					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  <form action="<?php echo e(route('pending-comment')); ?>" method="post" > <?php echo csrf_field(); ?>
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  
                                    <!--<input type="text" class="form-control" id="name" name="name" placeholder="comments"  value=""/>-->
                                   <textarea name="name" class="form-control" id="name"  placeholder="comments"  value="<?php ?>"><?php echo "hi"; ?></textarea>
                                </div>
                               
                            </div>
                              <input type="text" name="dataid" id="dataid" value="<?php echo "hi"; ?> "/>

                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
					
					 <?php
					 // echo $arrays[0]['user_id'];
					//  dd($arrays[0]['title'].$arrays[1]['title'].$arrays[2]['title']);
				
					  // dd($arrays[1]['user_id']);
					  ?>
					  <button data-id="<?php echo "hi"; ?>"  onclick="$('#dataid').val($(this).data('id')); $('#myModal').modal('show');" >Message</button>
					   
					
   <?php endif; ?>
   </div>
				</div>
			</div>
</div>
 <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Enter Message</h3>
          
          
        </div>
        <div class="modal-body ">
         

           
                    <form action="<?php echo e(route('pending-comment')); ?>" method="post" > <?php echo csrf_field(); ?>
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  
                                    <!--<input type="text" class="form-control" id="name" name="name" placeholder="comments"  value=""/>-->
                                   <textarea name="name" class="form-control" id="name"  placeholder="comments"  value="<?php ?>"></textarea>
                                </div>
                               
                            </div>
                              <input type="text" name="dataid" id="dataid" value=" "/>

                            
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div> <!--modal-->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/modern/inmailres_search.blade.php ENDPATH**/ ?>