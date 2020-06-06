@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection
use Auth;
@section('main')

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
			  <ul class="breadcrumb">
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                            <!--@if($ad->category)-->
                            <li><a href="{{ route('pro') }}"> All Profile Listing </a> </li>
                            <!--@endif-->
                            <li> <span>{{ $ad->title }}</span> </li>
                        </ul>
                          
                        </div>
                        
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
                    



				<div class="innerListingbody" >
					<div class="innerheading blue" style="background: #1D2053!important;">
						PRO
					</div>

					<div class="topdetailintoprt">
						<div >
							<?php if ($ad->business_image== "") { ?>
							<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:160px" class="img-circle">
							<?php } else { ?>
							<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:250px" class="img-circle">
							<?php } ?>
						</div>
						<div class="profinto">
							<h2>{{ $ad->seller_name }} </h2>
							<h3>{{ $ad->designation }}</h3>			

							<span>
								<i class="fa fa-map-marker"></i>
								@if($ad->city_name) {{ $ad->city->city_name  }}   @endif
								@if($ad->state_name) {{ $ad->state->state_name  }}    @endif 
								{{ $ad->country->country_name  }}
							</span>
						</div>

						<div class="socialinto">
							<span>
								<i class="fa fa-envelope"></i>
								{{ $ad->seller_email }}
							</span>
							<span>
								<i class="fa fa-phone"></i>
								{{ $ad->seller_phone }}
								</span>
								<span>

									<i class="fa fa-linkedin"></i>
								@if($ad->company_name) <a href="{{ $ad->company_name }}" style="color:#181b4f" target="_BLANK">
								{{ $ad->company_name }}</a>   @endif

								@if(!$ad->company_name) Not Linked   @endif	
								</span>
								<span>
									<i class="fa fa-info"></i>
									{{ $ad->sub_category->category_name }} {{ $ad->servicename  }} 

								</span> 
						</div>

						<div class="viewsprt">
								<span>
										<i class="fa fa-share-alt"></i>
										{{ $ad->view }} Views 
									</span>
									<?php $x="pdf/".$ad->pdffilename;
									?>
										<?php $y= $ad->pdffilename; ?>
									
									<!--<a href="#" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal" >Download CV</a>-->
									
									<?php
								 if (Auth::user()) {  
								     
								?>
									<!--<button onclick="downloadthefile('{{ $ad->pdffilename }}');" >Download CV</button>-->
							<button data-toggle="modal" data-target="#myModal" >Download CV</button>
<?php
}else{
?>
	<a href="/user/create" target="_blank"><button >Download CV</button></a>
	
	     <?php
}
?>

						</div>
					</div>

					<div class="personalinfoprt">
						<div class="infoPanel">
							{!!html_entity_decode($ad->description)!!} 
						</div>

					</div>
					
					<div>
				
					</div>
					
				</div>
				 <?php //dd($user);
							    //$login_user= Auth::user();
							   
				// 	  $user=$ad->user_id;
				//	   dd($login_type);
				// 	if($login_user){
				// 	  if($login_type=='admin'){
					       //if($login_type=='super_admin'){
					          //  if($user==$login_id){
					           ?>
					 <!--            <a class="btn theme-btn" style="background-color:#191a50;"  href="{{  route('editpro', [$ad->id]) }}">Edit </a> -->
						<!--&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>-->
							<?php
					       //}else if($user==$login_id){
					           					           ?>
					 <!--             <a class="btn theme-btn" style="background-color:#191a50;"  href="{{  route('editpro', [$ad->id]) }}">Edit </a> -->
						<!--&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>-->
							<?php
					   //   }else if($login_type=='super_admin'){
					      ?>
					 <!--       <a class="btn theme-btn" style="background-color:#191a50;"  href="{{  route('editpro', [$ad->id]) }}">Edit </a> -->
						<!--&nbsp &nbsp &nbsp<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>-->
					      <?php
				// 	  }else{
					      
				// 	  }
				// 	}
					  ?>
					  
		
				  <center>
				<div>
				   
                   <a class="btn theme-btn" style="background-color:#e8215a;" href="{{route('previousad',[$ad->id]) }}"> < </a>&nbsp &nbsp &nbsp
                   <a class="btn theme-btn" style="background-color:#e8215a;" href="{{route('nextad', [$ad->id]) }}"> > </a>
                </div>
                </center>
			</div>
		</div>
	</div>
	
	
	<!-- Modal -->
  <!--<div class="modal fade " id="myModal" role="dialog">-->
  <!--  <div class="modal-dialog ">-->
      <!-- Modal content-->
  <!--    <div class="modal-content well well-sm">-->
  <!--      <div class="modal-header">-->
  <!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
  <!--        <h3 class="modal-title">Download Form</h3>-->
  <!--      </div>-->
  <!--      <div class="modal-body ">-->
  <!--          <form action="{{route('downloadmedia') }}" method="post" > @csrf-->
  <!--          <div class="row">-->
  <!--                          <div class="col-md-12">-->
  <!--                              <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">-->
  <!--                                  <label for="name">@lang('app.name')</label>-->
  <!--                                  <input type="text" class="form-control" id="name" name="name" placeholder="@lang('app.enter_name')" value="{{ old('name') }}" required="required" />-->
  <!--                                  {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}-->
  <!--                              </div>-->
  <!--                              <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">-->
  <!--                                  <label for="email">@lang('app.email_address')</label>-->
  <!--                                      <input type="email" class="form-control" id="email" placeholder="@lang('app.enter_email_address')" name="email" value="{{ old('email') }}" required="required" />-->
  <!--                                     {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}-->
  <!--                              </div>-->
  <!--                          </div>-->
  <!--                          <input type ="hidden" name="url" id="url" value="{{$x}}" >-->
  <!--                          <div class="col-md-12">-->
  <!--                              <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>-->
  <!--                          </div>-->
  <!--                      </div>-->
  <!--                  </form>-->
  <!--      </div> <!--modal body-->-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
 <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Download CV</h3>
        </div>
        <div class="modal-body ">
                    <form action="{{ route('downloadmedia') }}" method="post" > @csrf
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                    <label for="name">@lang('app.name')</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="@lang('app.enter_name')" readonly value="<?php ?>"/>
                                    {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                                </div>
                                <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                                    <label for="email">@lang('app.email_address')</label>
                                        <input type="email" class="form-control" id="email" placeholder="@lang('app.enter_email_address')" name="email" value="<?php  ?>" readonly />
                                       {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                                </div>
                            </div>
                            <input type ="hidden" name="url1" id="url1" value="{{$y}}" >
                            <input type ="hidden" name="url" id="url" value="{{$x}}" >
                            <input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div> <!--modal-->

	<div class="clearfix"></div>
	
	

@endsection


@section('page-js')
<script>
function downloadthefile(filenamecustom){
if(filenamecustom !="") {
window.location = "<?php echo url('/');?>/uploads/pdf/{{ $ad->pdffilename }}";
}else{
alert("No Documents found, Please write to info@magas.services");
}
}
</script>
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