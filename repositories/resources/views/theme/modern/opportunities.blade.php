@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

  	<div class="main">
		<div class="custom-container">
			<div class="listingbody">
                            <ul class="breadcrumb">
                            <li> <a href="{{ route('home') }}">@lang('app.home')</a> </li>
                            <li> <span>All Projects</span> </li>
                        </ul>

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
                    
@if($ads->count() <= 0)

<p> No Records Found.</p>
   @endif

<?php
					
	if(Auth::user()){
					?>
				<div class="innerListingbody">
					<div class="innerheading green" style="background: #EA1C57 !important;">
						PROJECTS
					</div>
					<?php
				
					?>
@if($ads->count() > 0)
					<ul>
                                              @foreach($ads as $ad)
                                            <li style="width:21%">
                         <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">

						<div class="compLogo">
                                                                       <?php if ($ad->business_image== "") { ?>
				<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">
				<?php } else { ?>
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px">
				<?php } ?>
						</div>          				
						<!--<h3 >{{ $ad->title }}</h3>-->
						<h2 style="font-size: 12px;">{{ $ad->title }}</h2>
						<span style="font-size: 12px;"> <i class="fa fa-map-marker"></i>{{ $ad->country->country_name  }}</span><br>
							<span style="font-size: 12px;"><B>Industry:</B> {{ $ad->sub_category->category_name   }}</span><br>
							<span style="font-size: 12px;">  <B>Req:</B> {{ $ad->requirement   }}</span>
                           </a>
					</li>
					
					
						<!--<li>-->
      <!--                                              <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
						<!--	<div class="topproductimgprt">-->
      <!--                                                             <?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:300px">-->
						<!--			<?php } ?>-->
						<!--		<div class="imgcont">-->
						<!--			{{ $ad->title }}-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2>{{ $ad->slug }}</h2>-->
						<!--	<h3>{{ $ad->category->category_name }} > {{ $ad->sub_category->category_name }}</h3>-->
						<!--	<span>-->
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		{{ $ad->country->country_name }}-->
						<!--	</span>-->
      <!--                                              </a>-->
						<!--</li>-->
					 @endforeach
					</ul>
   @endif
				</div>
				<?php
	}else{
	    ?>
	    	<div class="innerListingbody">
					<div class="innerheading green" style="background: #EA1C57 !important;">
						PROJECTS
					</div>
					<?php
				
					?>
@if($ads->count() > 0)
					<ul>
                                              @foreach($ads as $ad)
                                            <li style="width:21%">
                         <a href="{{ route('user.create') }}">

						<div class="compLogo">
                                                                       <?php if ($ad->business_image== "") { ?>
				<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px">
				<?php } else { ?>
				<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px">
				<?php } ?>
						</div>          				
						<!--<h3 >{{ $ad->title }}</h3>-->
						<h2 style="font-size: 12px;">{{ $ad->title }}</h2>
						<span style="font-size: 12px;"> <i class="fa fa-map-marker"></i>{{ $ad->country->country_name  }}</span><br>
							<span style="font-size: 12px;"><B>Industry:</B> {{ $ad->sub_category->category_name   }}</span><br>
							<span style="font-size: 12px;">  <B>Req:</B> {{ $ad->requirement   }}</span>
                           </a>
					</li>
					
					
						<!--<li>-->
      <!--                                              <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
						<!--	<div class="topproductimgprt">-->
      <!--                                                             <?php if ($ad->business_image== "") { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:300px">-->
						<!--			<?php } else { ?>-->
						<!--			<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:300px">-->
						<!--			<?php } ?>-->
						<!--		<div class="imgcont">-->
						<!--			{{ $ad->title }}-->
						<!--		</div>-->
						<!--	</div>-->
						<!--	<h2>{{ $ad->slug }}</h2>-->
						<!--	<h3>{{ $ad->category->category_name }} > {{ $ad->sub_category->category_name }}</h3>-->
						<!--	<span>-->
						<!--		<i class="fa fa-map-marker"></i>-->
						<!--		{{ $ad->country->country_name }}-->
						<!--	</span>-->
      <!--                                              </a>-->
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

@endsection


@section('page-js')
 


    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', toastr_options);
        @endif
    </script>
@endsection
