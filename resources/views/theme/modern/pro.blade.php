@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

  	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
                                <ul class="breadcrumb">
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                            <li> <span>All Profile Listing</span> </li>
                        </ul>
                     <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="{{ route('pro') }}" method="get"> @csrf
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
                                            <option value="">Select Country</option>
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
                                            <option value="">Select Country</option>
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
						<span class="innerheading blue" style="background: #1D2053!important;"> PRO</span>
						</div>
						
@if($ads->count() <= 0)

<p> No Records Found.</p>
   @endif

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
		
@if($ads->count() > 0)

 @foreach($ads as $ad)
 
 
			<div class="topdetailintoprt" id="mobilecustomcss" style=" float: left;margin_bottom:0px;display: inline-flex;border: 1px solid black;
    
">
<br>			    <div class="row">
			        <div class="col-md-12">
			            <div class="col-md-6" style="width:40%">
			                  <div style=" padding:6%;" >
               
					<?php if ($ad->business_image== "") { ?>
							<a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
							    <img src="<?php echo url('/');?>/uploads/placeholder.png"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } else { ?>
							<a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
							    <img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } ?>
						<span >	
						<p style="font-size:10px;text-transform: capitalize;">
						    <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">{{ $ad->seller_name }}</a> </p>
							<p style="font-size:10px">{{ $ad->designation }} </p>
                                
                                    <!--<?php echo shortDescription($ad->description);?> -->
	                            <p style="font-size:10px"> <i class="fa fa-map-marker"></i>
	                                @if($ad->state_name) {{ $ad->state->state_name  }}    @endif  {{ $ad->country->country_name  }}</p>
								</span>
				</div>
			            </div>
			            
			             
			              <div class="col-md-6">
			                  	<div class="socialinto" style="text-align: justify;margin-left:-19px">
							<span style="font-size:12px">
                            <?php echo shortDescription($ad->description);?><br/><br/> 
                            <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}" class="btn theme-btn"  style="background-color:#191a50;"> VIEW </a> 
                            
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
					 @endforeach

   @endif
   
 <!--<div class="clearfix"></div>-->
 
				</div>
				
				<?php
	}else{
				?>
					<div class="innerListingbody" style="box-shadow: none;-webkit-box-shadow:none">

						<div>
						<span class="innerheading blue" style="background: #1D2053!important;"> PRO</span>
						</div>
						
@if($ads->count() <= 0)

<p> No Records Found.</p>
   @endif

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
		
@if($ads->count() > 0)

 @foreach($ads as $ad)
 
 
			<div class="topdetailintoprt" id="mobilecustomcss" style=" float: left;margin_bottom:0px;display: inline-flex;border: 1px solid black;
    
">
<br>			    <div class="row">
			        <div class="col-md-12">
			            <div class="col-md-6" style="width:40%">
			                  <div style=" padding:6%;" >
               
					<?php if ($ad->business_image== "") { ?>
							<a href="{{ route('user.create') }}">
							    <img src="<?php echo url('/');?>/uploads/placeholder.png"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } else { ?>
							<a href="{{ route('user.create') }}">
							    <img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>"  class="img-circle crop" style="margin-top: 0px;"></a>
							<?php } ?>
						<span >	
						<p style="font-size:10px;text-transform: capitalize;">
						    <a href="{{ route('user.create') }}">{{ $ad->seller_name }}</a> </p>
							<p style="font-size:10px">{{ $ad->designation }} </p>
                                
                                    <!--<?php echo shortDescription($ad->description);?> -->
	                            <p style="font-size:10px"> <i class="fa fa-map-marker"></i>
	                                @if($ad->state_name) {{ $ad->state->state_name  }}    @endif  {{ $ad->country->country_name  }}</p>
								</span>
				</div>
			            </div>
			            
			             
			              <div class="col-md-6">
			                  	<div class="socialinto" style="text-align: justify;margin-left:-19px">
							<span style="font-size:12px">
                            <?php echo shortDescription($ad->description);?><br/><br/> 
                            <a href="{{ route('user.create') }}" class="btn theme-btn"  style="background-color:#191a50;"> VIEW </a> 
                            
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
					 @endforeach

   @endif
   
 <!--<div class="clearfix"></div>-->
 
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
	
	<style>
	.crop {
        /*width: 100px;*/
        /*height: 100px;*/
        /*overflow: hidden;*/
         width: 70px;
        height: 70px;
    }

    .crop img {
        /*width: 400px;*/
        /*height: 300px;*/
        /*margin: -75px 0 0 -100px;*/
         width: 100px;
        height: 100px;
    }
	    
	    
	</style>

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
