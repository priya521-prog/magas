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
                                <div class="form-tabs">
                                    
                                    
                                    <div class="bizz-content tab">
                                        <div class="curved-buttons">
                                            Edit Slider
                                        </div>
                                        
                                        <div class="box">
                                            <div class="add-images">
                                                
                                                

						     <div class="custom-file-upload input-row">
                                                        Slider IMAGE <br/>
                                                        <span>{{$slider->media_name }} </span>
                                                        <input type="file" id="file" value="UPLOAD PROFILE PIC" name="filescustomone" />
                                                        <div class="clearfix"></div>
                                                    </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="box-left">
                                                <div class="sign-up-form">
						
  
                                            <div class="clearfix"></div>

<div class="input-row ">
							<div class="link">
			                                        

<button type="submit" class="custom-button">Submit</button>
		                                    </div>

						</div>
                                        </div>


</form>
                                    </div>

<!--                                    <div class="bizz-payment-content tab">-->
                                   
<!--<table class="table">-->
<!--    <thead class="thead-dark">-->
<!--      <tr>-->
<!--        <th>SELECT</th>-->
<!--        <th>TYPE OF SOLUTION</th>-->
<!--        <th>COST</th>-->
<!--      </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--      <tr>-->
<!--        <td></td>-->
<!--        <td>BUSINESS LISTING</td>-->
<!--        <td>99$</td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td>-->
<!--                                                        <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox" checked="">-->
<!--                                                    </td>-->
<!--        <td>TOTAL</td>-->
<!--        <td>99$</td>-->
<!--      </tr>-->
     
<!--    </tbody>-->
<!--  </table>-->

<!--<div class="input-row ">-->
<!--							<div class="link">-->
<!--			<form action="" method="post" name="frmPayPal1">-->

<!--                      <input type="hidden" name="business" value="info@magas.ae">-->

<!--                      <input type="hidden" name="cmd" value="_xclick">-->

<!--                      <input type="hidden" name="item_name" value="It Solution Stuff">-->

<!--                      <input type="hidden" name="item_number" value="2">-->

<!--                      <input type="hidden" name="amount" value="99">-->

<!--                      <input type="hidden" name="no_shipping" value="1">-->

<!--                      <input type="hidden" name="currency_code" value="USD">-->

<!--                      <input type="hidden" name="cancel_return" value="https://www.magas.ae/paypal/cancel.php">-->

<!--                      <input type="hidden" name="return" value="https://www.magas.ae/paypal/success.php">  -->




<!--<button type="submit" class="custom-button">Make Payment</button>-->
<!--		                </form>                                                                            </div>-->

<!--						</div>-->




<!--                                        <div class="clearfix"></div>-->
<!--                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
@endsection

@section('page-js')
    
<style>
.display-table {
    display: table;
    height: 100%;
    width: 100%;
}
.display-table > .vertical-align {
    display: table-cell;
    height: 100%;
    width: 100%;
}
.display-table > .vertical-align.middle {
    vertical-align: middle;
}
.display-table > .vertical-align.bottom {
    vertical-align: bottom;
}
.form-tabs {

}
.form-tabs ul li.each-form-tab{
    width: auto;
    display: inline-block;
    float: left;
    text-align: left;
    padding: 0px;
    box-sizing: border-box;
}
.form-tabs ul li.each-form-tab + .each-form-tab {
    margin-left: 50px;
}
.each-form-tab.active .circle{
    background-color: #161a4f;
}
.each-form-tab.active .circle-title{
    color: #161a4f;
}
.circle {
    position: relative;
    margin: 0 auto;
    width: 35px;
    height: 35px;
    color: #fff;
    font-size: 17px;
    line-height: 40px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    text-align: center;
    background-color: #cacacc;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    border-radius: 50%;
}
.circle-title {
    font-size: 18px;
    line-height: 29px;
    color: #848486;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
    padding: 10px 5px;
}
.each-form-tab:hover .circle{
    background-color: #161a4f;
}
.each-form-tab:hover .circle-title{
    color: #161a4f;
}
.tab{
    display: none;
    font-size: 14px;
    line-height: 21px;
    color: #080a2c;
    font-family: 'Poppins', sans-serif;
    text-align: left;
    text-transform: uppercase;
    padding: 20px 20px;

    box-sizing: border-box;
}
.sign-up-content.tab{
    display: block;
}
.sign-up-content .box-left {
    width: 35%;
    padding-right: 30px;
    float: left;
    box-sizing: border-box;
}
.sign-up-content .box-right {
    width: 65%;
    float: left;
    background-color: #f9f9f9;
}
.form-text {
    font-size: 14px;
    line-height: 21px;
    color: #080a2c;
    font-family: 'Poppins', sans-serif;
    text-align: left;
    text-transform: uppercase;
    padding: 10px 5px;
}
.sign-up-form {
    margin: 10px 0px 40px;
    font-size: 14px;
    line-height: 21px;
    color: #080a2c;
    font-family: 'Poppins', sans-serif;
    text-align: left;
    text-transform: uppercase;
}

