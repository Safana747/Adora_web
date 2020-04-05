<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WebController@index')->name('web_home');
Route::get('/company', 'WebController@company')->name('web_company');
Route::get('/contact', 'WebController@contact')->name('web_contact');
Route::get('/our_brands', 'WebController@our_brands')->name('web_our_brands');
//business
Route::get('/it_automation', 'WebController@it_automation')->name('web_it_automation');
Route::get('/consulting', 'WebController@consulting')->name('web_consulting');
Route::get('/contracting', 'WebController@contracting')->name('web_contracting');
Route::get('/trading', 'WebController@trading')->name('web_trading');
Route::get('/marketing_operations', 'WebController@marketing_operations')->name('web_marketing_operations');

//oppurtunities
Route::get('/become_partner', 'WebController@become_partner')->name('web_become_partner');
Route::get('/job_vacancies', 'WebController@job_vacancies')->name('web_job_vacancies');
Route::post('/job_vacancies', 'WebController@job_vacancies_submit')->name('web_job_vacancies_submit');
Route::post('/become_partner', 'WebController@become_partner_submit')->name('web_become_partner_submit');
//knowmore
Route::get('/home/{seo_url}', 'WebController@home_single')->name('web_single');
Route::get('/newthoughts/{seo_url}', 'WebController@newthought_single')->name('web_newthought_single');
Route::get('/ongoingprojects/{seo_url}', 'WebController@ongoingproject_single')->name('web_ongoingproject_single');
Route::get('/casestudies/{seo_url}', 'WebController@casestudy_single')->name('web_casestudy_single');
Route::get('/social_resposibilities/{seo_url}', 'WebController@social_responsibilities_single')->name('web_social_responsibilities_single');
Route::get('/awards/{seo_url}', 'WebController@awards_single')->name('web_awards_single');
Route::get('/it_automation/{seo_url}', 'WebController@it_single')->name('web_it_single');
Route::get('/consulting/{seo_url}', 'WebController@consulting_single')->name('web_consulting_single');
Route::get('/contracting/{seo_url}', 'WebController@contracting_single')->name('web_contracting_single');
Route::get('/trading/{seo_url}', 'WebController@trading_single')->name('web_trading_single');
Route::get('/operations/{seo_url}', 'WebController@operations_single')->name('web_operations_single');

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){


    //Dashbord
    Route::get('/', 'admin\DashboardController@index')->name('adminDashbord'); //Dashbord

    //landing
    Route::get('/home', 'admin\LandingController@index')->name('homeslider');
    Route::get('/home/create', 'admin\LandingController@add')->name('homeslider_add');
    Route::post('/home/create', 'admin\LandingController@save')->name('homeslider_save');
    Route::get('/home/edit/{id}', 'admin\LandingController@edit')->name('homeslider_edit');
    Route::post('/home/edit/{id}', 'admin\LandingController@update')->name('homeslider_update');
    Route::delete('/home/delete/{id}', 'admin\LandingController@delete')->name('homeslider_delete');
    //multiple image
    Route::post('/home/image_upload/{id}', 'admin\LandingController@uploadImg')->name('home_image_upload');
    Route::get('/home/image_delete/{id}', 'admin\LandingController@deleteImg')->name('home_image_delete');

    //newthoughts
    Route::get('/home/newthoughts', 'admin\NewThoughtsController@index')->name('newthoughts');
    Route::get('/home/newthoughts/create', 'admin\NewThoughtsController@add')->name('newthoughts_add');
    Route::post('/home/newthoughts/create', 'admin\NewThoughtsController@save')->name('newthoughts_save');
    Route::get('/home/newthoughts/edit/{id}', 'admin\NewThoughtsController@edit')->name('newthoughts_edit');
    Route::post('/home/newthoughts/edit/{id}', 'admin\NewThoughtsController@update')->name('newthoughts_update');
    Route::delete('/home/newthoughts/delete/{id}', 'admin\NewThoughtsController@delete')->name('newthoughts_delete');
    //multiple image
    Route::post('/home/newthoughts/image_upload/{id}', 'admin\NewThoughtsController@uploadImg')->name('newthoughts_image_upload');
    Route::get('/home/newthoughts/image_delete/{id}', 'admin\NewThoughtsController@deleteImg')->name('newthoughts_image_delete');

    //ongoingprojects
    Route::get('/home/ongoingprojects', 'admin\OngoingProjectsController@index')->name('ongoingprojects');
    Route::get('/home/ongoingprojects/create', 'admin\OngoingProjectsController@add')->name('ongoingprojects_add');
    Route::post('/home/ongoingprojects/create', 'admin\OngoingProjectsController@save')->name('ongoingprojects_save');
    Route::get('/home/ongoingprojects/edit/{id}', 'admin\OngoingProjectsController@edit')->name('ongoingprojects_edit');
    Route::post('/home/ongoingprojects/edit/{id}', 'admin\OngoingProjectsController@update')->name('ongoingprojects_update');
    Route::delete('/home/ongoingprojects/delete/{id}', 'admin\OngoingProjectsController@delete')->name('ongoingprojects_delete');
    //multiple image
    Route::post('/home/ongoingprojects/image_upload/{id}', 'admin\OngoingProjectsController@uploadImg')->name('ongoingprojects_image_upload');
    Route::get('/home/ongoingprojects/image_delete/{id}', 'admin\OngoingProjectsController@deleteImg')->name('ongoingprojects_image_delete');

    //casestudies
    Route::get('/home/casestudies', 'admin\CaseStudiesController@index')->name('casestudies');
    Route::get('/home/casestudies/create', 'admin\CaseStudiesController@add')->name('casestudies_add');
    Route::post('/home/casestudies/create', 'admin\CaseStudiesController@save')->name('casestudies_save');
    Route::get('/home/casestudies/edit/{id}', 'admin\CaseStudiesController@edit')->name('casestudies_edit');
    Route::post('/home/casestudies/edit/{id}', 'admin\CaseStudiesController@update')->name('casestudies_update');
    Route::delete('/home/casestudies/delete/{id}', 'admin\CaseStudiesController@delete')->name('casestudies_delete');
    //multiple image
    Route::post('/home/casestudies/image_upload/{id}', 'admin\CaseStudiesController@uploadImg')->name('casestudies_image_upload');
    Route::get('/home/casestudies/image_delete/{id}', 'admin\CaseStudiesController@deleteImg')->name('casestudies_image_delete');

    //clients
    Route::get('/home/clients', 'admin\ClientsController@index')->name('clients');
    Route::get('/home/clients/create', 'admin\ClientsController@add')->name('clients_add');
    Route::post('/home/clients/create', 'admin\ClientsController@save')->name('clients_save');
    Route::get('/home/clients/edit/{id}', 'admin\ClientsController@edit')->name('clients_edit');
    Route::post('/home/clients/edit/{id}', 'admin\ClientsController@update')->name('clients_update');
    Route::delete('/home/clients/delete/{id}', 'admin\ClientsController@delete')->name('clients_delete');

    //teams
    Route::get('/company/teams', 'admin\TeamsController@index')->name('teams');
    Route::get('/company/teams/create', 'admin\TeamsController@add')->name('teams_add');
    Route::post('/company/teams/create', 'admin\TeamsController@save')->name('teams_save');
    Route::get('/company/teams/edit/{id}', 'admin\TeamsController@edit')->name('teams_edit');
    Route::post('/company/teams/edit/{id}', 'admin\TeamsController@update')->name('teams_update');
    Route::delete('/company/teams/delete/{id}', 'admin\TeamsController@delete')->name('teams_delete');

    //group of companies
    Route::get('/company/group_of_companies', 'admin\GroupOfCompanies@index')->name('group_of_companies');
    Route::get('/company/group_of_companies/create', 'admin\GroupOfCompanies@add')->name('group_of_companies_add');
    Route::post('/company/group_of_companies/create', 'admin\GroupOfCompanies@save')->name('group_of_companies_save');
    Route::get('/company/group_of_companies/edit/{id}', 'admin\GroupOfCompanies@edit')->name('group_of_companies_edit');
    Route::post('/company/group_of_companies/edit/{id}', 'admin\GroupOfCompanies@update')->name('group_of_companies_update');
    Route::delete('/company/group_of_companies/delete/{id}', 'admin\GroupOfCompanies@delete')->name('group_of_companies_delete');

    //social_responsibilities
    Route::get('/company/social_responsibilities', 'admin\SocialResponsobilities@index')->name('social_responsibilities');
    Route::get('/company/social_responsibilities/create', 'admin\SocialResponsobilities@add')->name('social_responsibilities_add');
    Route::post('/company/social_responsibilities/create', 'admin\SocialResponsobilities@save')->name('social_responsibilities_save');
    Route::get('/company/social_responsibilities/edit/{id}', 'admin\SocialResponsobilities@edit')->name('social_responsibilities_edit');
    Route::post('/company/social_responsibilities/edit/{id}', 'admin\SocialResponsobilities@update')->name('social_responsibilities_update');
    Route::delete('/company/social_responsibilities/delete/{id}', 'admin\SocialResponsobilities@delete')->name('social_responsibilities_delete');
    //multiple image
    Route::post('/company/social_responsibilities/image_upload/{id}', 'admin\SocialResponsobilities@uploadImg')->name('social_responsibilities_image_upload');
    Route::get('/company/social_responsibilities/image_delete/{id}', 'admin\SocialResponsobilities@deleteImg')->name('social_responsibilities_image_delete');

    //awards&achievements
    Route::get('/company/awards_achievements', 'admin\AwardsController@index')->name('awards_achievements');
    Route::get('/company/awards_achievements/create', 'admin\AwardsController@add')->name('awards_achievements_add');
    Route::post('/company/awards_achievements/create', 'admin\AwardsController@save')->name('awards_achievements_save');
    Route::get('/company/awards_achievements/edit/{id}', 'admin\AwardsController@edit')->name('awards_achievements_edit');
    Route::post('/company/awards_achievements/edit/{id}', 'admin\AwardsController@update')->name('awards_achievements_update');
    Route::delete('/company/awards_achievements/delete/{id}', 'admin\AwardsController@delete')->name('awards_achievements_delete');
    //multiple image
    Route::post('/company/awards_achievements/image_upload/{id}', 'admin\AwardsController@uploadImg')->name('awards_achievements_image_upload');
    Route::get('/company/awards_achievements/image_delete/{id}', 'admin\AwardsController@deleteImg')->name('awards_achievements_image_delete');

    //Brands
    Route::get('/brands', 'admin\BrandsController@index')->name('brands');
    Route::get('/brands/create', 'admin\BrandsController@add')->name('brands_add');
    Route::post('/brands/create', 'admin\BrandsController@save')->name('brands_save');
    Route::get('/brands/edit/{id}', 'admin\BrandsController@edit')->name('brands_edit');
    Route::post('/brands/edit/{id}', 'admin\BrandsController@update')->name('brands_update');
    Route::delete('/brands/delete/{id}', 'admin\BrandsController@delete')->name('brands_delete');

    //it&automation
    Route::get('/business/it_automation', 'admin\ItAutomationController@index')->name('it_automation');
    Route::get('/business/it_automation/create', 'admin\ItAutomationController@add')->name('it_automation_add');
    Route::post('/business/it_automation/create', 'admin\ItAutomationController@save')->name('it_automation_save');
    Route::get('/business/it_automation/edit/{id}', 'admin\ItAutomationController@edit')->name('it_automation_edit');
    Route::post('/business/it_automation/edit/{id}', 'admin\ItAutomationController@update')->name('it_automation_update');
    Route::delete('/business/it_automation/delete/{id}', 'admin\ItAutomationController@delete')->name('it_automation_delete');
    //multiple image
    Route::post('/business/it_automation/image_upload/{id}', 'admin\ItAutomationController@uploadImg')->name('it_automation_image_upload');
    Route::get('/business/it_automation/image_delete/{id}', 'admin\ItAutomationController@deleteImg')->name('it_automation_image_delete');

    //consulting
    Route::get('/business/consulting', 'admin\ConsultingController@index')->name('consulting');
    Route::get('/business/consulting/create', 'admin\ConsultingController@add')->name('consulting_add');
    Route::post('/business/consulting/create', 'admin\ConsultingController@save')->name('consulting_save');
    Route::get('/business/consulting/edit/{id}', 'admin\ConsultingController@edit')->name('consulting_edit');
    Route::post('/business/consulting/edit/{id}', 'admin\ConsultingController@update')->name('consulting_update');
    Route::delete('/business/consulting/delete/{id}', 'admin\ConsultingController@delete')->name('consulting_delete');
    //multiple image
    Route::post('/business/consulting/image_upload/{id}', 'admin\ConsultingController@uploadImg')->name('consulting_image_upload');
    Route::get('/business/consulting/image_delete/{id}', 'admin\ConsultingController@deleteImg')->name('consulting_image_delete');


    //contracting
    Route::get('/business/contracting', 'admin\ContractingController@index')->name('contracting');
    Route::get('/business/contracting/create', 'admin\ContractingController@add')->name('contracting_add');
    Route::post('/business/contracting/create', 'admin\ContractingController@save')->name('contracting_save');
    Route::get('/business/contracting/edit/{id}', 'admin\ContractingController@edit')->name('contracting_edit');
    Route::post('/business/contracting/edit/{id}', 'admin\ContractingController@update')->name('contracting_update');
    Route::delete('/business/contracting/delete/{id}', 'admin\ContractingController@delete')->name('contracting_delete');
    //multiple image
    Route::post('/business/contracting/image_upload/{id}', 'admin\ContractingController@uploadImg')->name('contracting_image_upload');
    Route::get('/business/contracting/image_delete/{id}', 'admin\ContractingController@deleteImg')->name('contracting_image_delete');

    //trading
    Route::get('/business/trading', 'admin\TradingController@index')->name('trading');
    Route::get('/business/trading/create', 'admin\TradingController@add')->name('trading_add');
    Route::post('/business/trading/create', 'admin\TradingController@save')->name('trading_save');
    Route::get('/business/trading/edit/{id}', 'admin\TradingController@edit')->name('trading_edit');
    Route::post('/business/trading/edit/{id}', 'admin\TradingController@update')->name('trading_update');
    Route::delete('/business/trading/delete/{id}', 'admin\TradingController@delete')->name('trading_delete');
    //multiple image
    Route::post('/business/trading/image_upload/{id}', 'admin\TradingController@uploadImg')->name('trading_image_upload');
    Route::get('/business/trading/image_delete/{id}', 'admin\TradingController@deleteImg')->name('trading_image_delete');

    //operations
    Route::get('/business/operations', 'admin\OperationsController@index')->name('operations');
    Route::get('/business/operations/create', 'admin\OperationsController@add')->name('operations_add');
    Route::post('/business/operations/create', 'admin\OperationsController@save')->name('operations_save');
    Route::get('/business/operations/edit/{id}', 'admin\OperationsController@edit')->name('operations_edit');
    Route::post('/business/operations/edit/{id}', 'admin\OperationsController@update')->name('operations_update');
    Route::delete('/business/operations/delete/{id}', 'admin\OperationsController@delete')->name('operations_delete');
    //multiple image
    Route::post('/business/operations/image_upload/{id}', 'admin\OperationsController@uploadImg')->name('operations_image_upload');
    Route::get('/business/operations/image_delete/{id}', 'admin\OperationsController@deleteImg')->name('operations_image_delete');

    //Job Vacancies
    Route::get('/jobvacancies', 'admin\JobVacanciesController@index')->name('jobvacancies');
    Route::get('/jobvacancies/create', 'admin\JobVacanciesController@add')->name('jobvacancies_add');
    Route::post('/jobvacancies/create', 'admin\JobVacanciesController@save')->name('jobvacancies_save');
    Route::get('/jobvacancies/edit/{id}', 'admin\JobVacanciesController@edit')->name('jobvacancies_edit');
    Route::post('/jobvacancies/edit/{id}', 'admin\JobVacanciesController@update')->name('jobvacancies_update');
    Route::delete('/jobvacancies/delete/{id}', 'admin\JobVacanciesController@delete')->name('jobvacancies_delete');

    //Job Applications
    Route::get('/job_applications', 'admin\JobApplications@index')->name('job_applications');
    Route::delete('/job_applications/delete/{id}', 'admin\JobApplications@delete')->name('job_applications_delete');

    //Settings
    Route::get('/settings', 'admin\SettingsController@edit')->name('settings');
    Route::post('/settings', 'admin\SettingsController@update')->name('settings_update');

});
