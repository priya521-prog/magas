<?php
namespace App\Http\Controllers;

use App\Ad;
use App\Contact_query;
use App\Payment;
use App\Report_ad;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

//echo "<pre>";
$paymentmade = $lUser->payment;
$nameboth = $lUser->name;
$user_type = $lUser->user_type;
?>


          

<div class="thankyou-content">
    <div class="row">
      <div class="col-lg-3">
           <div class="box-heading">
                                                Thank you for upgrading to Premium 
                                            </div>
                                        </div> 
                                          <div class="col-lg-3"> 
                                       <div class="p-text">
                                                           Enjoy the Premium Features
                                                        </div>
                                            </div>
                                             <div class="col-lg-6"> 
                                              <ul class="p-list">
   <li>Post for <span class="text-pink">Free</span> in <span class="bold">pro</span> (your Full Profile with Photo & 1 File Upload</li>
                                                          
                                                            <li>Unlimited <span class="bold">Classifieds</span> Listings</li>
                                                            <li>Post a <span class="bold">Project</span> for <span class="text-pink">Free</span> Evaluation</li>
                                                            <li>Post unlimited <span class="bold">Blogs</span></li>
                                                            <li>Access to all <span class="bold">Content</span> on the platform</li>
                                                        </ul>
                                      
                                            </div>
</div>
    
            <!-- /.row -->
            </div>

<link rel="stylesheet" href="{{ asset('assets/css/globalp.css') }}">
