<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}


    // Route::get(...)->name(...);

Auth::routes();

Route::get('clear', 'HomeController@clearCache')->name('clear_cache');

Route::get('installation', ['as' => 'installation', 'uses'=>'HomeController@installation']);
Route::post('installation', [ 'uses'=>'HomeController@installationPost']);

Route::get('/', ['as' => 'home', 'uses'=>'HomeController@index']);


Route::get('LanguageSwitch/{lang}', ['as' => 'switch_language', 'uses'=>'HomeController@switchLang']);

//Account activating
Route::get('account/activating/{activation_code}', ['as' => 'email_activation_link', 'uses'=>'UserController@activatingAccount']);

//downloadmedia
 Route::get('/uploads/{url}', ['as' => 'downloadfile', 'uses'=>'AdsController@downloadFile']);
Route::post('/downloadmedia', ['as' => 'downloadmedia', 'uses'=>'AdsController@downloadMedia']);
//Route::get('download_pdf', ['as' => 'download_pdf', 'uses'=>'HomeController@download_pdf']);
 
//Route::get('pdf_report', ['as' => 'pdf_report', 'uses'=>'HomeController@download_pdf']);

//next ad
Route::get('nextad/{id}', ['as' => 'nextad', 'uses'=>'AdsController@nextAd']);
//previousAd
Route::get('previousad/{id}', ['as' => 'previousad', 'uses'=>'AdsController@previousAd']);

//Listing page
Route::get('contact-us', ['as' => 'contact_us_page', 'uses'=>'HomeController@contactUs']);
Route::post('contact-us', ['as' => 'contact_us', 'uses'=>'HomeController@contactUsPost']);
Route::get('user_messages', ['as' => 'user_messages', 'uses'=>'HomeController@usercontactMessages']);


Route::get('terms', ['as' => 'terms', 'uses'=>'AdsController@terms']);

Route::get('add_videos', ['as' => 'add_videos', 'uses'=>'AdsController@addVideos']);
Route::get('videos', ['as' => 'videos', 'uses'=>'AdsController@Videos']);

Route::get('about-us', ['as' => 'about-us', 'uses'=>'HomeController@aboutPage']);

Route::get('associate', ['as' => 'associate', 'uses'=>'HomeController@associate']);
Route::get('endorsements', ['as' => 'endorsements', 'uses'=>'HomeController@endorsementsPage']);


Route::get('page/{slug}', ['as' => 'single_page', 'uses'=>'PostController@showPage']);

Route::get('blog', ['as' => 'blog', 'uses'=>'PostController@blogIndex']);
Route::get('blog/{slug}', ['as' => 'blog_single', 'uses'=>'PostController@blogSingle']);
Route::get('blog/author/{id}', ['as' => 'author_blog_posts', 'uses'=>'PostController@authorPosts']);


Route::get('Project_eval', ['as' => 'Project_eval', 'uses'=>'AdsController@evaluationList']);
Route::get('advertise', ['as' => 'advertise', 'uses'=>'AdsController@advertise']);


Route::get('bizz', ['as' => 'bizz', 'uses'=>'AdsController@bizzListing']);
Route::get('bizz1', ['as' => 'bizz1', 'uses'=>'AdsController@listyourbusiness']);
Route::get('headlines', ['as' => 'headlines', 'uses'=>'AdsController@headlines']);
Route::get('whitepaper', ['as' => 'whitepaper', 'uses'=>'AdsController@whitepaper_list']);
Route::get('whitepaper_list', ['as' => 'whitepaper_list', 'uses'=>'AdsController@whitepaper_list']);

Route::get('pro', ['as' => 'pro', 'uses'=>'AdsController@proListing']);
Route::get('classifieds', ['as' => 'classifieds', 'uses'=>'AdsController@classifiedsListing']);
Route::get('projects', ['as' => 'projects', 'uses'=>'AdsController@opportunitiesListing']);
Route::get('main_search', ['as' => 'main_search', 'uses'=>'AdsController@mainSearch']);

Route::get('inmail_search', ['as' => 'inmail_search', 'uses'=>'UserController@inmail_search']);

Route::get('pro/edit/{id}', ['as'=>'editpro', 'uses' => 'AdsController@editProad']);


Route::post('/pro/edit/{id}', ['uses' => 'AdsController@updateProad']);


