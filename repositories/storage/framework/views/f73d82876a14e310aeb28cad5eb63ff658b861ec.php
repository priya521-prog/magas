<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

  <div class="main">
            <div class="custom-container">
                <div class="listingbody">
                    <div class="container-fluid">
                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                        <form action="" id="businessadsPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>
                                <div class="form-tabs">
                                    <ul>
                                        <li class="sign-up-tab each-form-tab active" onclick="showTab('bizz-tab', 'bizz-content');">
                                            <div class="circle">
                                                1
                                            </div>
                                            <div class="circle-title">
                                                VIDEO
                                            </div>
                                        </li>
                                        <!--<li class="premium-tab each-form-tab" onclick="showTab('bizz-payment-tab', 'bizz-payment-content');">-->
                                        <!--    <div class="circle">-->
                                        <!--        2-->
                                        <!--    </div>-->
                                        <!--    <div class="circle-title">-->
                                        <!--        Payment-->
                                        <!--    </div>-->
                                        <!--</li>-->

                                    </ul>
                                    <div class="clearfix"></div>
                                    <div class="bizz-content tab">
                                        <div class="curved-buttons">
                                            Add Video
                                        </div>
                                        <div class="box">
                                            <div class="add-images">
                                                <div class="custom-file-upload input-row">
                                                       <br/><input type="file" id="filescustommedia" value="UPLOAD PROFILE PIC" name="filescustommedia" /><br/><br/>
<?php echo $errors->has('filescustommedia')? '<p class="help-block" style="color:red;">Please Upload Image. </p>':''; ?>

                                                        <div class="clearfix"></div>
                                                    </div>

						     <!--<div class="custom-file-upload input-row">-->
           <!--                                             COVER IMAGE (Recommended 1020*800)<br/><input type="file" id="file" value="UPLOAD PROFILE PIC" name="filescustomone" />-->
           <!--                                             <div class="clearfix"></div>-->
           <!--                                         </div>-->
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="box-left">
                                                <div class="sign-up-form">
						
                                                    <div class="input-row">
                                                        <input type="text" name="ad_title" id="" class="input-field" value="" placeholder="TITLE"  />
<?php echo $errors->has('ad_title')? '<p class="help-block" style="color:red;">Please enter the Title. </p>':''; ?>

                                                    </div>
<!--                                                     <div class="input-row">-->
<!--                                                        <input type="text" name="company_name" id="" class="input-field" value="" placeholder="COMPANY NAME"  />-->
<!--<?php echo $errors->has('company_name')? '<p class="help-block" style="color:red;">Please enter the company name. </p>':''; ?>-->
<!--                                                    </div>-->

<!--<div class="input-row">-->
<!--                                                        <input type="text" name="affilate_code" id="affilate_code" class="input-field" value="" placeholder="AFFILIATE / REFERAL CODE (OPTIONAL)"  />-->

<!--                                                    </div>-->
						<div class="box-heading">
                                                    
                                                </div>	
<!--                                                     <div class="input-row">-->
<!--						    <textarea name="ad_description" id="ad_description" class="form-control" rows="8"></textarea>-->
<!--                                <?php echo $errors->has('ad_description')? '<p class="help-block" style="color:red;">Please enter the Description. </p>':''; ?>-->
                                <!--<p class="text-info">  A description will help user to know details about your Business</p>-->
<!--</div>-->
                                                </div>
                                            </div>
<!--                                            <div class="box-right">-->
<!--                                                <div class="box-heading">-->
<!--                                                    Author Information-->
<!--                                                </div>-->
<!--                                                <div class="form-text">-->
<!--                                                    * ALL ARE MANDATORY FIELDS-->
<!--                                                </div>-->
<!--                                                <div class="sign-up-form">-->
                                                    <!--<div class="custom-file-upload input-row">-->
                                                    <!--    <input type="file" id="filescustomtwo" name="filescustomtwo" /><br/><br/>-->
						 
                                                    <!--    <div class="clearfix"></div>-->
                                                    <!--</div>-->
                                                    <!--<div class="input-row">-->
                                                    <!--    <input type="text" name="seller_name" id="seller_name" class="input-field" value="" placeholder="ENTER FULL NAME"  /> <?php echo $errors->has('seller_name')? '<p class="help-block"style="color:red;">Please enter Full Name.</p>':''; ?>-->

                                                    <!--</div>-->
<!--                                                   <div class="custom-file-upload input-row">-->
<!--                                                        <input type="file" id="filescustom" name="filescustom"/><br/><br/>-->
							
<!--                                                        <div class="clearfix"></div>-->
<!--                                                    </div>-->
                                                   
