

@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection



@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/fotorama-4.6.4/fotorama.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}">
@endsection

@section('main')

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
			   <div class="form-group">
                          	<div class="detailbannerprt">

							<div class="innerheading violet">
								BIZZ
							</div>
							<img src="../../uploads/theme/banner.jpg">

							<div class="innercontDetail">
								<div class="">
									<?php if ($ad->business_image== "") { ?>
									<img src="../../uploads/placeholder.png" style="width:300px">
									<?php } else { ?>
									<img src="../../uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:200px;height:200px">
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
							</div>
							
							<div>
							    <?php //dd($user);
					  $user=$ad->user_id;
					  if($user = Auth::user()){
					  ?>
					  <a class="btn theme-btn" style="background-color:#191a50;" href="{{  route('editbizz', [$ad->id]) }}">Edit </a>
							&nbsp &nbsp &nbsp
							<a class="btn theme-btn" style="background-color:#e8215a;" href="{{  route('deletead', [$ad->id]) }}">Delete </a>
							<?php
					  }
					  ?>
							</div>
						</div>
					</div>
	<div class="col-md-4">
						<div class="gettouchprt">
							<h2>Get in touch</h2>
								<?php $x= "pdf/".$ad->pdffilename; ?>
				
								
									
							<button data-toggle="modal" data-target="#myModal" >Download Brochure</button>

							
	<!-- Modal -->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Download Brochure</h3>
        </div>
        <div class="modal-body ">
                    <form action="{{ route('downloadmedia') }}" method="post" > @csrf
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
alert("No Documents found, Please write to info@magas.services");
}
}
</script>
	<span>{{ $ad->seller_email }}</span>
							<span>{{ $ad->seller_phone }}</span>
							<span>{{ $ad->website }}</span>
						</span>
									{{ $ad->address }}
							</span>                  
							<span>
									{{ $ad->pdffilename }}
							</span> 
							<span>
									{{ $ad->company_name }}
							</span> 
								<span>
									{{ $ad->business_document }}
							</span> 
								<span>
									{{ $ad->servicename }}
							</span>
								<span>
								    {{ $ad->countryn->country_name }}
						
								   
						
                          </span>
                </div>
                </div>
                </div>




@endsection
