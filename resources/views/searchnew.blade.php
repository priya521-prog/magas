

@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

  	<div class="main">
		<div class="custom-container">
		    
		    	<div class="listingbody">
		    	     <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper">
                            <form class="form-inline" action="{{ route('main_search') }}" method="get"> @csrf
                            
                                <div class="form-group">
                                   
                                </div>
                               <!--<div class="form-group">-->
                                    <!--<input type="text"  class="form-control" id="searchTerms" name="q" value="{{ request('q') }}" placeholder="@lang('app.search___')" />-->
                                     <!--<input type="text"  class="form-control" id="searchTerms" name="q" value="{{ request('q') }}" placeholder="Service Type" />-->
                                     
                                <!--</div>-->
                                
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
                                            <option value="">@lang('app.select_a_country')</option>
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
                                        <option value=""> @lang('app.select_state') </option>
                                    </select>
                                </div>
                                

                                <button type="submit" class="btn theme-btn" style="background:#1f2152"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>

                    </div>
		    
@if($ads->count() <= 0)

<p> No Records Found.</p>
   @endif
 
<div class="innerListingbody">
    
                  
					<div class="innerheading green" style="background-color:#EA1C57!important">
						SEARCH RESULTS
					</div>
@if($ads->count() > 0)
					 @foreach($ads as $ad)
					
					<h2>BIZZ</h2>
					 	<h3><a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}"><?php echo $ad->title; ?></a></h3>
					 	<div><a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}"><?php echo $ad->type; ?></a></div>




					 @endforeach
					
   @endif
   </div>
				</div>
			</div>
</div>

@endsection