<!--                                                    <div class="input-row">-->
<!--                                                        <input type="email" name="seller_email" id="" class="input-field" value="" placeholder="EMAIL"  />-->
<!-- <?php echo $errors->has('seller_email')? '<p class="help-block"style="color:red;">Please enter the email id.</p>':''; ?>-->
<!--                                                    </div>-->
<!--                                                    <div class="input-row">-->
<!--                                                        <input type="tel" name="seller_phone" id="seller_phone" class="input-field" value="" placeholder="CONTACT NO"  /> <?php echo $errors->has('seller_phone')? '<p class="help-block"style="color:red;">Please enter the phone no.</p>':''; ?>-->
<!--                                                    </div>-->
<!--                                                     <div class="input-row">-->
<!--                                                        <input type="text" name="seller_website" id="seller_website" class="input-field" value="" placeholder="WEBSITE"  /> <?php echo $errors->has('seller_website')? '<p class="help-block"style="color:red;">Please enter website.</p>':''; ?>-->
<!--                                                    </div>-->
<!--                                                     <div class="input-row">-->
<!--                                                        <input type="text" name="social_media_link" id="social_media_link" class="input-field" value="" placeholder="SOCIAL MEDIA LINK"  /> <?php echo $errors->has('social_media_link')? '<p class="help-block"style="color:red;">Please enter social media link.</p>':''; ?>-->
<!--                                                    </div>-->

<!--						    <div class="input-row">-->
<!--                                                        <div class="select">-->
<!--                                                            <select class="form-control select2" name="category">-->
<!--                                    <option value="">Select Industry</option>-->
<!--                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--                                        <?php if($category->sub_categories->count() > 0): ?>-->
<!--                                            <optgroup label="<?php echo e($category->category_name); ?>">-->
<!--                                                <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--                                                    <option value="<?php echo e($sub_category->id); ?>" ><?php echo e($sub_category->category_name); ?></option>-->
<!--                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--                                            </optgroup>-->
<!--                                        <?php endif; ?>-->
<!--                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--                                </select>-->

<!--                                                        </div>-->
<!--                                <?php echo $errors->has('category')? '<p class="help-block"style="color:red;">Please Select the industry.</p>':''; ?>-->
<!--                                                    </div>-->



<!--						    <div class="input-row">-->
<!--                                                        <div class="select">-->
<!--                                                            <select class="form-control select2" name="servicetype" id="servicetype">-->
<!--                                                                <option value ="">Service Type</option>-->
<!--                                                                 <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>-->
<!--                                                                <option value="Actor">Actor</option>-->
<!--                                                                <option value="Administration">Administration</option>-->
<!--                                                                <option value="Advertising and Marketing">Advertising and Marketing</option>-->
<!--                                                                <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>-->
<!--                                                                <option value="Actor">Actor</option>-->
<!--                                                                <option value="Administration">Administration</option>-->
<!--                                                                <option value="Analysts">Analysts</option>-->
<!--                                                                <option value="Architects">Architects</option>-->
<!--                                                                <option value="Archivists & Curator">Archivists & Curator</option>-->
<!--                                                                <option value="Artist">Artist</option>-->
<!--                                                                <option value="Auditing & Assurance">Auditing & Assurance</option>-->
<!--                                                                <option value="Authors & Writer">Authors & Writer</option>-->
<!--                                                                <option value="Cartographers and Surveyor">Cartographers and Surveyor</option>-->
<!--                                                                <option value="Consultant">Consultant</option>-->
<!--                                                                <option value="Dancers & Choreographer">Dancers & Choreographer</option>-->
<!--                                                                <option value="Interior Decorator">Interior Decorator</option>-->
<!--                                                                <option value="Designer">Designer</option>-->
<!--                                                                <option value="Designer">Developer</option>-->
<!--                                                                <option value="Economist">Economist</option>-->
<!--                                                                <option value="Governmental">Governmental</option>-->
<!--                                                                <option value="IT Specialist">IT Specialist</option>-->
<!--                                                                <option value="Lawyer">Lawyer</option>-->
<!--                                                                <option value="Medical Practitioner">Medical Practitioner</option>-->
<!--                                                                <option value="Musicians, Singers & Composers">Musicians, Singers & Composers</option>-->
<!--                                                                <option value="Pharmacist">Pharmacist</option>-->
<!--                                                                <option value="Physio Therapists">Physio Therapists</option>-->
<!--                                                                <option value="Public Relation Officer">Public Relation Officer</option>-->
<!--                                                                <option value="Repairs & Maintenance">Repairs & Maintenance</option>-->
<!--                                                                <option value="Tax Expert">Tax Expert</option>-->
<!--                                                                <option value="Teacher">Teacher</option>-->
<!--                                                                <option value="Therapist">Therapist</option>-->
<!--                                                                <option value="Trainer">Trainer</option>-->
<!--                                                                <option value="Translation">Translation</option>-->
<!--                                                                <option value="Translators & Interpreters">Translators & Interpreters</option>-->
<!--                                                                <option value="Travel Agent">Travel Agent</option>-->
<!--                                                                <option value="Visual Artists">Visual Artists</option>-->
<!--                                                                <option value="Visual Artists">Web & Multimedia</option>-->
<!--                                                                <option value="Others">Others</option>-->
<!--                                                            </select>-->
<!--                                                        </div>-->
<!--                                <?php echo $errors->has('servicetype')? '<p class="help-block"style="color:red;">Please Select the Service type.</p>':''; ?>-->
<!--                                                    </div>-->


