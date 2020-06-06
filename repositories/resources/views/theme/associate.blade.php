@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')


	<div class="main">
            
		<div class="custom-container">
        
               
       
			<div class="listingbody">
			    		
				<div class="innerListingbody">
				   
				    <!--<div class="innerheading red" style="float:rght">  <li> <a href="{{ route('bizz1') }}">POST A WHITEPAPER</a> </li></div>-->
					<div class="innerheading violet" style="font-size:16px;background-color:#EA1C57 !important">
						ASSOCIATE & EARN

					</div>
<div class="main" style="margin-top:-29px">
          
		<div class="custom-container">
<div style="margin-bottom:100px;width:100%">
<div class="tab-content responsive">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
				
				<div class="col-12" style="padding: 0;">
				   <b>STEP 1: </b><a href="#" class="custom-button" data-toggle="modal" data-target="#myModal2">ASSOCIATE BENEFITS</a><BR><br>
				       <b>STEP 2: </b>          <a href="{{ asset('assets/downloads/MAGAS-FORM-KYC (6) (2).pdf
') }}"  class="custom-button" download>DOWNLOAD KYC FORM</a><BR><br>
				           <b>STEP 3: </b>EMAIL FORM TO info@magas.services
					 <!--<ul class="p-list">-->
      <!--                                                      <li></li><br>-->
      <!--                                                      <li></li><br>-->
      <!--                                                      <li></li>-->
                                                            
      <!--                                                  </ul>-->
				</div>
			</div>
		</div>
	</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#191a50">ASSOCIATE BENEFITS</h4>
      </div>
      <div class="modal-body">
        <!--<p>Some text in the modal.</p>-->
        <ol>
            

 
 <li>Brand License to operate as "Associate" </li>
  <li>Recurring Commission upto 1 year for clients introduced</li>
  <li>Discount on Services from our channel partners  </li>
  <li>PAAS Benefits in terms of Networking & Service Delivery  </li>
  <li> Free BIZZ /PRO Listing on MAGAS Platform  </li>
 
 
</ol> 
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>

  </div>
</div>
      @endsection





