@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
			  <ul class="breadcrumb">
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                            <!--@if($ad->category)-->
                            <li><a href="{{ route('classifieds') }}">  All Classifieds </a> </li>
                            <!--@endif-->
                            <li> <span>{{ $ad->title }}</span> </li>
                        </ul>
                          
                        </div>
                        
                    <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="{{ route('classifieds') }}" method="get"> @csrf
                                <div class="form-group">
                                    <h3>SEARCH FILTERS</h3>
                                </div>
                               <!--<div class="form-group">-->
                               <!--     <input type="text"  class="form-control" id="searchTerms" name="q" value="{{ request('q') }}" placeholder="Service Type" />-->
                               <!-- </div>-->
                                
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
                                <!--    <div class="form-group">-->
                                <!--        <select class="form-control select2" name="country">-->
                                <!--            <option value="">@lang('app.select_a_country')</option>-->
                                <!--            @foreach($countries as $country)-->
                                <!--                <option value="{{ $country->id }}" >{{ $country->country_name }}</option>-->
                                <!--            @endforeach-->
                                <!--        </select>-->
                                <!--    </div>-->
                                <!--@endif-->
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
                                <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <option value=""> Select Location </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn theme-btn"> <i class="fa fa-search"></i> GO</button>
                            </form>
                        </div>

                    </div>



				<div class="innerListingbody" >
					<div class="innerheading yellow">
						CLASSIFIEDS 
					</div>

					<div class="topdetailintoprt">
						
						<div class="profinto">
							<h2>{{ $ad->seller_name }} </h2>
							<h3><?php  echo ucwords($ad->sub_category->category_name);?></h3>
							<span>
									
									<h3><i class="fa fa-map-marker"></i> {{ $ad->country->country_name  }}</h3>

								</span>
						</div>

						<div class="socialinto">
							<span>
								<i class="fa fa-phone"></i>
								{{ $ad->seller_email }}
							</span>
							<span>
									<i class="fa fa-envelope"></i>
								{{ $ad->seller_phone }}
								</span>
								
						</div>

						<div class="socialinto">
<span>
									<a href="javascript:;" id="save_as_favorite" data-slug="{{ $ad->slug }}">
                                    @if( ! $ad->is_my_favorite())
                                        <i class="fa fa-star-o"></i> @lang('app.save_ad_as_favorite')
                                    @else
                                        <i class="fa fa-star"></i> @lang('app.remove_from_favorite')
                                    @endif
                                </a>
								</span>
							<span>

	<a href="{{ route('classifieds', ['user_id'=>$ad->user_id]) }}">
		<i class="fa fa-user"></i> @lang('app.more_ads_by_this_seller')
	</a>

							</span>
							
								
						</div>

						<div class="viewsprt">
								<span>
										<i class="fa fa-share-alt"></i>
										{{ $ad->view }} Views
									</span>

									
						</div>
					</div>

					<div class="personalinfoprt">



<div class="profinto" style="margin-bottom:20px;">
	<h2>{{ $ad->title }} </h2>	
						
</div>
						<div class="infoPanel">
							{!!html_entity_decode($ad->description)!!} 
						</div>

<div>
                           <!--<a href="#" data-toggle="modal" data-target="#reportAdModal"><i class="fa fa-ban"></i> @lang('app.report_this_ad')</a>-->
</div>

<div> 
 <?php //dd($user);
							    //$login_user= Auth::user();
							   
					  $login_user= Auth::user();
          $user=$ad->user_id;
         // dd($user);
         // dd($login_user);
          $login_id=$login_user->id;
    //dd($login_id);
       $login_type=$login_user->user_type;
							   if($login_type=='admin'){
					           ?>
					         <a class="btn theme-btn" style="background-color:#191a50;" href="{{  route('editclassifieds', [$ad->id]) }}">Edit </a>
&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>
							<?php
					       }else if($user==$login_id){
					           					           ?>
					         <a class="btn theme-btn" style="background-color:#191a50;" href="{{  route('editclassifieds', [$ad->id]) }}">Edit </a>
&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>
<?php
					      }else if($login_type=='super_admin'){
					      ?>
					    <a class="btn theme-btn" style="background-color:#191a50;" href="{{  route('editclassifieds', [$ad->id]) }}">Edit </a>
&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>
					      <?php
					  }else{
					      
					  }
				 
					  ?>

</div>

					</div>

					
				</div>
			</div>
		</div>
	</div>


	<div class="clearfix"></div>

    <div class="modal fade" id="reportAdModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Is there something wrong with this Listing?</h4>
                </div>
                <div class="modal-body">

                    <p>We're constantly working hard to assure that content Listed meet high standards and we are very grateful for any kind of feedback from our users.</p>

                    <form>

                        <div class="form-group">
                            <label class="control-label">@lang('app.reason'):</label>
                            <select class="form-control" name="reason">
                                <option value="">@lang('app.select_a_reason')</option>
                                <option value="unavailable">Service Not Available</option>
                                <option value="fraud">@lang('app.fraud')</option>
                                <option value="duplicate">@lang('app.duplicate')</option>
                                <option value="spam">@lang('app.spam')</option>
                                <option value="wrong_category">@lang('app.wrong_category')</option>
                                <option value="offensive">@lang('app.offensive')</option>
                                <option value="other">@lang('app.other')</option>
                            </select>

                            <div id="reason_info"></div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label">@lang('app.email'):</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div id="email_info"></div>

                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">@lang('app.message'):</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                            <div id="message_info"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('app.close')</button>
                    <button type="button" class="btn btn-primary" id="report_ad">@lang('app.report_ad')</button>
                </div>
            </div>
        </div>
    </div>
    
    <center>
    	<div > 
	    <a  class="btn theme-btn" style="background-color:#e8215a;margin-top:-12px" href="{{  route('previousad', [$ad->id]) }}"  > < </a>    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	    <a class="btn theme-btn" style="background-color:#e8215a;margin-top:-12px" href="{{  route('nextad', [$ad->id]) }}"> > </a>
	    
	</div>
	</center>

	<div class="clearfix"></div>
@endsection


@section('page-js')

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
        $(document).ready(function() {
            $('#shortBySelect').change(function () {
                var form_input = $('#listingFilterForm').serialize();
                location.href = '{{ route('listing') }}?' + form_input + '&shortBy=' + $(this).val();
            });
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
