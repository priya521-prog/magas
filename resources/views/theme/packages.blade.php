@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection
@section('main')
<div class="body packages">

            <div class="main">
                <div class="section packages-content" style="margin-bottom: 150px;">
                     
                    <div class="tabpanel">
                        <div class="custom-container">
                            <div class="alacarte-menu" style="margin-top: 30px;">
                                <p style="color: red;
    font-size: 22px;">** This is applicable to UAE only</p>
                                <div class="tabpanel">
                                    <ul>
                                        <li class="each-form-tab active" >
                                            <div class="curved-buttons">
                                               <a href="{{ route('catalogue') }}"> À LA CARTE</a>
                                            </div>
                                        </li>
                                        <li class="each-form-tab" onclick="showTab('p-tab', 'p-content');">
                                            <div class="curved-buttons">
                                                Packages
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="nav nav-tabs">
                                    
                                    <li class="each-form-tab">
                                            <div class="curved-buttons">
                                                <a  style="cursor: pointer;color:#fff;padding: 2px !important;" href="{{ asset('assets/service_packages2020.pdf') }}" download>
                                            Download
                                        </a>
                                                
                                            </div>
                                        </li>
                                        
                                    <!--<li class="active">-->
                                    <!--    <a  style="cursor: pointer;" href="{{ asset('assets/service_packages2020.pdf') }}" download>-->
                                    <!--        Download-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                            <div class="box">
                                <div class="a-content tab">
                                    À LA CARTE
                                    <div class="clearfix"></div>
                                </div>
                                <div class="p-content tab">
                                    <div class="table-responsive">          
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <!--<div class="img">-->
                                                        <!--    <img src="{{ asset('assets/images/packages/icon-startup.png') }}" alt="" class="img-responsive">-->
                                                        <!--</div>-->
                                                        <div class="contents">
                                                            <div class="title">
                                                                Start Up
                                                            </div>
                                                            <div class="desc">
                                                                5 Services
                                                            </div>
                                                        </div>
                                                        <div class="link">


<!--<form action="" method="post" name="frmPayPal1">-->

<!--                      <input type="hidden" name="business" value="info@magas.ae">-->

<!--                      <input type="hidden" name="cmd" value="_xclick">-->

<!--                      <input type="hidden" name="item_name" value="It Solution Stuff">-->

<!--                      <input type="hidden" name="item_number" value="2">-->

<!--                      <input type="hidden" name="amount" value="999">-->

<!--                      <input type="hidden" name="no_shipping" value="1">-->

<!--                      <input type="hidden" name="currency_code" value="USD">-->

<!--                      <input type="hidden" name="cancel_return" value="">-->

<!--                      <input type="hidden" name="return" value="">  -->

                   <a href="{{ route('startup') }}"> <button class="custom-button"><span>Buy</span> $ 999/Month</button></a>
                <!--</form>-->


                                                        </div>
                                                    </th>
                                                    <th>
                                                        <!--<div class="img">-->
                                                        <!--    <img src="{{ asset('assets/images/packages/icon-growth.png') }}" alt="" class="img-responsive">-->
                                                        <!--</div>-->
                                                        <div class="contents">
                                                            <div class="title">
                                                                Growth
                                                            </div>
                                                            <div class="desc">
                                                                7 Services
                                                            </div>
                                                        </div>
                                                        <div class="link">

<!--<form action="" method="post" name="frmPayPal1">-->

<!--                      <input type="hidden" name="business" value="info@magas.ae">-->

<!--                      <input type="hidden" name="cmd" value="_xclick">-->

<!--                      <input type="hidden" name="item_name" value="It Solution Stuff">-->

<!--                      <input type="hidden" name="item_number" value="2">-->

<!--                      <input type="hidden" name="amount" value="1799">-->

<!--                      <input type="hidden" name="no_shipping" value="1">-->

<!--                      <input type="hidden" name="currency_code" value="USD">-->

<!--                      <input type="hidden" name="cancel_return" value="">-->

<!--                      <input type="hidden" name="return" value="">  -->

                    <!--<button class="custom-button" href="#"><span>Buy</span> $ 1,799/Month</button>-->
                    
                     <a href="{{ route('growth') }}"> <button class="custom-button"><span>Buy</span> $ 1,799/Month</button></a>
                <!--</form>-->


                                                        </div>
                                                    </th>
                                                    <th>
                                                        <!--<div class="img">-->
                                                        <!--    <img src="{{ asset('assets/images/packages/icon-sail.png') }}" alt="" class="img-responsive">-->
                                                        <!--</div>-->
                                                        <div class="contents">
                                                            <div class="title">
                                                                Sail
                                                            </div>
                                                            <div class="desc">
                                                                9 Services
                                                            </div>
                                                        </div>
                                                        <div class="link">

<!--<form action="" method="post" name="frmPayPal1">-->

<!--                      <input type="hidden" name="business" value="info@magas.ae">-->

<!--                      <input type="hidden" name="cmd" value="_xclick">-->

<!--                      <input type="hidden" name="item_name" value="It Solution Stuff">-->

<!--                      <input type="hidden" name="item_number" value="2">-->

<!--                      <input type="hidden" name="amount" value="2499">-->

<!--                      <input type="hidden" name="no_shipping" value="1">-->

<!--                      <input type="hidden" name="currency_code" value="USD">-->

<!--                      <input type="hidden" name="cancel_return" value="">-->

<!--                      <input type="hidden" name="return" value="">  -->

                    <!--<button class="custom-button" href="#"><span>Buy</span> $ 2499/Month</button>-->
                    
                     <a href="{{ route('sail') }}"> <button class="custom-button"><span>Buy</span> $ 2499/Month</button></a>
                <!--</form>-->


                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            1
                                                        </div>
                                                        <div class="title">
                                                            ACCOUNTING
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            250 Entries
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            500 Entries
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Unlimited Entries
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            2
                                                        </div>
                                                        <div class="title">
                                                            VAT REGISTRATION & FILING
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Quarterly Filing
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Quarterly Filing
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Quarterly Filing
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            3
                                                        </div>
                                                        <div class="title">
                                                            DOMAIN SETUP & EMAIL HOSTING
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            5 Users
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            10 Users
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Unlimited Entries
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            4
                                                        </div>
                                                        <div class="title">
                                                            GRAPHIC DESIGNING
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            5 Creatives
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            10 Creatives
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Unlimited Entries
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            5
                                                        </div>
                                                        <div class="title">
                                                            SME LISTING
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Standard
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Premium
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            Premium
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            6
                                                        </div>
                                                        <div class="title">
                                                            Website
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            5 Pages
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            10 Pages
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            7
                                                        </div>
                                                        <div class="title">
                                                            MANAGEMENT CONSULTANCY
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            5 Hours
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            10 Hours
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            8
                                                        </div>
                                                        <div class="title">
                                                            INVESTMENT ADVISE
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            MAGAS - PCP Programme
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="circle">
                                                            9
                                                        </div>
                                                        <div class="title">
                                                            PREFERRED CHANNEL PARTNER
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text">
                                                            15% Discount + Lead preferrence
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div>  
</div>
 
<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">

@endsection