Route::get('projects/edit/{id}', ['as'=>'editproject', 'uses' => 'AdsController@editProject']);
Route::post('/projects/edit/{id}', ['uses' => 'AdsController@updateProject']);

Route::get('whitepaper/edit/{id}', ['as'=>'editwhitepaper', 'uses' => 'AdsController@editWhitepaper']);
Route::post('/whitepaper/edit/{id}', ['uses' => 'AdsController@updateWhitepaper']);

 Route::get('bizz/edit/{id}', ['as'=>'editbizz', 'uses' => 'AdsController@editBizz']);
Route::post('/bizz/edit/{id}', ['uses' => 'AdsController@updateBizz']);
 Route::get('bizz/delete/{id}', ['as'=>'deletead', 'uses' => 'AdsController@destroyAd']);

 Route::get('contact/delete/{id}', ['as'=>'deletecontact', 'uses' => 'HomeController@deletecontact']);
 Route::get('usermessage/delete/{id}', ['as'=>'deleteusermessage', 'uses' => 'HomeController@deleteusermessage']);

Route::get('listyourbusiness', ['as' => 'listyourbusiness', 'uses'=>'AdsController@listyourbusiness']);
// Route::post('listyourbusiness', ['as' => 'listyourbusiness', 'uses'=>'AdsController@previewbusiness']);

Route::post('listyourbusiness', ['as' => 'listyourbusiness', 'uses'=>'AdsController@businessStore']);
Route::get('bizzfetch', ['as' => 'bizzfetch', 'uses'=>'AdsController@fetchbizz']);

Route::get('create_your_whitepaper', ['as' => 'create_your_whitepaper', 'uses'=>'AdsController@create_your_whitepaper']);
Route::post('create_your_whitepaper', ['as' => 'create_your_whitepaper', 'uses'=>'AdsController@whitepaperStore']);

Route::get('catalogue', ['as' => 'catalogue', 'uses'=>'AdsController@catalogueDisplay']);

Route::get('packages', ['as' => 'packages', 'uses'=>'AdsController@packagesDisplay']);
Route::get('bespoke', ['as' => 'bespoke', 'uses'=>'AdsController@bespokeDisplay']);
Route::get('invoice', ['as' => 'invoice', 'uses'=>'PaymentController@invoice']);

Route::get('initiatepayments', ['as' => 'initiatepayments', 'uses'=>'PaymentController@initiatePayments']);

Route::get('thankyoumessage', ['as' => 'thankyoumessage', 'uses'=>'UserController@thankMessage']);


Route::get('createclassifieds', ['as' => 'createclassifieds', 'uses'=>'AdsController@createclassifieds']);
Route::post('createclassifieds', ['as' => 'createclassifieds', 'uses'=>'AdsController@classifiedsStore']);

Route::get('classifieds/edit/{id}', ['as'=>'editclassifieds', 'uses' => 'AdsController@editClassifieds']);
 Route::post('/classifieds/edit/{id}', ['uses' => 'AdsController@updateClassifieds']);



Route::get('projectevaluation', ['as' => 'projectevaluation', 'uses'=>'AdsController@projectevaluation']);
Route::post('projectevaluation', ['as' => 'projectevaluation', 'uses'=>'AdsController@evaluationStore']);


Route::get('createprojects', ['as' => 'createprojects', 'uses'=>'AdsController@createprojects']);
Route::post('createprojects', ['as' => 'createprojects', 'uses'=>'AdsController@projectsStore']);

Route::get('insight', ['as' => 'insight', 'uses'=>'AdsController@insightListing']);
Route::get('homelisting', ['as' => 'homelisting', 'uses'=>'AdsController@homeListing']);
Route::get('listing', ['as' => 'listing', 'uses'=>'AdsController@listing']);
Route::get('ad/{id}/{slug?}', ['as' => 'single_ad', 'uses'=>'AdsController@singleAd']);
Route::get('embedded/{slug}', ['as' => 'embedded_ad', 'uses'=>'AdsController@embeddedAd']);

Route::post('save-ad-as-favorite', ['as' => 'save_ad_as_favorite', 'uses'=>'UserController@saveAdAsFavorite']);
Route::post('report-post', ['as' => 'report_ads_pos', 'uses'=>'AdsController@reportAds']);
Route::post('reply-by-email', ['as' => 'reply_by_email_post', 'uses'=>'UserController@replyByEmailPost']);