.sign-up-form .input-field {
    width: 100%;
    box-sizing: border-box;
    display: inline-block;
    border-radius: 0px!important;
    border: 1px solid #d88dab;
    text-transform: uppercase;
    padding: 8px 8px;
    width: 65%;
}

.sign-up-form .input-field::-webkit-input-placeholder {
    color: #080a2c;
}
.sign-up-form .input-field::-moz-input-placeholder {
    color: #080a2c;
}
.sign-up-form .input-field::-ms-input-placeholder {
    color: #080a2c;
}


.sign-up-form .input-row + .input-row {
    margin-top: 15px;
}
/* Reset Select */
.sign-up-form select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    border: 0 !important;
    background: #fff;
    background-image: none;
}
/* Remove IE arrow */
.sign-up-form select::-ms-expand {
    display: none;
}
/* Custom Select */
.sign-up-form .select {
    position: relative;
    display: flex;
    width: 65%;
    background: #fff;
    overflow: hidden;
    border-radius: 0em;
    border: 1px solid #d88dab;
}
.sign-up-form select {
    width: 100%;
    text-transform: uppercase;
    padding: 8px 8px;
    cursor: pointer;
}
/* Arrow */
.sign-up-form .select::after {
    content: '\25BC';
    position: absolute;
    top: 6px;
    right: 0;
    padding: 0 1em;
    background: #fff;
    cursor: pointer;
    pointer-events: none;
    -webkit-transition: .25s all ease;
    -moz-transition: .25s all ease;
    -ms-transition: .25s all ease;
    -o-transition: .25s all ease;
    transition: .25s all ease;
}
/* Transition */
.select:hover::after {
    color: #f39c12;
}
.sign-up-form .input-row .text {
    width: 100%;
    box-sizing: border-box;
    display: inline-block;
    border-radius: 0px!important;
    border: 1px solid #fff;

    padding: 8px 8px;
}
.sign-up-form .input-row-border {
    border: 2px solid #d1cfd0;
    padding: 10px 1px;
}
.sign-up-form .input-row-border-none {
    border: 0px solid #d1cfd0;
    padding: 10px 1px;
}
.cc .checkbox-custom {
    opacity: 0!important;
    position: absolute!important;   
}

.cc .checkbox-custom, .cc .checkbox-custom-label {
    display: inline-block!important;
    vertical-align: middle!important;
    margin: 5px;
    cursor: pointer!important;
    font-weight: normal;
}
.cc {float:left;}
.cc {
    margin-left: 10px;
}
.cc .checkbox-custom + .checkbox-custom-label:before {
    content: '';
    background: #fff!important;
    border-radius: 0px;
    border: 2px solid #c0c0c0;
    display: inline-block;
    vertical-align: middle;
    width: 20px;
    height: 20px;
    padding: 2px;
    margin-right: 10px;
    text-align: center;
}

