@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection



@section('main')





	<div class="main" >
		<div class="custom-container">
		     <ul class="breadcrumb">
		         	<div class="listingbody">
		         	    <ul>
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                           
                            <li> <span>{{ $ad->title }}</span> </li>
                        </ul>
                        </div>
                        
                                     <div class="innerListingbody" >
					<div class="innerheading yellow">
						PROJECTS 
					</div>

					<div class="topdetailintoprt">
						
						<div class="profinto">
						    	<div class="infoPanel">
						    	    <h2>{{ $ad->title }} </h2>	
							{!!html_entity_decode($ad->description)!!} 
						</div>
						    <span><?php  echo $ad->seller_name;?></span>
							<!--<span>{{ $ad->seller_name }} </span>-->
						
														<span>
								<i class="fa fa-phone"></i>
								<?php 	echo $ad->seller_phone; ?>
							
							</span>
							<span>
									<i class="fa fa-envelope"></i>
								{{ $ad->seller_email }}
								</span><br>
								<span>
								  
								    
								   
							<a href="<?php echo url('/');?>/uploads/pdf/{{ $ad->pdffilename }}" target="_blank">Download Brochure</a>
							 	<!--<a href="<?php  //echo url("/uploads/pdf/{$ad->pdffilename}"); ?>" target="_blank">Download Brochure</a> */-->
								</span>
						</div>

						<div class="socialinto">
						   
                            
							
						</div>

<!--						<div class="personalinfoprt">-->



<!--<div class="profinto" style="margin-bottom:20px;">-->
	
						
<!--</div>-->
					

<!--<div>-->
<!--                           <a href="#" data-toggle="modal" data-target="#reportAdModal"><i class="fa fa-ban"></i> @lang('app.report_this_ad')</a>-->
<!--</div>-->



<!--					</div>-->

					
					</div>

				

					
				</div>
		
          
		</div>
	</div>







@endsection




