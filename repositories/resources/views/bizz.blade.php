@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

	<style>
				    .innerheading {
    top: -49px !important;
    left: 0px !important;
    padding: 10px 10px !important;
}
@media (max-width: 700px) {
   #mobilecustomcss{
	width: 100%;
    }
}

@media (min-width: 768px) {
   #mobilecustomcss{
	width: 25%;
    }
}    



.innerListingbody {
    padding: 0px !important;
}
.innerListingbody ul li {
    /*width: 28%;*/
    padding-bottom: 38px !important;
    margin: 0px 21px -30px !important;
}


				</style>
     <!--<link rel="stylesheet" href="{{ asset('assets/main.css') }}">-->
  	<div class="main">
            
		<div class="custom-container">
        
               
       
			<div class="listingbody">
        <!--<div class="container">-->


                        <ul class="breadcrumb">
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                         
                            <!--<li> <span>All Business Listing</span> </li>-->
                            <li> <span>All Bizz</span> </li>
                        </ul>
                    <!--</div>-->
<!--<div class="well" style="border: 1px solid #591546;padding-top: 6px;padding-bottom: 1px;border-radius: 17px">-->


 
                    <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="{{ route('bizz') }}" method="get"> @csrf
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                               
                                <div class="form-group">
                                       <div class="select">
                                                            <select class="form-control select2" name="q" id="searchTerms">
                                                                
                                                              <?php  if(!empty($itemss)){ ?>
                                                              
                                                                 <option value ="<?php $itemss[0]; ?>"><?php echo $itemss[0]; ?></option>
                                                              
                                                              <?php }else{ ?>
                                                              
                                                                 <option value ="">Service Type</option>
                                                                
                                                                <?php } ?>
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
                                        
                                        <?php  
                                        
                                        if(!empty($itemssc)){ ?>
                                        
                                         @foreach($categories as $category)
                                         
                                            @if($category->sub_categories->count() > 0)
                                                <optgroup label="{{ $category->category_name }}">
                                                    @foreach($category->sub_categories as $sub_category)
                                                    
                                                   <?php if($itemssc[0] == $sub_category->id){ ?>
                                                  
                                                        <option value="{{ $sub_category->id }}">{{ $sub_category->category_name }}</option>
                                                     <?php }?>
                                                       
                                                    @endforeach
                                                </optgroup>
                                            @endif
                                        @endforeach
                                            
                                           <option value="">Select Industry</option>
                                                  
                                           <?php  }else{?>
                                                 
                                                 
                                                  <option value="">Select Industry</option>
                                        
                                        <?php } ?>
                                            
                                              
                                        @foreach($categories as $category)
                                         
                                            @if($category->sub_categories->count() > 0)
                                                <optgroup label="{{ $category->category_name }}">
                                                    @foreach($category->sub_categories as $sub_category)
                                                  
                                                        <option value="{{ $sub_category->id }}">{{ $sub_category->category_name }}</option>
                                                       
                                                    @endforeach
                                                </optgroup>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                
                          
                                <!--@php $country_usage = get_option('countries_usage'); @endphp-->
                                <!--@if($country_usage == 'all_countries')-->
                                    <div class="form-group">
                                        <select class="form-control select2" name="country">
                                            <!--<option value="">@lang('app.select_a_country')</option>-->
                                            
                                    
                                        
                                            
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            @foreach($countries as $country)
                                            
                                                <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <!--@endif-->
                                <?php
                               // dd($countries);
                                foreach($countries as $country){
                                   // echo $country->country_name;
                                }
                                ?>
                                <div class="form-group">
                                     <select class="form-control select2" name="country">
                                         
                                         <?php  
                                        
                                        if(!empty($itemsscc)){ ?>
                                        
                                        @foreach($countries as $country)
                                        
                                         <?php if($itemsscc[0] == $country->id){ ?>
                                               
                                               <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                                               
                                         <?php } ?>
                                           
                                        @endforeach
                                            
                                           <option value="">Select Country</option>
                                                  
                                           <?php  }else{?>
                                                 
                                                  <option value="">Select Country</option>
                                                 
                                        <?php } ?>
                                            
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            @foreach($countries as $country)
                                            
                                                <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <!--<option value=""> @lang('app.select_state') </option>-->
                                        
                                        <option value="">Select Location</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                                
                                
                            </form>
                        </div>

                    </div>