.cc .checkbox-custom:checked + .checkbox-custom-label:before {
    content: "";
    display: inline-block;
    width: 10px;
    height: 15px;
    border: solid #161a4f;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    border-radius: 0px;
    margin: 0px 15px 5px 5px;
}

.custom-button {
    font-size: 18px;
    line-height: 29px;
    background: #d33a70;
    font-weight: 500;
    padding: 10px 15px;
    margin: 0 10px;
    text-transform: uppercase;
    color: #fff;
    margin-top: 16px;
    display: inline-block;
}
.custom-button:hover {
    color: #fff;
    background: #000;
}
.p-rate{
    font-size: 37px;
    line-height: 48px;
    color: #d73970;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    padding: 40px 5px 10px;
}
.p-text{
    font-size: 16px;
    line-height: 27px;
    font-weight: 700;
    text-align: center;
    text-transform: none;
    padding: 10px 5px 10px;
}
ul.p-list {
    padding-left: 10px;
    margin: 30px 0;
}
ul.p-list li{
    font-size: 13px;
    line-height: 25px;
    text-align: left;
    text-transform: none;
    background: url('../images/icon-tick.png') no-repeat left 0px;
    padding-left: 30px;
}
ul.p-list li span.bold{
    text-transform: uppercase;
    font-weight: 600;
}
ul.p-list li span.text-pink{
    color: #d73970;
}
.p-features {
    margin: 10px 0 10px;
}
.p-features .feature {
    float: left;
    margin: 10px 0 10px;
    text-align: center;
    background-color: #efeff1;
}
.sign-up-content .p-features .feature {
    width: 33.33%;
    width: calc((100% / 3) - 8px);
    padding: 6px 6px 12px;
}
.sign-up-content .p-features .feature + .feature {
    margin-left: 12px;
}
.p-features .p-heading,
.box-heading{
    font-size: 15px;
    line-height: 27px;
    font-weight: 700;
    color: #0a092e;
    padding: 10px 2px 5px;
}
.box-title{
    font-size: 15px;
    line-height: 27px;
    font-weight: 400;
    color: #0a092e;
    padding: 10px 2px 5px;
    text-transform: none;
}
.box-right .box-heading{
    font-size: 15px;
    line-height: 27px;
    font-weight: 700;
    color: #0a092e;
    padding: 20px 30px 10px;
}
.p-features .p-desc{
    font-size: 13px;
    line-height: 20px;
    color: #0a092e;
    padding: 10px 2px 5px;
}
.p-features .p-rate{
    font-size: 19px;
    line-height: 33px;
    padding: 10px 2px 5px;
}
.p-features .custom-button{
    font-size: 12px;
    line-height: 18px;
    padding: 5px 10px;
    background-color: #0a092e;
}
.p-features .custom-button:hover{
    background-color: #d33a70;
}

.premium-content .box-left {

}
.premium-content .box-right {
    width: 80%;
    float: left;
    background-color: #f9f9f9;
}
.premium-content .p-features .feature {
    width: 25%;
    width: calc((100% / 4) - 9px);
    padding: 6px 6px 12px;
}
.premium-content .p-features .feature + .feature {
    margin-left: 12px;
}
.premium-content .p-features .feature:nth-child(4n+ 1) {
    margin-left: 0px;
}

.payment-content .p-features .feature {
    width: 33.33%;
    width: calc((100% / 3) - 8px);
    padding: 6px 6px 12px;
}
.payment-content .p-features .feature + .feature {
    margin-left: 12px;
}
.payment-content .box-left {
    width: 35%;
    padding-right: 30px;
    float: left;
    box-sizing: border-box;
}
.payment-content .box-right {
    width: 65%;
    float: left;
    background-color: #f9f9f9;
}
.payment-content .box-right ul.p-list {
    margin: 10px 0 30px;
}
.thankyou-content .box-left {
    width: 35%;
    padding-right: 30px;
    float: left;
    box-sizing: border-box;
}
.thankyou-content .box-right {
    width: 65%;
    float: left;
    background-color: #f9f9f9;
}