<!-- <div class="input-row"> -->
<!--	<input type="text" class="form-control" id="address" value="" name="address" placeholder="<?php echo app('translator')->get('app.address'); ?>">-->

<!--</div>-->


<!--                                                    <div class="input-row">-->
<!--                                                        <div class="select">-->
<!--                                                            <select name="country" id="slct" class="form-control select2">-->
<!--                                                                <option value="">Select Country</option>-->

<!--                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
<!--                                        <option value="<?php echo e($country->id); ?>" }}><?php echo e($country->country_name); ?></option>-->
<!--                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
<!--                                </select>-->

<!--                                                            </select>-->
<!--                                                        </div>-->
<!--                                <?php echo $errors->has('country')? '<p class="help-block"style="color:red;">Please Select Country.</p>':''; ?>-->

<!--                                                    </div>-->
<!--                                                    <div class="input-row">-->
<!--                                                        <div class="select">-->
<!--                                                            <select id="state_select" name="state" class="form-control select2">-->

<!--                                                                <option value="">Please Select State</option>-->
<!--                                                            </select>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--						    <div class="input-row">-->
<!--                                                        <div class="select">-->
<!--                                                            <select id="city_select" name="city" class="form-control select2">-->
<!--                                                                <option value="">Please Select City</option>-->
<!--                                                            </select>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="input-row">-->
<!--                                                        <div class="text">-->
<!--                                                            Google Map-->
<!--                                                        </div>-->
<!--                                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2090.893618076263!2d55.31723178533374!3d25.23519913442785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d33eb90b045%3A0x181bb23636514747!2sGulf%20Towers!5e0!3m2!1sen!2sin!4v1573293400864!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
<!--                                                    </div>-->

                                                    <!--<div class="input-row ">-->
                                                    <!--    <div class="text share">-->
                                                    <!--        <img src="<?php echo e(asset('assets/images/icon-share.png')); ?>" alt="" class="pull-left"/>-->
                                                    <!--        0 Views-->
                                                    <!--    </div>-->
                                                    <!--    <div class="clearfix"></div>-->
                                                    <!--</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                            <div class="clearfix"></div>

<div class="input-row ">
							<div class="link">
			                                        

<button type="submit" class="custom-button">Submit</button>
		                                    </div>

						</div>
                                        </div>


</form>
                                    </div>

                                    <div class="bizz-payment-content tab">
                                   
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>SELECT</th>
        <th>TYPE OF SOLUTION</th>
        <th>COST</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>WHITEPAPER</td>
        <td>499$</td>
      </tr>
      <tr>
        <td>
                                                        <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox" checked="">
                                                    </td>
        <td>TOTAL</td>
        <td>499$</td>
      </tr>
     
    </tbody>
  </table>

<div class="input-row ">
							<div class="link">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1">

                      <input type="hidden" name="business" value="info@magas.ae">

                      <input type="hidden" name="cmd" value="_xclick">

                      <input type="hidden" name="item_name" value="It Solution Stuff">

                      <input type="hidden" name="item_number" value="2">

                      <input type="hidden" name="amount" value="499">

                      <input type="hidden" name="no_shipping" value="1">

                      <input type="hidden" name="currency_code" value="USD">

                      <input type="hidden" name="cancel_return" value="https://www.magas.ae/paypal/cancel.php">

                      <input type="hidden" name="return" value="https://www.magas.ae/paypal/success.php">  




<button type="submit" class="custom-button">Make Payment</button>
		                </form>                                                                            </div>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    
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

<script type="text/javascript">

        $(document).ready(function(){
 $('[name="country"]').change(function(){
                var country_id = $(this).val();
                $('#state_loader').show();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo e(route('get_state_by_country')); ?>',
                    data : { country_id : country_id,  _token : '<?php echo e(csrf_token()); ?>' },
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
                    url : '<?php echo e(route('get_city_by_state')); ?>',
                    data : { state_id : state_id,  _token : '<?php echo e(csrf_token()); ?>' },
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
                    option += '<option value="0" selected> <?php echo app('translator')->get('app.select_state'); ?> </option>';
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
                    option += '<option value="0" selected> <?php echo app('translator')->get('app.select_city'); ?> </option>';
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
        <script type="text/javascript" src="<?php echo e(asset('assets/js/fileupload.js')); ?>"></script>       
<script src="<?php echo e(asset('assets/plugins/ckeditor/ckeditor.js')); ?>"></script>
<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'ad_description' );
    </script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/create_video.blade.php ENDPATH**/ ?>