</div>
 <?php
					
	if(Auth::user()){
					?>
				<div class="innerListingbody" style="">
				   
				    <!--<div class="innerheading red" style="float:rght">  <li> <a href="{{ route('bizz1') }}">POST A WHITEPAPER</a> </li></div>-->
					<div class="innerheading violet" style="background-color:#EA1C57!important">
						BIZZ
					</div>
					

					

@if($ads->count() <= 0)

<h3 style="color: #122067 !important;"> No Records Found.</h3>
   @endif

@if($ads->count() > 0 && $ads->count() != 1)


					<ul>
                          @foreach($ads as $ad)
                          
                          <div class="topdetailintoprt" id="mobilecustomcss" style="float: left;margin_bottom:0px;display: inline-flex;border: 1px solid #afa8a5;
    
">
<br>			 
<br>			    <div class="row">
			        <div class="col-md-8" style="width:100%">
			            <div class="col-md-6" style="width:100%;padding-right: 40px !important;">
			                  <div style="padding:6%;" >
                      
                        <li style="width:100%">
                      
                         <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                             
                             <div class="compLogo">
                            <?php if ($ad->business_image== "") { ?>
                            
                            <img src="<?php echo url('/');?>/uploads/placeholder.png" class="rounded-circle" alt="Cinque Terre" width="170" height="170"> 
                            
                            
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<?php } else { ?>
				
			
				
				
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" class="rounded-circle" alt="Cinque Terre" width="170" height="170">
				<?php } ?>
				
			
						</div><br>          				
						<!--<h3 >{{ $ad->title }}</h3>-->
						<h2 style="font-size: 15px;text-transform: capitalize; text-transform: uppercase;" >{{ $ad->title }}</h2>
						
						<span style="font-size: 18px; line-height: 2;">{{ $ad->sub_category->category_name }}</span><br>
						
						<span style="font-size: 16px; line-height: 2;">{{ $ad->servicename }}</span><br>
							
						<i class="fa fa-map-marker" style="font-size: 16px; "></i><span style="font-size: 14px; ">  {{ $ad->country->country_name  }} </span>
                           </a>

				<!--<div class="compLogo">-->
    <!--                                                                   <?php if ($ad->business_image== "") { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<!--<?php } else { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px;height:150px">-->
				<!--<?php } ?>-->
				<!--		</div>          				-->
						<!--<h3 >{{ $ad->title }}</h3>-->
				<!--		<h2 style="font-size: 12px;text-transform: capitalize;">{{ $ad->title }}</h2>-->
				<!--		<span style="font-size: 12px;">{{ $ad->sub_category->category_name }}</span><br>-->
				<!--			<span style="font-size: 12px;">{{ $ad->servicename }}</span><br>-->
				<!--		<span style="font-size: 12px;"><i class="fa fa-map-marker"></i>{{ $ad->country->country_name  }}</span>-->
    <!--                       </a>-->
					</li>
					</div>
					</div>
					</div>
					</div>
					</div>
					
										


						<!--<li>-->
						    <!--<div class="col-md-3">-->
      <!--                                              <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
						<!--	<div class="topproductimgprt" style="width:300px">-->
						<!--			<?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" >-->
						<!--			<?php } ?>-->

						<!--		<div class="imgcont">-->
						<!--			{{ $ad->title }}-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2>{{ $ad->slug }}</h2>-->
						<!--	<h3>{{ $ad->sub_category->category_name }}</h3>-->
					        	<!--<span>	{{ $ad->created_at }}</span>-->
					          	<!--<h3>{{ $ad->description }}</h3>   -->
					          
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		{{ $ad->country->country_name  }}-->
							<!--</span>-->
						<!--	</a>-->
							<!--</div>-->
						<!--</li>-->


					 @endforeach
					</ul>
   @endif
   
   @if($ads->count() <= 1)
   
   
   
   	<ul>
                          @foreach($ads as $ad)
                          
                          
                        
                          <li style="width:50%">
                             
                         <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                             
                             <div class="compLogo">
                            <?php if ($ad->business_image== "") { ?>
                            
                            <img src="<?php echo url('/');?>/uploads/placeholder.png" class="rounded-circle" alt="Cinque Terre" width="170" height="170"> 
                            
                            
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<?php } else { ?>
				
			
				
				
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" class="rounded-circle" alt="Cinque Terre" width="170" height="170">
				<?php } ?>
				
			
						</div><br>          				
						<!--<h3 >{{ $ad->title }}</h3>-->
						<h2 style="font-size: 15px;text-transform: capitalize; text-transform: uppercase;" >{{ $ad->title }}</h2>
						
						<span style="font-size: 16px; line-height: 2;">{{ $ad->sub_category->category_name }}</span><br>
						
							<span style="font-size: 15px; line-height: 2;">{{ $ad->servicename }}</span><br>
							
						<i class="fa fa-map-marker" style="font-size: 15px;"></i><span style="font-size: 14px; ">  {{ $ad->country->country_name  }} </span>
                           </a>

				<!--<div class="compLogo">-->
    <!--                       <?php if ($ad->business_image== "") { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<!--<?php } else { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px;height:150px">-->
				<!--<?php } ?>-->
				<!--		</div>          				-->
						<!--<h3 >{{ $ad->title }}</h3>-->
				<!--		<h2 style="font-size: 12px;text-transform: capitalize;">{{ $ad->title }}</h2>-->
				<!--		<span style="font-size: 12px;">{{ $ad->sub_category->category_name }}</span><br>-->
				<!--			<span style="font-size: 12px;">{{ $ad->servicename }}</span><br>-->
				<!--		<span style="font-size: 12px;"><i class="fa fa-map-marker"></i>{{ $ad->country->country_name  }}</span>-->
    <!--                       </a>-->
					</li>
										


						<!--<li>-->
						    <!--<div class="col-md-3">-->
      <!--                                              <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
						<!--	<div class="topproductimgprt" style="width:300px">-->
						<!--			<?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" >-->
						<!--			<?php } ?>-->

						<!--		<div class="imgcont">-->
						<!--			{{ $ad->title }}-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2>{{ $ad->slug }}</h2>-->
						<!--	<h3>{{ $ad->sub_category->category_name }}</h3>-->
					        	<!--<span>	{{ $ad->created_at }}</span>-->
					          	<!--<h3>{{ $ad->description }}</h3>   -->
					          
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		{{ $ad->country->country_name  }}-->
							<!--</span>-->
						<!--	</a>-->
							<!--</div>-->
						<!--</li>-->


					 @endforeach
					</ul>
   
   @endif
				</div>
				<?php
	}else{
				?>
				
				<style>
				   .innerheading {
    top: -49px !important;
    left: 0px !important;
    padding: 10px 10px !important;
}
				</style>
				
				<div class="innerListingbody" style="">
				    
				    <div class="innerheading violet" style="background-color:#EA1C57!important">
						BIZZ
					</div>
				   
    <!--<div class="innerheading red" style="float:rght">  <li> <a href="{{ route('bizz1') }}">POST A WHITEPAPER</a> </li></div>-->
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->

					
					

@if($ads->count() <= 0)

<h3 style="color: #122067 !important;"> No Records Found.</h3>
   @endif

@if($ads->count() > 0 && $ads->count() != 1)


					<ul>
                          @foreach($ads as $ad)
                          
                          <div class="topdetailintoprt" id="mobilecustomcss" style="float: left;margin_bottom:0px;display: inline-flex;border: 1px solid #afa8a5;
    
">
<br>			 
<br>			    <div class="row">
			        <div class="col-md-8" style="width:100%">
			            <div class="col-md-6" style="width:100%;padding-right: 40px !important;">
			                  <div style="padding:6%;" >
                      
                        <li style="width:100%">
                      
                         <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                             
                             <div class="compLogo">
                            <?php if ($ad->business_image== "") { ?>
                            
                            <img src="<?php echo url('/');?>/uploads/placeholder.png" class="rounded-circle" alt="Cinque Terre" width="170" height="170"> 
                            
                            
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<?php } else { ?>
				
			
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" class="rounded-circle" alt="Cinque Terre" width="170" height="170">
				<?php } ?>
				
			
						</div><br>          				
						<!--<h3 >{{ $ad->title }}</h3>-->
						<h2 style="font-size: 18px;text-transform: capitalize; text-transform: uppercase;" >{{ $ad->title }}</h2>
						
						<span style="font-size: 18px; line-height: 2;">{{ $ad->sub_category->category_name }}</span><br>
						
						<span style="font-size: 16px; line-height: 2;">{{ $ad->servicename }}</span><br>
							
						<i class="fa fa-map-marker" style="font-size: 15px; "></i><span style="font-size: 16px;">  {{ $ad->country->country_name  }} </span>
                           </a>

				<!--<div class="compLogo">-->
    <!--                                                                   <?php if ($ad->business_image== "") { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<!--<?php } else { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px;height:150px">-->
				<!--<?php } ?>-->
				<!--		</div>          				-->
						<!--<h3 >{{ $ad->title }}</h3>-->
				<!--		<h2 style="font-size: 12px;text-transform: capitalize;">{{ $ad->title }}</h2>-->
				<!--		<span style="font-size: 12px;">{{ $ad->sub_category->category_name }}</span><br>-->
				<!--			<span style="font-size: 12px;">{{ $ad->servicename }}</span><br>-->
				<!--		<span style="font-size: 12px;"><i class="fa fa-map-marker"></i>{{ $ad->country->country_name  }}</span>-->
    <!--                       </a>-->
					</li>
					</div>
					</div>
					</div>
					</div>
					</div>
										


						<!--<li>-->
						    <!--<div class="col-md-3">-->
      <!--                                              <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
						<!--	<div class="topproductimgprt" style="width:300px">-->
						<!--			<?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" >-->
						<!--			<?php } ?>-->

						<!--		<div class="imgcont">-->
						<!--			{{ $ad->title }}-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2>{{ $ad->slug }}</h2>-->
						<!--	<h3>{{ $ad->sub_category->category_name }}</h3>-->
					        	<!--<span>	{{ $ad->created_at }}</span>-->
					          	<!--<h3>{{ $ad->description }}</h3>   -->
					          
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		{{ $ad->country->country_name  }}-->
							<!--</span>-->
						<!--	</a>-->
							<!--</div>-->
						<!--</li>-->


					 @endforeach
					</ul>
   @endif
   
   @if($ads->count() <= 1)
   
   	<ul>
                          @foreach($ads as $ad)
                          
                        
                          <li style="width:50%">
                             
                         <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                             
                             <div class="compLogo">
                            <?php if ($ad->business_image== "") { ?>
                            
                            <img src="<?php echo url('/');?>/uploads/placeholder.png" class="rounded-circle" alt="Cinque Terre" width="170" height="170"> 
                            
                            
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<?php } else { ?>
				
			
				
				
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" class="rounded-circle" alt="Cinque Terre" width="170" height="170">
				<?php } ?>
				
			
						</div><br>          				
						<!--<h3 >{{ $ad->title }}</h3>-->
						<h2 style="font-size: 18px;text-transform: capitalize;text-transform: uppercase;" >{{ $ad->title }}</h2>
						
						<span style="font-size: 18px;line-height: 2;">{{ $ad->sub_category->category_name }}</span><br>
						
						<span style="font-size: 16px;line-height: 2;">{{ $ad->servicename }}</span><br>
							
						<i class="fa fa-map-marker" style="font-size: 15px; "></i><span style="font-size: 16px;">{{ $ad->country->country_name  }}</span>
                        </a>

				<!--<div class="compLogo">-->
    <!--                                                                   <?php if ($ad->business_image== "") { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">-->
				<!--<?php } else { ?>-->
				<!--<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px;height:150px">-->
				<!--<?php } ?>-->
				<!--		</div>          				-->
						<!--<h3 >{{ $ad->title }}</h3>-->
				<!--		<h2 style="font-size: 12px;text-transform: capitalize;">{{ $ad->title }}</h2>-->
				<!--		<span style="font-size: 12px;">{{ $ad->sub_category->category_name }}</span><br>-->
				<!--			<span style="font-size: 12px;">{{ $ad->servicename }}</span><br>-->
				<!--		<span style="font-size: 12px;"><i class="fa fa-map-marker"></i>{{ $ad->country->country_name  }}</span>-->
    <!--                       </a>-->
					</li>
										


						<!--<li>-->
						    <!--<div class="col-md-3">-->
      <!--                                              <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
						<!--	<div class="topproductimgprt" style="width:300px">-->
						<!--			<?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" >-->
						<!--			<?php } ?>-->

						<!--		<div class="imgcont">-->
						<!--			{{ $ad->title }}-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2>{{ $ad->slug }}</h2>-->
						<!--	<h3>{{ $ad->sub_category->category_name }}</h3>-->
					        	<!--<span>	{{ $ad->created_at }}</span>-->
					          	<!--<h3>{{ $ad->description }}</h3>   -->
					          
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		{{ $ad->country->country_name  }}-->
							<!--</span>-->
						<!--	</a>-->
							<!--</div>-->
						<!--</li>-->


					 @endforeach
					</ul>
   
   @endif
				</div>
