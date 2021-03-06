@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('social-meta')
    <meta property="og:title" content="{{ $ad->title }}">
    <meta property="og:description" content="{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}">
    @if($ad->media_img->first())
        <meta property="og:image" content="{{ media_url($ad->media_img->first(), true) }}">
    @else
        <meta property="og:image" content="{{ asset('uploads/placeholder.png') }}">
    @endif
    <meta property="og:url" content="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
    <meta name="twitter:card" content="summary_large_image">
    <!--  Non-Essential, But Recommended -->
    <meta name="og:site_name" content="{{ get_option('site_name') }}">
@endsection

@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
@endsection

@section('main')





	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
                            <ul class="breadcrumb">
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                            <!--@if($ad->category)-->
                            <li><a href="{{ route('projects') }}">  All Projects</a> </li>
                            <!--@endif-->
                            <li> <span>{{ $ad->title }}</span> </li>
                        </ul>
                          
                        </div>
                        
                        <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="{{ route('projects') }}" method="get"> @csrf
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
		

<div class="customdiv" >
                @include('admin.flash_msg')
				<div class="detailbannerprt">
							<div class="innerheading green" style="background: #EA1C57 !important;">
								PROJECT
							</div>
							<img src="../../uploads/theme/banner.jpg">

							<div class="innercontDetail">
								<div class="rounded" >
									<?php if ($ad->business_image== "") { ?>
									<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:200px">
									<?php } ?>
								</div>

								
							</div>
				</div>

				<div class="twodetailpanel row">
					<div class="col-md-8">
						<div class="leftquestionprt">
							<h2>{{ $ad->title }}</h2>

							<div class="innerinfopannel">
									
                               <p>{!!html_entity_decode($ad->description)!!} </p>
                               
                               <div> 
                              
                               
                               
                               </div>
								</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="gettouchprt">
							<h2>Get in touch</h2>
                                <?php $x= "pdf/".$ad->pdffilename; ?>
                                	<?php $y= $ad->pdffilename; ?>
                               <?php //echo $x= $ad->pdffilename; ?>
                                
							<!--<button data-toggle="modal" data-target="#myModal" >Download Brochure</button>-->
							
							<!--<button onclick="downloadthefile('{{ $ad->pdffilename }}');" >Download Brochure</button>-->
								<?php
								 if (Auth::user()) {  
								     
								?>
									<button onclick="downloadthefile('{{ $ad->pdffilename }}');" >Download Brochure</button>
							<!--<button data-toggle="modal" data-target="#myModal" >Download Brochure</button>-->
<?php
}else{
?>
	<a href="/user/create" target="_blank"><button >Download Brochure</button></a>
	
	     <?php
}
?>
						
		<!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Download Form</h3>
        </div>
        <div class="modal-body ">
                    <form action="{{route('downloadmedia') }}" method="post" > @csrf
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                    <label for="name">@lang('app.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('app.enter_name')" value="{{ old('name') }}" required="required" />
                                    {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                                </div>
                                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                                    <label for="email">@lang('app.email_address')</label>
                                        <input type="email" class="form-control" id="email" placeholder="@lang('app.enter_email_address')" name="email" value="{{ old('email') }}" required="required" />
                                       {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                                </div>
                            </div>
                            <input type ="hidden" name="url1" id="url1" value="{{$y}}" >
                            <input type ="hidden" name="url" id="url" value="{{$x}}" >
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div> <!--modal-->

<script>
function downloadthefile(filenamecustom){
if(filenamecustom !="") {
window.location = "<?php echo url('/');?>/uploads/pdf/{{ $ad->pdffilename }}";
}else{
alert("No Documents found, Please write to info@magas.ae");
}
}
</script>
							<span>{{ $ad->seller_name }}</span>
							<span>{{ $ad->seller_email }}</span>
							<span>{{ $ad->seller_phone }}</span>
							<span>{{ $ad->website }}</span>
							<span><?php  echo ucwords($ad->sub_category->category_name);?></span>
                                                        
							<span>
									<i class="fa fa-map-marker"></i>
									{!! $ad->full_address() !!}
							</span>
							<div class="googlemapprt">
								<label>Google Map</label>
								<img src="../../uploads/theme/map.jpg">
							</div>
							<div class="viewsPrt">
								<i class="fa fa-share-alt"></i>
								{{ $ad->view }}  views
								
							</div>
							<div class="viewsPrt">
							    	<h4 style="color:#181b4f">OVERALL RATINGS</h4>
							    </div>


<?php
  
//dd($price);
 if($price == NULL){
     ?>
     <div class='rating-stars text-center'>
    <ul id='stars'>
      <li class='star'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star'>
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star'>
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star'>
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star'>
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>
  </div>
  <?php
 }
 
  else if($price >=1 && $price < 2){
      ?>
       <div class='rating-stars text-center'>
       <ul id='stars'>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
    
      </ul>
      </div>
      <?php
  }else if($price >=2  && $price < 3){
      ?>
       <div class='rating-stars text-center'>
     <ul id='stars'>
      <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
      
      </ul>
      </div>
      <?php
  }else if($price >=3  && $price < 4){
      ?>
       <div class='rating-stars text-center'>
       <ul id='stars'>
      <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
      </ul>
      </div>
      <?php
  }else if($price >=4  && $price < 5){
      ?>
       <div class='rating-stars text-center'>
      <ul id='stars'>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
      <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
      </ul>
      </div>
      <?php
  }else{
      ?>
       <div class='rating-stars text-center'>
          <ul id='stars'>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
      <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
     <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></i>
      </li>
      <li class='star'>
        <span class='fa fa-star fa-fw checked' style="font-size:40px;color:#EA1C57"></span>
      </li>
    
    </ul>
    </div>
    <?php
  }
    
    
      ?>


<button style="width:100%">send a private feedback</button></a>
<div class="well well-sm">
                    <form action="{{ route('contact_us') }}" method="post" onsubmit="return myFunction()"> @csrf
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
                                <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                    <label for="name">@lang('app.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('app.enter_name')" value="{{ old('name') }}" required="required" />
                                    {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                                </div>
                                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                                    <label for="email">@lang('app.email_address')</label>
                                        <input type="email" class="form-control" id="email" placeholder="@lang('app.enter_email_address')" name="email" value="{{ old('email') }}" required="required" />
                             
                                    {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}

                                </div>
                                 <div class="form-group">
                                    <label for="phone">Phone Number </label>
                                  
                                
                                        <input type="text" class="form-control" id="contact" placeholder="Enter Phone Number" name="contact" value="" required="required" />
                             
                                    <!--{!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}-->

                                </div>

                                <div class="form-group {{ $errors->has('message')? 'has-error':'' }}">
                                    <label for="name">@lang('app.message')</label>
                                    <textarea name="message" id="message" class="form-control"  placeholder="Please enter your feedback">{{ old('message') }}</textarea>
                                    {!! $errors->has('message')? '<p class="help-block">'.$errors->first('message').'</p>':'' !!}
                                </div>
                            </div>
                            
<input type ="hidden" name="rating" id="rating" >
<input type ="hidden" name="userid" id="userid" value="<?php echo $ad->user_id; ?>">

<input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> @lang('app.send_message')</button>
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
	
	
</div>
</div>

<center>
    	<div > 
	    <a  class="btn theme-btn" style="background-color:#e8215a;margin-top:-12px" href="{{route('previousad',[$ad->id]) }}"  > < </a>    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	    <a class="btn theme-btn" style="background-color:#e8215a;margin-top:-12px" href="{{route('nextad', [$ad->id]) }}"> > </a>
	    
	</div>
	</center>
	
	<div class="clearfix"></div>


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


@endsection

@section('page-js')
    <script src="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.js') }}"></script>
    <script src="{{ asset('assets/plugins/SocialShare/SocialShare.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/form-validator/form-validator.min.js') }}"></script>
    <script>
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
        
    </script>

    <script>
        $('#sharethis').ShareLink({
            title: '{{ $ad->title }}', // title for share message
            text: '{{ substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($ad->description) )),0,160) }}', // text for share message

            @if($ad->media_img->first())
            image: '{{ media_url($ad->media_img->first(), true) }}', // optional image for share message (not for all networks)
            @else
            image: '{{ asset('uploads/placeholder.png') }}', // optional image for share message (not for all networks)
            @endif
            url: '{{  route('single_ad', [$ad->id, $ad->slug]) }}', // link on shared page
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
                $('#ShowPhoneWrap').html('<i class="fa fa-phone"></i> {{ $ad->seller_phone }}');
            });

            $('#save_as_favorite').click(function(){
                var selector = $(this);
                var slug = selector.data('slug');

                $.ajax({
                    type : 'POST',
                    url : '{{ route('save_ad_as_favorite') }}',
                    data : { slug : slug, action: 'add',  _token : '{{ csrf_token() }}' },
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
                        url : '{{ route('report_ads_pos') }}',
                        data : { reason : reason, email: email,message:message, slug:'{{ $ad->slug }}',  _token : '{{ csrf_token() }}' },
                        success : function (data) {
                            if (data.status == 1){
                                toastr.success(data.msg, '@lang('app.success')', toastr_options);
                            }else {
                                toastr.error(data.msg, '@lang('app.error')', toastr_options);
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
                    url : '{{ route('reply_by_email_post') }}',
                    data : reply_email_form_data,
                    success : function (data) {
                        if (data.status == 1){
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }else {
                            toastr.error(data.msg, '@lang('app.error')', toastr_options);
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

@endsection
