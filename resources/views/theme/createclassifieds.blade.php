@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

  <div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid">
                @include('admin.flash_msg')
                        <div class="row">
                            <div class="col-sm-12">
                        <form action="" id="businessadsPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> @csrf
                                <div class="form-tabs" >
                                    <ul>
                                        <li class="sign-up-tab each-form-tab active" onclick="showTab('bizz-tab', 'bizz-content');">
                                            <div class="circle">
                                                1
                                            </div>
                                            <div class="circle-title">
                                                CLASSIFIEDS
                                            </div>
                                        </li>

					<li class="sign-up-tab each-form-tab" style="float:right;">
                                            <div class="circle">
                                                <i class="fa fa-dashboard fa-fw"></i>
                                            </div>
                                            <div class="circle-title">
                                                <a href="{{ route('dashboard') }}" style="font-size:14px;"> Go Back</a>
                                            </div>
                                        </li>
                                       

                                    </ul>
                                    <div class="clearfix"></div>
                                    <div class="bizz-content tab">
                                        <div class="curved-buttons">
                                            Create New Classified 
                                        </div>
                                        <div class="box">
                                            
                                            <div class="box-left">
                                                <div class="sign-up-form">
                                                    <div class="input-row">
                                                         <input type="text" name="ad_title" id="" class="input-field" value="{{ old('ad_title') }}" placeholder="HEADING"  />
{!! $errors->has('ad_title')? '<p class="help-block" style="color:red;">Please enter the Title of the ad. </p>':'' !!}
                                                    </div>
                                                     <div class="input-row">
                                                        <input type="text" name="company_name" id="" class="input-field" value="" placeholder="LINKEDIN URL"  />
                                                    </div>
						<div class="box-heading">
                                                     DESCRIPTION
                                                </div>	
                                                     <div class="input-row">
						    <textarea name="ad_description" id="ad_description" class="form-control" rows="8"></textarea>
                                {!! $errors->has('ad_description')? '<p class="help-block" style="color:red;">Please enter the Description. </p>':'' !!}
                                <p class="text-info">  A description will help End users to know More about your Ad</p>
</div>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="box-heading">
                                                    Profile Information
                                                </div>
                                                <!--<div class="form-text">-->
                                                <!--    * ALL ARE MANDATORY FIELDS-->
                                                <!--</div>-->
                                                <div class="sign-up-form">
                                                    
                                                    <div class="input-row">
                                                        <input type="text" name="seller_name" id="seller_name" class="input-field" value="{{ old('seller_name') }}" placeholder="ENTER FULL NAME"  /> {!! $errors->has('seller_name')? '<p class="help-block"style="color:red;">Please enter the name to be displayed on Ad.</p>':'' !!}

                                                    </div>
                                                  
                                                    <div class="input-row">
                                                        <input type="email" name="seller_email" id="" class="input-field" value="{{ old('seller_email') }}" placeholder="EMAIL"  />
 {!! $errors->has('seller_email')? '<p class="help-block"style="color:red;">Please enter the Email Id to be displayed on Ad.</p>':'' !!}
                                                    </div>
                                                    <div class="input-row">
                                                        <input type="text" name="seller_phone" id="seller_phone" class="input-field" value="{{ old('seller_phone') }}"  placeholder="PHONE"  /> 
                                                        {!! $errors->has('seller_phone')? '<p class="help-block"style="color:red;">Please enter the phone no to be displayed on Ad.</p>':'' !!}
                                                    </div>


						    <div class="input-row">
                                                        <div class="select">
                                                            <select class="form-control select2" name="category">
                                    <option value="">Select Industry</option>
                                    @foreach($categories as $category)
                                        @if($category->sub_categories->count() > 0)
                                            <optgroup label="{{ $category->category_name }}">
                                                @foreach($category->sub_categories as $sub_category)
                                                 <option value="{{ $sub_category->id }}" {{ old('category') == $sub_category->id ? 'selected' :'' }}>{{ $sub_category->category_name }}</option>
                                                 
                                                    <!--<option value="{{ $sub_category->id }}" >{{ $sub_category->category_name }}</option>-->
                                                @endforeach
                                            </optgroup>
                                        @endif
                                    @endforeach
                                </select>

                                                        </div>
                                {!! $errors->has('category')? '<p class="help-block"style="color:red;">Please Select the industry.</p>':'' !!}
                                                    </div>



						    <div class="input-row">
                                                        <div class="select">
                                                            <select class="form-control select2" name="servicetype" id="servicetype">
                                                                <option value ="">Service Type</option>
                                                                
                                                                 <!--<option value="Accounting & Book Keeping">Accounting & Book Keeping</option>-->
                                                                 
                                                                  <option value="Accounting & Book Keeping" {{ old('servicetype') == "Accounting & Book Keeping" ? 'selected' :'' }}>Accounting & Book Keeping</option>
                                                                  
                                                                <option value="Actor" {{ old('servicetype') == "Actor" ? 'selected' :'' }}>Actor</option>
                                                                <option value="Administration" {{ old('servicetype') == "Administration" ? 'selected' :'' }}>Administration</option>
                                                                <option value="Advertising and Marketing" {{ old('servicetype') == "Advertising and Marketing" ? 'selected' :'' }}>Advertising and Marketing</option>
                                                                <!--<option value="Accounting & Book Keeping" {{ old('servicetype') == "Accounting & Book Keeping" ? 'selected' :'' }}>Accounting & Book Keeping</option>-->
                                                                <!--<option value="Actor">Actor</option>-->
                                                                <!--<option value="Administration">Administration</option>-->
                                                                <option value="Analysts"  {{ old('servicetype') == "Analysts" ? 'selected' :'' }}>Analysts</option>
                                                                <option value="Architects"  {{ old('servicetype') == "Architects" ? 'selected' :'' }}>Architects</option>
                                                                <option value="Archivists & Curator"  {{ old('servicetype') == "Archivists & Curator" ? 'selected' :'' }}>Archivists & Curator</option>
                                                                <option value="Artist"  {{ old('servicetype') == "Artist" ? 'selected' :'' }}>Artist</option>
                                                                <option value="Auditing & Assurance"  {{ old('servicetype') == "Auditing & Assurance" ? 'selected' :'' }}>Auditing & Assurance</option>
                                                                <option value="Authors & Writer"  {{ old('servicetype') == "Authors & Writer" ? 'selected' :'' }}>Authors & Writer</option>
                                                                <option value="Cartographers and Surveyor"  {{ old('servicetype') == "Cartographers and Surveyor" ? 'selected' :'' }}>Cartographers and Surveyor</option>
                                                                <option value="Consultant"  {{ old('servicetype') == "Consultant" ? 'selected' :'' }}>Consultant</option>
                                                                <option value="Dancers & Choreographer"  {{ old('servicetype') == "Dancers & Choreographer" ? 'selected' :'' }}>Dancers & Choreographer</option>
                                                                <option value="Interior Decorator"  {{ old('servicetype') == "Interior Decorator" ? 'selected' :'' }}>Interior Decorator</option>
                                                                <option value="Designer"  {{ old('servicetype') == "Designer" ? 'selected' :'' }}>Designer</option>
                                                                <option value="Developer"  {{ old('servicetype') == "Developer" ? 'selected' :'' }}>Developer</option>
                                                                <option value="Economist"  {{ old('servicetype') == "Economist" ? 'selected' :'' }}>Economist</option>
                                                                <option value="Governmental"  {{ old('servicetype') == "Governmental" ? 'selected' :'' }}>Governmental</option>
                                                                <option value="IT Specialist"  {{ old('servicetype') == "IT Specialist" ? 'selected' :'' }}>IT Specialist</option>
                                                                <option value="Lawyer"  {{ old('servicetype') == "Lawyer" ? 'selected' :'' }}>Lawyer</option>
                                                                <option value="Medical Practitioner"  {{ old('servicetype') == "Medical Practitioner" ? 'selected' :'' }}>Medical Practitioner</option>
                                                                <option value="Musicians, Singers & Composers" {{ old('servicetype') == "Musicians, Singers & Composers" ? 'selected' :'' }}>Musicians, Singers & Composers</option>
                                                                <option value="Pharmacist"  {{ old('servicetype') == "Pharmacist" ? 'selected' :'' }}>Pharmacist</option>
                                                                <option value="Physio Therapists"  {{ old('servicetype') == "Physio Therapists" ? 'selected' :'' }}>Physio Therapists</option>
                                                                <option value="Public Relation Officer"  {{ old('servicetype') == "Public Relation Officer" ? 'selected' :'' }}>Public Relation Officer</option>
                                                                <option value="Repairs & Maintenance"  {{ old('servicetype') == "Repairs & Maintenance" ? 'selected' :'' }}>Repairs & Maintenance</option>
                                                                <option value="Tax Expert"  {{ old('servicetype') == "Tax Expert" ? 'selected' :'' }}>Tax Expert</option>
                                                                <option value="Teacher"  {{ old('servicetype') == "Teacher" ? 'selected' :'' }}>Teacher</option>
                                                                <option value="Therapist"  {{ old('servicetype') == "Therapist" ? 'selected' :'' }}>Therapist</option>
                                                                <option value="Trainer"  {{ old('servicetype') == "Trainer" ? 'selected' :'' }}>Trainer</option>
                                                                <option value="Translation"  {{ old('servicetype') == "Translation" ? 'selected' :'' }}>Translation</option>
                                                                <option value="Translators & Interpreters" {{ old('servicetype') == "Translators & Interpreters" ? 'selected' :'' }}>Translators & Interpreters</option>
                                                                <option value="Travel Agent"  {{ old('servicetype') == "Travel Agent" ? 'selected' :'' }}>Travel Agent</option>
                                                                <option value="Visual Artists"  {{ old('servicetype') == "Visual Artists" ? 'selected' :'' }}>Visual Artists</option>
                                                                <option value="Web & Multimedia"  {{ old('servicetype') == "Web & Multimedia" ? 'selected' :'' }}>Web & Multimedia</option>
                                                                <option value="Others"  {{ old('servicetype') == "Others" ? 'selected' :'' }}>Others</option>
                                                            </select>
                                                        </div>
                                {!! $errors->has('servicetype')? '<p class="help-block"style="color:red;">Please Select the Service type.</p>':'' !!}
                                                    </div>


                                                    <div class="input-row">
                                                        <div class="select">
                                                            <select name="country" id="slct" class="form-control select2">
                                                                <option value="">Select Country</option>

                                    @foreach($countries as $country)
                                        <!--<option value="{{ $country->id }}" }}>{{ $country->country_name }}</option>-->
                                         <option value="{{ $country->id }}" {{ old('country') == $country->id ? 'selected' :'' }}>{{ $country->country_name }}</option>
                                        
                                    @endforeach
                                </select>

                                                            </select>
                                                        </div>
                                {!! $errors->has('country')? '<p class="help-block"style="color:red;">Please Select Country.</p>':'' !!}

                                                    </div>
                                                    <div class="input-row">
                                                        <div class="select">
                                                            <select id="state_select" name="state" class="form-control select2">

                                                                <option value="{{ old('state') }}" required>Please Select State</option>
                                                            </select>
                                                        </div>
                                                         <!--{!! $errors->has('state')? '<p class="help-block"style="color:red;">Please Select State.</p>':'' !!}-->
                                                    </div>
						    <div class="input-row">
                                                        <div class="select">
                                                            <select id="city_select" name="city" class="form-control select2">
                                                                <option value="{{ old('city') }}" required>Please Select City</option>
                                                            </select>
                                                        </div>
                                                         <!--{!! $errors->has('city')? '<p class="help-block"style="color:red;">Please Select City.</p>':'' !!}-->
                                                    </div>
                                                    <div class="input-row">
                                                        <div class="text">
                                                            Google Map
                                                        </div>
                                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2090.893618076263!2d55.31723178533374!3d25.23519913442785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d33eb90b045%3A0x181bb23636514747!2sGulf%20Towers!5e0!3m2!1sen!2sin!4v1573293400864!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                                    </div>

                                                    <div class="input-row ">
                                                        <div class="text share">
                                                            <img src="{{ asset('assets/images/icon-share.png') }}" alt="" class="pull-left"/>
                                                            0 Views
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

<div class="input-row ">
							<div class="link">
			                                        

<button type="submit" id="submit" class="custom-button">Submit</button>
		                                    </div>

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
@endsection

@section('page-js')
    


<script type="text/javascript">

        $(document).ready(function(){
 $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#state_loader').show();
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
                $('#city_loader').show();
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


 function generate_option_from_json(jsonData, fromLoad){

            //Load Category Json Data To Brand Select
            if (fromLoad === 'category_to_brand'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> <?php echo trans('app.select_a_brand') ?> </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].brand_name +' </option>';
                    }
                    $('#brand_select').html(option);
                    $('#brand_select').select2();
                }else {
                    $('#brand_select').html('');
                    $('#brand_select').select2();
                }
                $('#brand_loader').hide('slow');
            }else if(fromLoad === 'country_to_state'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> @lang('app.select_state') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].state_name +' </option>';
                    }
                    $('#state_select').html(option);
                    $('#state_select').select2();
                }else {
                    $('#state_select').html('');
                    $('#state_select').select2();
                }
                $('#state_loader').hide('slow');

            }else if(fromLoad === 'state_to_city'){
                var option = '';
                if (jsonData.length > 0) {
                    option += '<option value="0" selected> @lang('app.select_city') </option>';
                    for ( i in jsonData){
                        option += '<option value="'+jsonData[i].id+'"> '+jsonData[i].city_name +' </option>';
                    }
                    $('#city_select').html(option);
                    $('#city_select').select2();
                }else {
                    $('#city_select').html('');
                    $('#city_select').select2();
                }
                $('#city_loader').hide('slow');

            }

        }

            function showTab(tabButton, tabContent) {
                $('.each-form-tab').removeClass("active");
                $('.' + tabButton).addClass("active");
                $('.tab').hide();
                $('.' + tabContent).show();
            }

        </script>
<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
        <script type="text/javascript" src="{{ asset('assets/js/fileupload.js') }}"></script>       
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'ad_description' );
    </script>
 <script>
    
//     $( "#target" ).click(function() {
//   alert( "Handler for .click() called." );
// });
//  $("#submit1").on('click', function () {
//     // alert("hi");
//             $("#submit").show();
//              $("#submit1").hide();
//         });
        
// $("#review").on('click', function () {
//      //alert("");
//             $("#check_rev").show();
//             $("#cre_biz").hide();
//         });
</script>
<style type="text/css">
    .bizz-content .box-left .input-field{
            text-transform: capitalize;

    }
    .bizz-content .box-right .input-field{
     text-transform: capitalize;   
    }
    
    .select2-container .select2-choice > .select2-chosen{
        text-transform: capitalize; 
    }
</style>

@endsection


