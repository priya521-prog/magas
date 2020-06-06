@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
<style>
  a:hover{
      background:none;
  }
   li:hover{
       background:none;
   }
   .nav>li>a:hover{
        background:none;
        border:none;
   }
   .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
       
    background:none;
        border:none;
   }
</style>
 <div class="body clients">
            
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                     <!--Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                        <!--<li data-target="#quote-carousel" data-slide-to="1"></li>-->
                                        <!--<li data-target="#quote-carousel" data-slide-to="2"></li>-->
                                        <!-- <li data-target="#quote-carousel" data-slide-to="3"></li>-->
                                    </ol>

                                     <!--Carousel Slides / Quotes -->
                                  <div class="carousel-inner" role="listbox">

                                         <!--Quote 1 -->
                                          <div class="item active">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="banner">
                <div class="image">
                    <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>
                </div>
                <div class="custom-container">
                    <div class="banner-content">
                        <div class="title" style="color:#fff;font-size:25px !important;">
                            "MAGAS is our VAT consultant. They provide proper assistance and guidance for the compliance with the provisions of the UAE Tax Laws. They also provide VAT training, assist the transition of IT and accounting procedure, analysis the impact of the VAT and support till VAT return filling. We are happy and satisfied with the service they are providing to our company."
                        </div>
                                                <div class="text desc" style="color:#fff;font-size:15px;">
                           <span style="color:#d33a70;">Aleli T. Lavarias</span><br/>
                                                        Finance Manager - MENA<br>Gale Pacific


                        </div>
                    </div>
                </div>
            </div>
            
                                                     
                                                   <!--  <div class="banner">-->
                                                   <!--   <div class="custom-container">-->
                                                   <!-- <div class="text">-->
                                                      
                                                   <!--    <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>   "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
                                                   <!--</div>-->
                                                   <!-- </div>-->
                                                    </div>
                                                    <!--<div class="text desc">-->
                                                    <!--    <span>Santosh Kumar J</span><br/>-->
                                                    <!--    Google-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
            <!--                                 <div class="item">-->
            <!--                                <div class="row">-->
            <!--                                    <div class="col-sm-12">-->
            <!--                                        <div class="banner">-->
            <!--    <div class="image">-->
            <!--        <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>-->
            <!--    </div>-->
            <!--    <div class="custom-container">-->
            <!--        <div class="banner-content">-->
            <!--            <div class="title">-->
            <!--                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
            <!--            </div>-->
            <!--            <div class="text desc">-->
            <!--               <span style="color:#d33a70">Santosh Kumar J</span><br/>-->
            <!--                                            Google-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
                                                     
                                                   <!--  <div class="banner">-->
                                                   <!--   <div class="custom-container">-->
                                                   <!-- <div class="text">-->
                                                      
                                                   <!--    <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>   "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
                                                   <!--</div>-->
                                                   <!-- </div>-->
            <!--                                        </div>-->
                                                    <!--<div class="text desc">-->
                                                    <!--    <span>Santosh Kumar J</span><br/>-->
                                                    <!--    Google-->
                                                    <!--</div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                   <div class="item">-->
            <!--                                <div class="row">-->
            <!--                                    <div class="col-sm-12">-->
            <!--                                        <div class="banner">-->
            <!--    <div class="image">-->
            <!--        <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>-->
            <!--    </div>-->
            <!--    <div class="custom-container">-->
            <!--        <div class="banner-content">-->
            <!--            <div class="title">-->
            <!--                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
            <!--            </div>-->
            <!--            <div class="text desc">-->
            <!--               <span style="color:#d33a70">Santosh Kumar J</span><br/>-->
            <!--                                            Google-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
                                                     
                                                   <!--  <div class="banner">-->
                                                   <!--   <div class="custom-container">-->
                                                   <!-- <div class="text">-->
                                                      
                                                   <!--    <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>   "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
                                                   <!--</div>-->
                                                   <!-- </div>-->
            <!--                                        </div>-->
                                                    <!--<div class="text desc">-->
                                                    <!--    <span>Santosh Kumar J</span><br/>-->
                                                    <!--    Google-->
                                                    <!--</div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                   <div class="item">-->
            <!--                                <div class="row">-->
            <!--                                    <div class="col-sm-12">-->
            <!--                                        <div class="banner">-->
            <!--    <div class="image">-->
            <!--        <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>-->
            <!--    </div>-->
            <!--    <div class="custom-container">-->
            <!--        <div class="banner-content">-->
            <!--            <div class="title">-->
            <!--                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
            <!--            </div>-->
            <!--            <div class="text desc">-->
            <!--               <span style="color:#d33a70">Santosh Kumar J</span><br/>-->
            <!--                                            Google-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            
                                                     
                                                   <!--  <div class="banner">-->
                                                   <!--   <div class="custom-container">-->
                                                   <!-- <div class="text">-->
                                                      
                                                   <!--    <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>   "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
                                                   <!--</div>-->
                                                   <!-- </div>-->
            <!--                                        </div>-->
                                                    <!--<div class="text desc">-->
                                                    <!--    <span>Santosh Kumar J</span><br/>-->
                                                    <!--    Google-->
                                                    <!--</div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
                                            
                                            
                                            
                                        <!--END-->
                                        
                                        <!--   <div class="item">-->
                                        <!--    <div class="row">-->
                                        <!--        <div class="col-sm-12">-->
                                        <!--            <div class="text">-->
                                        <!--  <img src="{{ asset('assets/images/clients/banner.jpg') }}" alt="Banner" class="img-responsive"/>-->
                                        <!--   </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        
                                       
                                        </div>
                                         <!--Quote 2 -->
                                        <!--<div class="item">-->
                                        <!--    <div class="row">-->
                                        <!--        <div class="col-sm-12" style="background-color:red">-->
                                        <!--            <div class="text">-->
                                        <!--                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
                                        <!--            </div>-->
                                        <!--            <div class="text desc">-->
                                        <!--                <span>Santosh Kumar J</span><br/>-->
                                        <!--                Google-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                         <!--Quote 3 -->
                                        <!--<div class="item">-->
                                        <!--    <div class="row">-->
                                        <!--        <div class="col-sm-12">-->
                                        <!--            <div class="text">-->
                                        <!--                "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore."-->
                                        <!--            </div>-->
                                        <!--            <div class="text desc">-->
                                        <!--                <span>Santosh Kumar J</span><br/>-->
                                        <!--                Google-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                       
                                    </div>

                                </div>
                                
            <div class="main">
                <div class="section endorsements">
                    <div class="custom-container">
                        <div class="tabpanel">
                             <ul class="nav nav-tabs" style="margin-bottom: 3px; !important">
                                <!--<li class="nav-item bg-grey2 curved-buttons" style="float: left;">-->
                                <!--    <a href="#network" class="nav-link active" data-toggle="tab" style=" display: inline;">Network</a>-->
                                <!--</li>-->
                                <li class="nav-item bg-grey2 curved-buttons" style="float: left;background: #EA1C57!important;color:white;padding: 7px 20px;
    margin-top: 31px;">
                                    <!--<a href="#client" class="nav-link active" data-toggle="tab" style=" display: inline;" >Clients</a>-->
                                    <a href="#client" class="nav-link active" data-toggle="tab"  style=" display: inline;color: white;" >Clients</a>
                                </li>
                                <li class="nav-item bg-grey2 curved-buttons" style="float: left;background: #EA1C57!important;color:white;padding: 7px 20px;
    margin-top: 31px;">
                                    <a href="#partners" class="nav-link" data-toggle="tab" style=" display: inline;color: white;" >Partners</a>
                                </li>
                                	<li class="active" style="float: right;padding: 7px 20px;
    margin-top: 4px;">

								
									<!--    	  <a  href="/user/create" style="cursor: pointer; border:solid transparent;background:#dcddd8!important;color:#EA1C57">-->
                                        
									<!--	Become a Associate-->

									<!--</a>-->
									<?php
									if (Auth::user()) { 
									    ?>
									    <li class="nav-item bg-grey2 curved-buttons" style="float: right;background: #EA1C57!important;color:white;padding: 7px 20px;
    margin-top: 36px;">
									  <a  href="{{ route('associate')}}" class="nav-link" data-toggle="tab" style=" display: inline;color: white;font-size:13px">
                                        
										Become an Associate

									</a>
									</li>
									<?php
									}else{
									    ?>
									     <li class="nav-item bg-grey2 curved-buttons" style="float: right;background: #EA1C57!important;color:white;padding: 7px 20px;
    margin-top: 36px;">
								<a  href="/user/create" style=" display: inline;color: white;font-size:13px">
                                        ASSOCIATE & EARN
										
								</a>
									</li>
									    <?php
									}
									?>

								</li>
                                <!--<li class="nav-item bg-grey2" style="float: right;">-->
                                <!--    <a  href="/user/create" style="cursor: pointer; border:solid transparent" >-->
                                <!--        Become a Associate-->
                                <!--    </a>-->
                                <!--</li>-->
                                
                            </ul>
                        </div>
                            <div class="box">
                            <div class="row">
                            <div class="tab-content">
                                 <div class="tab-pane fade in active" id="client">
                                    <!-- <div class="title">-->
                                    <!--    CLIENTS-->
                                    <!--</div>-->
                                    <div class="client-logos">
                                        <div class="row">
                                              <div class="col-md-12">
                                                  <?php
                                                
                                                foreach($clients as $client){
                                                   
                                                    // echo "<img src='../uploads/logos/.$partner->media_name;'>";
                                                ?>
                                              
                                              
                                                <img src="<?php echo '../uploads/logos/'.$client->media_name;?>" width="150px"
    height="100px" hspace="20"/>

                                               
                                                <?php
                                               }
                                                ?>
                                                  </div>
                                            <!--<div class="col-md-12">-->
                                            <!--        <div class="col-md-2">-->
                                            <!--             <img src="{{ asset('assets/images/clients/2354.png') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                 <img src="{{ asset('assets/images/clients/AboveDigital.png') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                 <img src="{{ asset('assets/images/clients/Cranmore.png') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                                            
                                            <!--    <img src="{{ asset('assets/images/clients/deGrisogono.png') }}" alt="" class="img-responsive">-->
                                            
                                            <!--           </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                 <img src="{{ asset('assets/images/clients/GalePacific.png') }}" alt="" class="img-responsive">-->
                                            <!--                </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                <img src="{{ asset('assets/images/clients/Impact.png') }}" alt="" class="img-responsive">-->
                                            <!--                </div>-->
                                                
                                            <!--</div>-->
                                            <!--<div class="col-md-12">-->
                                               
                                            <!--        <div class="col-md-2">-->
                                            <!--              <img src="{{ asset('assets/images/clients/Masterheat.jpg') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                <img src="{{ asset('assets/images/clients/MSM.jpg') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                 <img src="{{ asset('assets/images/clients/Nemesis.png') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                                            
                                            <!--     <img src="{{ asset('assets/images/clients/Relactant.png') }}" alt="" class="img-responsive">-->
                                            
                                            <!--           </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                 <img src="{{ asset('assets/images/clients/MurdochUniversity.png') }}" alt="" class="img-responsive">-->
                                            <!--                </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                <img src="{{ asset('assets/images/clients/Splendour.png') }}" alt="" class="img-responsive">-->
                                            <!--                </div>-->
                                                
                                            <!--</div>-->
                                            <!--<div class="col-md-12">-->
                                                
                                                
                                            <!--     <div class="col-md-2">-->
                                            <!--    <img src="{{ asset('assets/images/clients/UAG.png') }}" alt="" class="img-responsive">-->
                                            <!--</div>-->
                                            <!-- <div class="col-md-2">-->
                                            <!--    <img src="{{ asset('assets/images/clients/Union.png') }}" alt="" class="img-responsive">-->
                                            <!--</div>-->
                                            <!--</div>-->
                                        </div>
                                        
                                               
                                           
                                               
                                            
                                    </div>
                                 </div>
                                  <div class="tab-pane fade" id="partners">
                                    <!-- <div class="title">-->
                                    <!--    CLIENTS-->
                                    <!--</div>-->
                                    <div class="client-logos">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php
                                                
                                                foreach($partners as $partner){
                                                   
                                                    // echo "<img src='../uploads/logos/.$partner->media_name;'>";
                                                ?>
                                              
                                              
                                                <img src="<?php echo '../uploads/logos/'.$partner->media_name;?>" width="150px"
    height="100px" hspace="20"/>

                                               
                                                <?php
                                               }
                                                ?>

                                                    <!--<div class="col-md-2">-->
                                                    <!--      <img src="{{ asset('assets/images/partners/BakerTilly.png') }}" alt="" class="img-responsive">-->
                                                    <!--    </div>-->
                                                    <!--    <div class="col-md-2">-->
                                                    <!--        <img src="{{ asset('assets/images/partners/CalvinJamesRecruitment.png') }}" alt="" class="img-responsive">-->
                                                    <!--    </div>-->
                                                    <!--    <div class="col-md-2">-->
                                                    <!--           <img src="{{ asset('assets/images/partners/CBS.jpg') }}" alt="" class="img-responsive">-->
                                                    <!--    </div>-->
                                                    <!--    <div class="col-md-2">-->
                                                            
                                                    <!--    <img src="{{ asset('assets/images/partners/Crowe.png') }}" alt="" class="img-responsive">-->
                                            
                                                    <!--   </div>-->
                                                    <!--    <div class="col-md-2">-->
                                                    <!--        <img src="{{ asset('assets/images/partners/Dreamdays.jpg') }}" alt="" class="img-responsive">-->
                                                    <!--        </div>-->
                                                    <!--    <div class="col-md-2">-->
                                                    <!--        <img src="{{ asset('assets/images/partners/EIKR.png') }}" alt="" class="img-responsive">-->
                                                    <!--        </div>-->
                                                
                                            </div>
                                            <!--<div class="col-md-12">-->
                                          
                                            <!--        <div class="col-md-2">-->
                                            <!--               <img src="{{ asset('assets/images/partners/Formaco.jpg') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                <img src="{{ asset('assets/images/partners/HLB.png') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--                 <img src="{{ asset('assets/images/partners/InfoCredit.png') }}" alt="" class="img-responsive">-->
                                            <!--            </div>-->
                                            <!--            <div class="col-md-2">-->
                                                            
                                            <!--     <img src="{{ asset('assets/images/partners/kpmg-logo-min.png') }}" alt="" class="img-responsive">-->
                                            
                                            <!--           </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--               <img src="{{ asset('assets/images/partners/panaceame_logo1-min.png') }}" alt="" class="img-responsive">-->
                                            <!--                </div>-->
                                            <!--            <div class="col-md-2">-->
                                            <!--               <img src="{{ asset('assets/images/partners/PKF.jpg') }}" alt="" class="img-responsive">-->
                                            <!--                </div>-->
                                                
                                            <!--</div>-->
                                            <!--<div class="col-md-12">-->
                                                
                                            <!--     <div class="col-md-2">-->
                                            <!--     <img src="{{ asset('assets/images/partners/Rakez.jpg') }}" alt="" class="img-responsive">-->
                                            <!--</div>-->
                                            <!-- <div class="col-md-2">-->
                                            <!--    <img src="{{ asset('assets/images/partners/Tally.png') }}" alt="" class="img-responsive">-->
                                            <!--</div>-->
                                            <!--<div class="col-md-2">-->
                                            <!--     <img src="{{ asset('assets/images/partners/Tally.png') }}" alt="" class="img-responsive">-->
                                            <!--</div>-->
                                            <!-- <div class="col-md-2">-->
                                            <!--    <img src="{{ asset('assets/images/partners/Zoho.png') }}" alt="" class="img-responsive">-->
                                            <!--</div>  -->
                                            <!--</div>-->
                                        </div>
                                        
                                               
                                            
                                    </div>
                                 </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div><br><br>
                                                    <div class="section">
                    <!--<div class="custom-container">-->
                    <!--    <div class="container-fluid">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-sm-12">-->
                    <!--                <div class="title">-->
                    <!--                    INTERESTED IN ASSOCIATING WITH US?-->
                    <!--                </div>-->
                    <!--                <div class="link">-->
                    <!--                    <a href="{{ asset('assets/downloads/MAGAS-FORM-KYC.pdf') }}"  class="custom-button" download>ASSOCIATE WITH US</a>-->

                    <!--                </div>-->
                    <!--            </div>      -->
                    <!--        </div> -->
                    <!--    </div> -->
                    <!--</div> -->
                </div>
                        </div>
                        
<!--                        <div class="box">-->
<!--                            <div class="row">-->
<!--                            <div class="tab-content">-->
                         
                            
<!--                            <div class="tab-pane fade" id="client">-->
<!--                                <div class="col-sm-12">-->
<!--                                    <div class="title">-->
<!--                                        CLIENTS-->
<!--                                    </div>-->
<!--                                    <div class="client-logos">-->
<!--                                        <ul>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/2354.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/AboveDigital.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Cranmore.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/deGrisogono.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/GalePacific.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Impact.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Masterheat.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/MSM.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/MurdochUniversity.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Nemesis.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Relactant.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Splendour.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/UAG.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/clients/Union.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                        </ul>-->
        
<!--                                    </div>-->
<!--                                </div>-->
                                
<!--                            </div><!--client -->
<!--                            <div class="tab-pane fade" id="partners">-->
<!--                              <div class="col-sm-12">-->
<!--                                    <div class="title">-->
<!--                                        PARTNERS-->
<!--                                    </div>-->
<!--                                    <div class="client-logos">-->
<!--                                        <ul>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/BakerTilly.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/CalvinJamesRecruitment.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/CBS.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Crowe.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Dreamdays.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/EIKR.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Formaco.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/HLB.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/InfoCredit.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/kpmg-logo-min.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/panaceame_logo1-min.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/PKF.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Rakez.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Shams.jpg') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                        	<li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Tally.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                            <li>-->
<!--                                                <img src="{{ asset('assets/images/partners/Zoho.png') }}" alt="" class="img-responsive grayscale">-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                </div>      -->
<!--                            </div>-->
<!--                            </div><!-- PARTNERS-->
<!--                            </div>-->
                            
                            
<!--                            <div class="section">-->
<!--                    <div class="custom-container">-->
<!--                        <div class="container-fluid">-->
<!--                            <div class="row">-->
<!--                                <div class="col-sm-12">-->
<!--                                    <div class="title">-->
<!--                                        INTERESTED IN ASSOCIATING WITH US?-->
<!--                                    </div>-->
<!--                                    <div class="link">-->
<!--                                        <a href="{{ asset('assets/downloads/MAGAS-FORM-KYC.pdf') }}"  class="custom-button" download>ASSOCIATE WITH US</a>-->

<!--                                    </div>-->
<!--                                </div>      -->
<!--                            </div> -->
<!--                        </div> -->
<!--                    </div> -->
<!--                </div>-->
    
<!--    </div><!--row-->
<!--</div> <!--box-->
                        
                        
                        
                        
                        



  
 <!--       </div>-->
<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
<style>
li.bg-grey2 a:active
    {
        /*color:black;*/
        /*background: red;*/
    }
    
/*a.nav-link:active{*/
/*   background-color: red;*/
/*}*/


</style>
        <script >
            // //Set the carousel options
            // $('#quote-carousel').carousel({
            //     pause: true,
            //     interval: 4000
            // });
        </script>
@endsection


@section('page-js')

    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
 



@endsection
