@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
<div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid" style="zoom:85%">
                        <div class="row"><br>
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    
                                    <?php
                                  //  dd($data->name);
                                    ?>
                                </div>
                                 <div class="col-md-8">  <p style="font-size: 25px;">
                                 
                                 <?php
                                echo '<script>alert("THANK YOU FOR THE PAYMENT. PLEASE FIND THE INVOICE")</script>'; 


                                 ?>
</p></div>
                                  <div class="col-md-2"></div>
                                  <div class="box-left">
                                            <div class="form-text" id="content1">
                                                 <table class="table" style="width:100%">
                                             <div class="row">
                                                 
                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            
                                                       
                                            
                                             <p><b>INVOICE #: </b><?php echo $ad->package_invoice; ?></p>
                                
 <p><b>NAME:</b> <?php echo $data->name; ?></p>
  <p><B>LOCATION:</B> <?php echo $data->address; ?></p>
                                                       <p><B>PURCHASE ORDER:</B> <?php echo $ad->package_poid; ?></p>
                                                      
                                        </div>
                                         <div class="col-md-4">
                                               <img itemprop="image" src="http://magas.services/assets/img/logo.png" class="img-responsive">
                                             </div>
                                        <div class="col-md-4">
                                             <p><b>DATE:</b> <?php //$dt = Carbon::now();
echo now()->toDateString(); ?></p>
  <p>MAGAS International LLC</p>
   <p><b>LOCATION:</b><p>Office 901-A5, Gulf Tower, Block A2</p>
   <p>PO Box 122705, Oud Mehta, UAE</p>
                                            <p><b>STATUS:</b> PAID</p>
                                               <!--<p><b>VALIDITY: </b>VALID FOR 1 YEAR</p>-->
                                                      
                                                      
               

                                        </div>
                                    </div>
                                </div>
                                            <thead>
                                                <tr>
                                                    
                                                   
                                                    <th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  <div class="payment-content ">
                                        <div class="box-left">
                                            <div class="form-text">
                                                <table class="table">
    <thead class="thead-dark">
     
      <tr>
        <th>SL No.</th>
        <th>TYPE OF SOLUTION</th>
        <th>COST</th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>   1.                                          </td>
        <td>GROWTH PACKAGE</td>
        <td>1,799$</td>
      </tr>
      <tr>
        <td>
          
                                                    </td>
        <td>TOTAL</td>
        <td>1,799$</td>
      </tr>
     
    </tbody>
  </table>
                                            </div>


						
                                        </div>
                                        <!--<p style="color:red">** If Payment Gateway is not successful then please  email info@magas.services for alternate Payment Method</p>-->
                                        <div class="clearfix"></div>
                                    </div>
                                                  
                                                
                                            </tbody>
                                        </table>
                                          </div>
<br><br>

						<p style="color:red">Terms and Conditions:</p>
						<p>1. Advertising material must be provided by the client. MAGAS reserves right to edit or reject if it is not in accordance to the local laws.
						</p>
						<p>2. All ads will be published once full payment has been received and no refunds will be made in case of delisting or termination.</p>
						<p>3. By buying this product, you agree to the Terms of Use of MAGAS as advertised on its portal.</p>

                                        </div>
                                
                               
                            </div>
                           
                            </div>
                            </div>
                            </div>
                            </div></div>
<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">


<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  


<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>