// Password reset routes...
Route::post('send-password-reset-link', ['as' => 'send_reset_link', 'uses'=>'Auth\PasswordController@postEmail']);
//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
//Route::post('password/reset', ['as'=>'password_reset_post', 'uses'=>'Auth\PasswordController@postReset']);

Route::post('get-sub-category-by-category', ['as'=>'get_sub_category_by_category', 'uses' => 'AdsController@getSubCategoryByCategory']);
Route::post('get-brand-by-category', ['as'=>'get_brand_by_category', 'uses' => 'AdsController@getBrandByCategory']);
Route::post('get-category-info', ['as'=>'get_category_info', 'uses' => 'AdsController@getParentCategoryInfo']);
Route::post('get-state-by-country', ['as'=>'get_state_by_country', 'uses' => 'AdsController@getStateByCountry']);
Route::post('get-city-by-state', ['as'=>'get_city_by_state', 'uses' => 'AdsController@getCityByState']);
Route::post('switch/product-view', ['as'=>'switch_grid_list_view', 'uses' => 'AdsController@switchGridListView']);



Route::group(['prefix'=>'login'], function(){
    //Native login route
    Route::get('/', ['as' => 'login', 'uses'=>'UserController@login']);
    Route::post('/', ['uses'=>'UserController@loginPost']);

    //Social login route

    Route::get('facebook', ['as' => 'facebook_redirect', 'uses'=>'SocialLogin@redirectFacebook']);
    Route::get('facebook-callback', ['as' => 'facebook_callback', 'uses'=>'SocialLogin@callbackFacebook']);

    Route::get('google', ['as' => 'google_redirect', 'uses'=>'SocialLogin@redirectGoogle']);
    Route::get('google-callback', ['as' => 'google_callback', 'uses'=>'SocialLogin@callbackGoogle']);

});

Route::resource('user', 'UserController');

