<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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





Auth::routes();

Route::group(['prefix' => 'dashboad', 'namespace'=>'admin', 'middleware'=>'auth'], function () {
  // dashboard start
  Route::get('/', 'DashController@index')->name('adminhome');
  Route::get('/home', 'DashController@index')->name('adminhome');
  // dashboard start

  //******************************************************************

  // get all slider 
  Route::get('/seo', 'SeoController@index')->name('addseo');
  
  // add new slider and show seo form 
  Route::get('/seo/add', 'SeoController@create')->name('seo');

  // show form to edit slider
  Route::get('/seo/edit/{id}','SeoController@edit')->name('editSlider');

  // Ajax routes========================================

  //save (title - description - photo) in slider 
  Route::post('/saveHomepage', 'SeoController@storeSlider');

  // update seo tages only
  Route::post('/seoUpdate', 'SeoController@updateSeo');
  
  //edit slider (title - description - photo) in slider
  Route::post('/sliderEdit', 'SeoController@sliderEdit');

  //delete slider
  Route::post('/slider/delete', 'SeoController@deleteSeo' );


  //******************************************************************

  // start about us routes
  Route::get('/about-us','aboutController@index')->name('about');
  
  // edit about us section (With ajax)
  Route::post('/aboutUs/edit','aboutController@editAbout');
  
  //***************************************************************** */

  //start programs routes
  // show all programs
  Route::get('/programs',"ProgramController@index")->name("programs");
  
  //add new program
  Route::get('/programs/add',"ProgramController@add")->name("programs.add");

  //Edit item of program
  Route::get('/programs/edit/{id}',"ProgramController@edit")->name("programs.edit");
      
  
  // ajax route of program
  // add
  Route::post('/programs/storedata',"ProgramController@store");
  //edit
  Route::post('/programs/programEdit',"ProgramController@programUpdata");
  //delete
  Route::post('/programs/programDelete',"ProgramController@deleteprogram");
  // ajax route of program
  //************************************************************************************************ */

  // start teachers route
  //show all teachers
  Route::get('/teachers', 'teacherController@index')->name('teachers');
  
  // add new teachers
  Route::get('/teachers/add', 'teacherController@add')->name('teachers.add');

  // add new teachers
  Route::get('/teachers/edit/{id}', 'teacherController@edit')->name('teachers.edit');
  
  
  // ajax
  // add new teacher
  Route::post('/teachers/addNewJx', 'teacherController@store');

  // Edit teacher
  Route::post('/teachers/editJx', 'teacherController@teacherUpdata');

  // delete teacher
  Route::post('/teachers/deleteJx', 'teacherController@teacherDelete');
  //************************************************************************************************ */

  // start clients route
  //show all clients
  Route::get('/clients', 'clientController@index')->name('clients');
  
  // add new clients
  Route::get('/clients/add', 'clientController@add')->name('clients.add');

  // add new clients
  Route::get('/clients/edit/{id}', 'clientController@edit')->name('clients.edit');
  
  
  // ajax
  // add new client
  Route::post('/clients/addNewJx', 'clientController@store');

  // Edit client
  Route::post('/clients/editJx', 'clientController@clientUpdata');

  // Edit bg section client
  Route::post('/clients/editBgJx', 'clientController@clientUpdatabg');

  // delete client
  Route::post('/clients/deleteJx', 'clientController@clientDelete');
  //************************************************************************************************ */

  // start choose us route
  //show all choose us
  Route::get('/choose-us', 'chooseusController@index')->name('chooseus');
  
  // add new choose us
  Route::get('/choose-us/add', 'chooseusController@add')->name('chooseus.add');

  // add new choose us
  Route::get('/choose-us/edit/{id}', 'chooseusController@edit')->name('chooseus.edit');
  
  
  // ajax
  // add new choose us
  Route::post('/chooseus/addNewJx', 'chooseusController@store');

  // Edit choose us
  Route::post('/chooseus/editJx', 'chooseusController@chooseusUpdata');

  // Edit bg section choose us
  Route::post('/chooseus/editBgJx', 'chooseusController@chooseusUpdatabg');

  // delete choose us
  Route::post('/chooseus/deleteJx', 'chooseusController@chooseusDelete');
  //************************************************************************************************ */

  // start inquers us route
  //show all inquers
  Route::get('/inquers', 'inquersController@index')->name('inquers');
    
  // add new choose us
  Route::get('/inquers/show/{id}', 'inquersController@show')->name('inquers.open');
  //************************************************************************************************ */

  //start plans routes
  // show all plans
  Route::get('/plans',"PlanController@index")->name("plans");
  
  //add new program
  Route::get('/plans/add',"PlanController@add")->name("plans.add");

  //Edit item of program
  Route::get('/plans/edit/{id}',"PlanController@edit")->name("plans.edit");
  

  // ajax route of program
  // add
  Route::post('/plans/storedata',"PlanController@store");
  //edit
  Route::post('/plans/planEdit',"PlanController@planUpdata");
  //delete
  Route::post('/plans/planDelete',"PlanController@deleteplan");
//****************************************************************************** */
  
  // start staff us route
  //show all staff
  Route::get('/staff', 'StaffController@index')->name('staff');
  Route::get('/staff/add', 'StaffController@add')->name('staff.add');
  Route::get('/staff/edit/{id}', 'StaffController@edit')->name('staff.edit');
    
  // add new choose us
  Route::post('/staff/addNew', 'StaffController@store');

  Route::post('/staff/editOne', 'StaffController@staffUpdata');
  //delete
  Route::post('/staff/staffDelete',"StaffController@deletestaff");
  //************************************************************************************************ */


  // Blogs
  Route::resource('/blogs', 'BlogController')->names([
      'index' => 'blogs',
      'create'=> 'blogs.add',
      'show'  => 'blogs.show',
      'edit'  => 'blogs.edit',
    ]);

  // blogs Ajax
  //edit blog
  Route::post('/blog/editAjax','BlogController@updateBlogs');
  // delete blog
  Route::post('/blog/deleteAjax','BlogController@deleteBlog');
  
  // delete comment
  Route::post('/comment/deleteAjax','BlogController@deleteComment');

  Route::post('/blogs/storeAjax','BlogController@store');

});