.thankyou-content .box-left .p-features .feature {
    width: 50%;
    width: calc((100% / 2) - 6px);
    padding: 6px 6px 12px;
}
.thankyou-content .box-right .p-features .feature {
    width: 33.33%;
    width: calc((100% / 3) - 8px);
    padding: 6px 6px 12px;
}
.thankyou-content .p-features .feature + .feature {
    margin-left: 12px;
}
.bizz-content.tab{
    display: block;
}

.bizz-content .curved-buttons{
    font-size: 17px;
    line-height: 28px;
    padding: 10px 20px;
    color: #fff;
    max-width: 315px;
    cursor: pointer;
    background-color: #0a092e;
    -webkit-border-top-left-radius: 10px;
    -moz-border-top-left-radius: 10px;
    -ms-border-top-left-radius: 10px;
    -o-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-top-right-radius: 10px;
    -ms-border-top-right-radius: 10px;
    -o-border-top-right-radius: 10px;
    -webkit-border-radius-topleft: 10px;
    -moz-border-radius-topleft: 10px;
    -ms-border-radius-topleft: 10px;
    -o-border-radius-topleft: 10px;
    -webkit-border-radius-topright: 10px;
    -moz-border-radius-topright: 10px;
    -ms-border-radius-topright: 10px;
    -o-border-radius-topright: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.bizz-content .curved-buttons:hover{
    background-color: #c94574;
}
.bizz-content .box {
    border: 1px solid #e3e1e2;
}
.bizz-content .box .add-images{
    position: relative;
}
.bizz-content .box .add-images .profile-image-main{
    position: relative;
}
.bizz-content .box .add-images .profile-image-logo{
    position: absolute;
    top: 50%;
    left: 60px;
    transform: translateY(-50%);

}
.bizz-content .box-left {
    width: calc(75% - 40px);
    padding-right: 30px;
    box-sizing: border-box;
    float: left;
    margin: 20px;
}
.bizz-content .box-right {
    width: 25%;
    float: left;
    padding: 20px;
}
.bizz-content .box-right .box-heading {
    color: #0a092e;
    padding: 0px;
    text-align: left;
}
.bizz-content .box-right .form-text {
    color: #080a2c;
    text-align: left;
    padding: 0;
}

.bizz-content .box-right .input-field {
    width: 100%;
    box-sizing: border-box;
    display: inline-block;
    border-radius: 0px!important;
    border: 1px solid #d88dab;
    text-transform: uppercase;
    padding: 6px 8px;
    width: 100%;
}
.bizz-content .box-right .input-row .text {
    width: 100%;
    box-sizing: border-box;
    display: inline-block;
    border-radius: 0px!important;
    border: 0px solid #fff;
    padding: 4px 0px;
}
.bizz-content .box-right .input-row .text.share {
    font-size: 17px;
    line-height: 42px;
    color: #080a2c;
    font-weight: 700;
    padding: 5px 10px;
}
.bizz-content .box-right .input-row .text.share img{
    padding-right: 15px;
}
.bizz-content .box-right  .select {
    position: relative;
    display: flex;
    width: 100%;
    background: #fff;
    overflow: hidden;
    border-radius: 0em;
    border: 1px solid #d88dab;
}
.bizz-content .box-left .input-field {
    width: 100%;
    box-sizing: border-box;
    display: inline-block;
    font-size: 25px;
    line-height: 35px;
    color: #080a2c;
    border-radius: 0px!important;
    border: 2px solid #d1cfcf;
    text-transform: uppercase;
    padding: 20px;
    width: 100%;
}
.bizz-content .box-left .input-field::-webkit-input-placeholder {
    color: #080a2c;
    font-weight: 700;
}
.bizz-content .box-left .input-field::-moz-input-placeholder {
    color: #080a2c;
    font-weight: 700;
}
.bizz-content .box-left .input-field::-ms-input-placeholder {
    color: #080a2c;
    font-weight: 700;
}

.custom-file-upload {
    display: block;
    width: auto;
    font-size: 13px;
    margin-top: 10px;
    margin-bottom: 20px;
}
.custom-file-upload label {
    display: block;
    margin-bottom: 5px;
}

.file-upload-wrapper {
    position: relative;
    margin-bottom: 5px;
}

.file-upload-input {
    width: calc(100% - 90px);
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    padding: 6px 8px;
    border: none;
    background: none;
    border: 1px solid #d88dab;
    -moz-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    -webkit-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
    float: left;
    /* IE 9 Fix */
}


.file-upload-button {
    cursor: pointer;
    display: inline-block;
    color: #080a2c;
    font-size: 13px;
    text-transform: uppercase;
    padding: 6px 8px;
    border: none;
    width: 90px;
    margin-left: -1px;
    background-color: #d8d5d6;
    float: left;
    /* IE 9 Fix */
    -moz-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    -webkit-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
}
.file-upload-button:hover {
    background-color: #000;
}


@media (min-width: 1920px) and (max-width: 2520px) {

}
@media (min-width: 992px) and (max-width: 1199px) {

}


@media (min-width: 768px) and (max-width: 991px) {
    .form-tabs {

    }
    .sign-up-content .box-left,
    .premium-content .box-left,
    .payment-content .box-left,
    .thankyou-content .box-left{
        width: 100%;
        padding-right: 0px;
    }
    .sign-up-content .box-right,
    .premium-content .box-right,
    .payment-content .box-right,
    .thankyou-content .box-right{
        width: 100%;
    }
    .tab {
        margin-top: 14px;
        text-align: center;
    }
}

@media(max-width: 767px) {
    .form-tabs {
    }
    .form-tabs ul li.each-form-tab + .each-form-tab {
        margin-left: 12px;
    }
    .tab {
        display: none;
        margin-top: 25px;
    }
    .sign-up-content .box-left,
    .premium-content .box-left,
    .payment-content .box-left,
    .thankyou-content .box-left{
        width: 100%;
        padding-right: 0px;
    }
    .sign-up-content .box-right,
    .premium-content .box-right,
    .payment-content .box-right,
    .thankyou-content .box-right{
        width: 100%;
    }
    .sign-up-form,
    .sign-up-form .input-field,
    .sign-up-form .select {
        width: 100%;
    }
    .tab {
        margin-top: 14px;
        text-align: center;
        width: 100%;
    }
    .sign-up-content .p-features .feature,
    .premium-content .p-features .feature,
    .payment-content .p-features .feature,
    .thankyou-content .p-features .feature,
    .thankyou-content .box-left .p-features .feature,
    .thankyou-content .box-right .p-features .feature{
        margin: 20px 0 10px;
        text-align: center;
        width: 100%;
    }
    .p-features .feature + .feature {
        margin-left: 0px;
    }
    .payment-content .p-features .feature + .feature,
    .premium-content .p-features .feature + .feature,
    .thankyou-content .p-features .feature + .feature,
    .thankyou-content .box-left .p-features .feature + .feature,
    .thankyou-content .box-right .p-features .feature + .feature{
        margin-left: 0px;
    }

    .bizz-content .box .add-images .profile-image-logo{
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
    }
    .bizz-content .box .add-images .profile-image-logo img{
        width: 75px;
    }
    .bizz-content .box-left {
        width: 100%;
        padding-right: 30px;
        box-sizing: border-box;
        float: left;
        margin: 60px 0 20px;
    }
    .bizz-content .box-right {
        width: 100%;
        padding: 10px;
    }
    .bizz-content .box-left .input-field {
        font-size: 19px;
        line-height: 30px;
        border: 2px solid #d1cfcf;
        padding: 12px;
    }
}
</style>


        <script type="text/javascript" src="{{ asset('assets/js/fileupload.js') }}"></script>       
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>



@endsection