//Dashboard Route
Route::group(['prefix'=>'dashboard', 'middleware' => 'dashboard'], function(){
    Route::get('/', ['as'=>'dashboard', 'uses' => 'DashboardController@dashboard']);

    Route::group(['middleware'=>'only_admin_access'], function(){
        Route::group(['prefix'=>'settings'], function(){
            Route::get('theme-settings', ['as'=>'theme_settings', 'uses' => 'SettingsController@ThemeSettings']);
            Route::get('modern-theme-settings', ['as'=>'modern_theme_settings', 'uses' => 'SettingsController@modernThemeSettings']);
            Route::get('social-url-settings', ['as'=>'social_url_settings', 'uses' => 'SettingsController@SocialUrlSettings']);
            Route::get('general', ['as'=>'general_settings', 'uses' => 'SettingsController@GeneralSettings']);
            Route::get('payments', ['as'=>'payment_settings', 'uses' => 'SettingsController@PaymentSettings']);
            Route::get('ad', ['as'=>'ad_settings', 'uses' => 'SettingsController@AdSettings']);
            Route::get('languages', ['as'=>'language_settings', 'uses' => 'LanguageController@index']);
            Route::post('languages', ['uses' => 'LanguageController@store']);
            Route::post('languages-delete', ['as'=>'delete_language', 'uses' => 'LanguageController@destroy']);

            Route::get('storage', ['as'=>'file_storage_settings', 'uses' => 'SettingsController@StorageSettings']);
            Route::get('social', ['as'=>'social_settings', 'uses' => 'SettingsController@SocialSettings']);
            Route::get('blog', ['as'=>'blog_settings', 'uses' => 'SettingsController@BlogSettings']);
            Route::get('other', ['as'=>'other_settings', 'uses' => 'SettingsController@OtherSettings']);
            Route::post('other', ['as'=>'other_settings', 'uses' => 'SettingsController@OtherSettingsPost']);

            //Save settings / options
            Route::post('save-settings', ['as'=>'save_settings', 'uses' => 'SettingsController@update']);
            Route::get('monetization', ['as'=>'monetization', 'uses' => 'SettingsController@monetization']);
        });

        Route::group(['prefix'=>'location'], function(){
            Route::get('country', ['as'=>'country_list', 'uses' => 'LocationController@countries']);
            Route::get('states', ['as'=>'state_list', 'uses' => 'LocationController@stateList']);
             Route::get('fetch_user', ['as'=>'fetch_user', 'uses' => 'DashboardController@fetch_user']);
             
               Route::get('fetch_bizz', ['as'=>'fetch_bizz', 'uses' => 'DashboardController@fetch_bizz']);
               
               
               Route::post('set_expiry', ['as'=>'set_expiry', 'uses' => 'DashboardController@set_expiry']);
                Route::get('assign_aduser', ['as'=>'assign_aduser', 'uses' => 'DashboardController@assign_aduser']);
                 Route::post('assign_bizz', ['as'=>'assign_bizz', 'uses' => 'DashboardController@assign_bizz']);
               
             Route::post('save_code', [ 'as'=>'save_code','uses' => 'DashboardController@saveCode']);
              Route::get('code_utilize', [ 'as'=>'code_utilize','uses' => 'DashboardController@code_utilize']);
               Route::get('code_report', [ 'as'=>'code_report','uses' => 'DashboardController@code_report']);
               Route::get('save_download_data', [ 'as'=>'save_download_data','uses' => 'DashboardController@save_download_data']);
               Route::post('display_pdf', [ 'as'=>'display_pdf','uses' => 'DashboardController@display_pdf']);
               
                Route::post('display_code', [ 'as'=>'display_code','uses' => 'DashboardController@display_code']);
               
                Route::get('display_code', [ 'as'=>'display_code','uses' => 'DashboardController@display_code']);
             Route::get('premium_status', ['as'=>'premium_status', 'uses' => 'DashboardController@premiumStatus']);
              Route::post('savepremiumStatus', [ 'as'=>'savepremiumStatus','uses' => 'DashboardController@savepremiumStatus']);
              
                Route::get('add_logo', ['as'=>'add_logo', 'uses' => 'PostController@addLogo']);
                
               Route::post('post_logo', ['as'=>'post_logo', 'uses' => 'PostController@saveLogo']);
             
            Route::post('states', [ 'uses' => 'LocationController@saveState']);
            Route::get('states/{id}/edit', ['as'=>'edit_state', 'uses' => 'LocationController@stateEdit']);
            Route::post('states/{id}/edit', ['uses' => 'LocationController@stateEditPost']);
            Route::post('states/delete', ['as'=>'delete_state', 'uses' => 'LocationController@stateDestroy']);
            Route::get('cities', ['as'=>'city_list', 'uses' => 'LocationController@cityList']);
            Route::post('cities', ['uses' => 'LocationController@saveCity']);

            Route::get('cities/{id}/edit', ['as'=>'edit_city', 'uses' => 'LocationController@cityEdit']);
            Route::post('cities/{id}/edit', ['uses' => 'LocationController@cityEditPost']);
            Route::post('city/delete', ['as'=>'delete_city', 'uses' => 'LocationController@cityDestroy']);
        });

        Route::group(['prefix'=>'categories'], function(){
            Route::get('/', ['as'=>'parent_categories', 'uses' => 'CategoriesController@index']);
            Route::post('/', ['uses' => 'CategoriesController@store']);

            Route::get('edit/{id}', ['as'=>'edit_categories', 'uses' => 'CategoriesController@edit']);
            Route::post('edit/{id}', ['uses' => 'CategoriesController@update']);

            Route::post('delete-categories', ['as'=>'delete_categories', 'uses' => 'CategoriesController@destroy']);
        });

        Route::group(['prefix'=>'distances'], function(){
            Route::get('/', ['as'=>'admin_brands', 'uses' => 'BrandsController@index']);
            Route::post('/', ['uses' => 'BrandsController@store']);
            Route::get('edit/{id}', ['as'=>'edit_brands', 'uses' => 'BrandsController@edit']);
            Route::post('edit/{id}', ['uses' => 'BrandsController@update']);
            Route::post('delete-distances', ['as'=>'delete_brands', 'uses' => 'BrandsController@destroy']);
        });

        Route::group(['prefix'=>'posts'], function(){
            Route::get('/', ['as'=>'posts', 'uses' => 'PostController@posts']);
            Route::get('create', ['as'=>'create_new_post', 'uses' => 'PostController@createPost']);
            Route::post('create', ['uses' => 'PostController@storePost']);
            Route::post('delete', ['as'=>'delete_post','uses' => 'PostController@destroyPost']);
            Route::get('edit/{slug}', ['as'=>'edit_post', 'uses' => 'PostController@editPost']);
            Route::post('edit/{slug}', ['uses' => 'PostController@updatePost']);
        });
        
      /*  Route::group(['prefix'=>'classifieds'], function(){
            //Route::get('/', ['as'=>'posts', 'uses' => 'PostController@posts']);
            Route::get('createclassifieds', ['as'=>'createclassifieds', 'uses'=>'AdsController@createclassifieds']);
            Route::post('createclassifieds', ['as' => 'createclassifieds', 'uses'=>'AdsController@classifiedsStore']);
            // Route::post('delete', ['as'=>'delete_post','uses' => 'PostController@destroyPost']);
            Route::get('edit/{id}', ['as'=>'editclassifieds', 'uses' => 'PostController@editclassifieds']);
            Route::post('edit/{id}', ['uses' => 'PostController@updatePost']);
            

// Route::get('edit/{id}', ['as'=>'edit_ad1', 'uses' => 'AdsController@edit']);
// Route::post('edit/{id}', ['uses' => 'AdsController@update']);

// editclassifieds

        });  */
        
         Route::group(['prefix'=>'whitepaper'], function(){
            Route::get('/', ['as'=>'whitepaper', 'uses' => 'PostController@whitepaper']);
            Route::get('create', ['as'=>'whitepaper_create', 'uses' => 'PostController@createWhitepaper']);
            Route::post('create', ['uses' => 'PostController@storeWhitepaper']);
            // Route::post('delete', ['as'=>'delete_post','uses' => 'PostController@destroyPost']);
            // Route::get('edit/{slug}', ['as'=>'edit_post', 'uses' => 'PostController@editPost']);
            // Route::post('edit/{slug}', ['uses' => 'PostController@updatePost']);
        });

        Route::group(['prefix'=>'pages'], function(){
            Route::get('/', ['as'=>'pages', 'uses' => 'PostController@index']);
            Route::get('create', ['as'=>'create_new_page', 'uses' => 'PostController@create']);
            Route::post('create', ['uses' => 'PostController@store']);
            Route::post('delete', ['as'=>'delete_page','uses' => 'PostController@destroy']);

            Route::get('edit/{slug}', ['as'=>'edit_page', 'uses' => 'PostController@edit']);
            Route::post('edit/{slug}', ['uses' => 'PostController@updatePage']);
        });

        Route::group(['prefix'=>'slider'], function(){
            Route::get('/', ['as'=>'slider', 'uses' => 'SliderController@index']);
            Route::get('create', ['as'=>'create_slider', 'uses' => 'SliderController@create']);
            Route::post('create', ['uses' => 'SliderController@store']);
            Route::post('crop', ['as'=>'create_crop', 'uses' => 'SliderController@postCrop']);
            Route::post('delete', ['as'=>'delete_slider', 'uses' => 'SliderController@destroy']);
            Route::post('update-caption', ['as'=>'update_slider_caption', 'uses' => 'SliderController@update']);
        
              Route::post('update-url', ['as'=>'update_slider_url', 'uses' => 'SliderController@update_url']);
              
            
              
              Route::get('editslider/{id}', ['as'=>'editslider', 'uses' => 'AdsController@editslider']);
                 Route::post('/editslider/{id}', [ 'uses' => 'AdsController@updateslider']);

        });

        Route::get('approved', ['as'=>'approved_ads', 'uses' => 'AdsController@index']);
        Route::get('pending', ['as'=>'admin_pending_ads', 'uses' => 'AdsController@adminPendingAds']);
        Route::get('blocked', ['as'=>'admin_blocked_ads', 'uses' => 'AdsController@adminBlockedAds']);
        Route::get('user_blocked_ads', ['as'=>'user_blocked_ads', 'uses' => 'AdsController@user_blocked_ads']);
         Route::get('user_approvedads', ['as'=>'user_approvedads', 'uses' => 'AdsController@user_approvedads']);
        
        Route::post('status-change', ['as'=>'ads_status_change', 'uses' => 'AdsController@adStatusChange']);
        
         Route::post('pending-comment', ['as'=>'pending-comment', 'uses' => 'AdsController@pendingComment']);

        Route::get('ad-reports', ['as'=>'ad_reports', 'uses' => 'AdsController@reports']);
        Route::get('users', ['as'=>'users', 'uses' => 'UserController@index']);
        Route::get('users-info/{id}', ['as'=>'user_info', 'uses' => 'UserController@userInfo']);
        Route::post('change-user-status', ['as'=>'change_user_status', 'uses' => 'UserController@changeStatus']);
        Route::post('change-user-feature', ['as'=>'change_user_feature', 'uses' => 'UserController@changeFeature']);
        Route::post('delete-reports', ['as'=>'delete_report', 'uses' => 'AdsController@deleteReports']);

        Route::get('contact-messages', ['as'=>'contact_messages', 'uses' => 'HomeController@contactMessages']);
        
        Route::get('contact-messages', ['as'=>'contact_messages', 'uses' => 'HomeController@contactMessages']);
//super admin
          Route::get('create', ['as'=>'add_superadministrator', 'uses' => 'UserController@addSuperAdministrator']);
          Route::post('create', ['uses' => 'UserController@storeSuperadministrator']);
        Route::group(['prefix'=>'administrators'], function(){
            Route::get('/', ['as'=>'administrators', 'uses' => 'UserController@administrators']);
            Route::get('create', ['as'=>'add_administrator', 'uses' => 'UserController@addAdministrator']);
            Route::post('create', ['uses' => 'UserController@storeAdministrator']);

            Route::post('block-unblock', ['as'=>'administratorBlockUnblock','uses' => 'UserController@administratorBlockUnblock']);

        });


    });

    //All user can access this route
    Route::get('payments', ['as'=>'payments', 'uses' => 'PaymentController@index']);
    Route::get('payments-info/{trand_id}', ['as'=>'payment_info', 'uses' => 'PaymentController@paymentInfo']);
    //End all users access


    Route::group(['prefix'=>'u'], function(){
        Route::group(['prefix'=>'posts'], function(){
            Route::get('/', ['as'=>'my_ads', 'uses' => 'AdsController@myAds']);
            Route::get('create', ['as'=>'create_ad', 'uses' => 'AdsController@create']);
            Route::post('create', ['uses' => 'AdsController@store']);

 	    Route::get('createproad', ['as'=>'create_proad', 'uses' => 'AdsController@createproad']);
	    Route::post('createproad', ['as' => 'createproad', 'uses'=>'AdsController@profilestoring']);


            Route::post('delete', ['as'=>'delete_ads', 'uses' => 'AdsController@destroy']);
            Route::get('edit/{id}', ['as'=>'edit_ad1', 'uses' => 'AdsController@edit']);
            Route::post('edit/{id}', ['uses' => 'AdsController@update']);
            Route::get('my-lists', ['as'=>'my_ads', 'uses' => 'AdsController@myAds']);
            Route::get('favorite-lists', ['as'=>'favorite_ads', 'uses' => 'AdsController@favoriteAds']);
            //Upload ads image
            Route::post('upload-a-image', ['as'=>'upload_ads_image', 'uses' => 'AdsController@uploadAdsImage']);
            Route::post('upload-post-image', ['as'=>'upload_post_image', 'uses' => 'PostController@uploadPostImage']);
            
            Route::post('upload_whitepaper_image', ['as'=>'upload_whitepaper_image', 'uses' => 'PostController@uploadWhitepaperImage']);
            
            Route::post('upload-page-image', ['as'=>'upload_page_image', 'uses' => 'PostController@uploadPageImage']);
            //Delete media
            Route::post('delete-media', ['as'=>'delete_media', 'uses' => 'AdsController@deleteMedia']);
            Route::post('feature-media-creating', ['as'=>'feature_media_creating_ads', 'uses' => 'AdsController@featureMediaCreatingAds']);
            Route::get('append-media-image', ['as'=>'append_media_image', 'uses' => 'AdsController@appendMediaImage']);
            Route::get('append-post-media-image', ['as'=>'append_post_media_image', 'uses' => 'PostController@appendPostMediaImage']);
           
             Route::get('append-whitepaper-media-image', ['as'=>'append_whitepaper_media_image', 'uses' => 'PostController@appendWhitepaperMediaImage']);

           
            Route::get('append-page-media-image', ['as'=>'append_page_media_image', 'uses' => 'PostController@appendPageMediaImage']);

            Route::get('pending-lists', ['as'=>'pending_ads', 'uses' => 'AdsController@pendingAds']);
            Route::get('archive-lists', ['as'=>'favourite_ad', 'uses' => 'AdsController@create']);
            
            //bizz payment
            
            Route::get('bizz_payment', ['as'=>'bizz_payment', 'uses' => 'PaymentController@bizz_payment']);
              Route::get('initiatebizzPayments', ['as'=>'initiatebizzPayments', 'uses' => 'PaymentController@initiatebizzPayments']);
                 Route::get('bizz_payments/{transaction_id}', ['as'=>'bizz_payments', 'uses' => 'PaymentController@bizzcheckout']);
             Route::get('checkout/{transaction_id}', ['as'=>'checkout', 'uses' => 'PaymentController@checkout']);
            
            Route::post('ccavRequestHandler', ['as'=>'ccavRequestHandler','uses'=>'PaymentController@ccavRequestHandler']);
            
            Route::get('my-store', ['as'=>'my-store', 'uses' => 'PaymentController@show_products']);
            //   Route::post('pay-success/{product_id}', ['as'=>'pay-success', 'uses' => 'PaymentController@pay_success']);
             Route::get('pay-success', ['as'=>'pay-success', 'uses' => 'PaymentController@pay_success']);
            //  Route::post('pay-success', ['uses' => 'PaymentController@pay_success']);
             Route::get('thank-you', ['as'=>'thank-you', 'uses' => 'PaymentController@thank_you']);
             
             
             
              Route::get('bizz-payment', ['as'=>'bizz-payment', 'uses' => 'PaymentController@bizz_payment']);
           
             Route::get('bizz-success', ['as'=>'bizz-success', 'uses' => 'PaymentController@bizz_success']);
             
             //package payment
              Route::get('startup', ['as'=>'startup', 'uses' => 'PaymentController@startup']);
              Route::get('startup-payment', ['as'=>'startup-payment', 'uses' => 'PaymentController@startup_payment']);
           
             Route::get('startup-success', ['as'=>'startup-success', 'uses' => 'PaymentController@startup_success']);
             
             
             
              Route::get('growth', ['as'=>'growth', 'uses' => 'PaymentController@growth']);
              Route::get('growth-payment', ['as'=>'growth-payment', 'uses' => 'PaymentController@growth_payment']);
           
              Route::get('growth-success', ['as'=>'growth-success', 'uses' => 'PaymentController@growth_success']);
              
              
              
              Route::get('sail', ['as'=>'sail', 'uses' => 'PaymentController@sail']);
              Route::get('sail-payment', ['as'=>'sail-payment', 'uses' => 'PaymentController@sail_payment']);
           
              Route::get('sail-success', ['as'=>'sail-success', 'uses' => 'PaymentController@sail_success']);
            
            //Checkout payment
           // Route::get('checkout/{transaction_id}', ['as'=>'payment_checkout', 'uses' => 'PaymentController@checkout']);
           // Route::post('checkout/{transaction_id}', ['uses' => 'PaymentController@chargePayment']);
            //Payment success url
           // Route::get('checkout/{transaction_id}/payment-success', ['as'=>'payment_success_url','uses' => 'PaymentController@paymentSuccess']);
           // Route::post('checkout/{transaction_id}/paypal-notify', ['as'=>'paypal_notify_url','uses' => 'PaymentController@paypalNotify']);
            Route::get('reports-by/{slug}', ['as'=>'reports_by_ads', 'uses' => 'AdsController@reportsByAds']);
             Route::get('profile1', ['as'=>'profile1', 'uses' => 'UserController@profile1']);
            Route::get('profile', ['as'=>'profile', 'uses' => 'UserController@profile']);
            Route::get('profile/edit', ['as'=>'profile_edit', 'uses' => 'UserController@profileEdit']);
            Route::post('profile/edit', ['uses' => 'UserController@profileEditPost']);
            
              Route::get('premium/update', ['as'=>'premium_update', 'uses' => 'UserController@premiumUpdate']);
                Route::post('premium/update', ['as'=>'premium_save', 'uses' => 'UserController@premiumUpdatePost']);
            
            Route::get('profile/change-avatar', ['as'=>'change_avatar', 'uses' => 'UserController@changeAvatar']);
            Route::post('upload-avatar', ['as'=>'upload_avatar',  'uses' => 'UserController@uploadAvatar']);
            
            Route::get('inmailSearch', ['as'=>'inmailSearch',  'uses' => 'UserController@inmailSearch']);
            

            /**
             * Change Password route
             */
            Route::group(['prefix' => 'account'], function() {
                Route::get('change-password', ['as' => 'change_password', 'uses' => 'UserController@changePassword']);
                Route::post('change-password', 'UserController@changePasswordPost');
            });

        });
    });

    Route::get('logout', ['as'=>'logout', 'uses' => 'DashboardController@logout']);
});

//Route::get('/home', 'HomeController@index');