<?php
}
?>

                </div>
<div class="row">
                    <div class="col-xs-12">
                        {{ $ads->appends(request()->input())->links() }}
                    </div>
                </div>
			</div>
		</div>
	</div>

@endsection


@section('page-js')
   

 <script>
        $(document).ready(function() {
            $('#shortBySelect').change(function () {
                var form_input = $('#listingFilterForm').serialize();
                location.href = '{{ route('listing') }}?' + form_input + '&shortBy=' + $(this).val();
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
                    $('#sub_category_select').html('<option value="">@lang('app.select_a_sub_category')</option>');
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
                    $('#brand_select').html('<option value="">@lang('app.select_a_brand')</option>');
                    $('#brand_select').select2();
                }
                $('#loaderListingIcon').hide('slow');
            }else if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> @lang('app.select_state') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('<option value="" selected> @lang('app.select_state') </option>');
                    $('#state_select').select2();
                }
                $('#loaderListingIcon').hide('slow');

            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="" selected> @lang('app.select_city') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('<option value="" selected> @lang('app.select_city') </option>');
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
                    url : '{{ route('get_sub_category_by_category') }}',
                    data : { category_id : category_id,  _token : '{{ csrf_token() }}' },
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
                    url : '{{ route('get_brand_by_category') }}',
                    data : { category_id : category_id,  _token : '{{ csrf_token() }}' },
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
                    url : '{{ route('get_state_by_country') }}',
                    data : { country_id : country_id,  _token : '{{ csrf_token() }}' },
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
                    url : '{{ route('get_city_by_state') }}',
                    data : { state_id : state_id,  _token : '{{ csrf_token() }}' },
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
                    url : '{{ route('switch_grid_list_view') }}',
                    data : { grid_list_view : 'grid',  _token : '{{ csrf_token() }}' },
                });
            });
            $('#showListView').click(function(){
                $('.ad-box-grid-view').hide();
                $('.ad-box-list-view').show();
                $.ajax({
                    type : 'POST',
                    url : '{{ route('switch_grid_list_view') }}',
                    data : { grid_list_view : 'list',  _token : '{{ csrf_token() }}' },
                });
            });
        });
    </script>
    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection
