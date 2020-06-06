@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

  	<div class="main">
            
		<div class="custom-container">
        
               
       
			<div class="listingbody">
			    <div class="innerListingbody" >
				   
				   
					<div class="innerheading violet">
						PROJECT LISTS
					</div>
							<div class="headline_outter">
                <div class="row">
                     <div class="col-md-12">
                          <div class="col-md-9">
                              @if($ads->count() <= 0)

<p> No Records Found.</p>
   @endif

@if($ads->count() > 0)
  @foreach($ads as $ad)
			
                       <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">

			
						<h3 >{{ $ad->title }}</h3>
					 <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}"> Read More</a>
					
                           </a>  
<!--                          <div class="col-md-3">-->
<!--				<div class="headline_footer">-->
<!--					<div class="headline_readmore" style="margin-top: 26px;-->
<!--   ">-->
<!--					   <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}"> Read More</a>-->
<!--						<span>↓</span>-->
<!--					</div>-->
<!--				</div>-->
<!--</div>-->
  @endforeach
  @endif 
                    </div>
                  
					</ul>
   
                </div>
               
			</div>
      


                  
	


                </div>

			</div>
	
</div>

@endsection


@section('page-js')
  
@endsection
