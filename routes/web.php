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
use Illuminate\Http\Request;
use App\Feedback;

Auth::routes();
Route::get('test', function(){
	// factory(App\FeedbackComment::class, 2)->create();
});
Route::get('/email/confirmation/{token}', 
	'Auth\EmailConfirmationController@confirm')
		->name('email.confirmation');

Route::post('/feedback/addComment', "FeedbackCommentsController@add");
Route::post('/feedback/switch', "FeedbackController@toggleStatus");
Route::post('/feedback/delete', "FeedbackController@deleteFeedback");

Route::get('{user}/#comment{comment_id}', 'UsersController@show')->name('check.comment');

Route::get('/profile/{id}', "ProfileViewerController@profile");

//surveys
Route::get('/surveys', "SurveysController@index")->name('survey.index');
Route::get('/survey/create', "SurveysController@create")->name('survey.create') ;
Route::post('/survey/store', 'SurveysController@store')->name('survey.store');
Route::delete('/survey/delete/{survey}', 'SurveysController@destroy')->name('survey.delete');
Route::get('/surveys/{survey}','SurveysController@show')->name('survey.show');
Route::get('/surveys/questions/list', function(){
	$data = [
		['type'=>0,'title'=>trans('app.survey_default')],
		['type'=>1,'title'=>trans('app.survey_star_rating')],
		['type'=>2,'title'=>trans('app.survey_text_input')],
		['type'=>3,'title'=>trans('app.survey_textarea')],
	];

	return $data;
});
// Route::get('/reply/{survey}', 'ReplyController@create');
// Route::post('/reply/store', 'ReplyController@store')->name('reply.store');


Route::name('welcome')->get('/', function () {
	return view('landing');
});

// Route::middleware('auth')->group(function () {
// Logged-In and Dashboard
Route::get('/home', 'HomeController@index');
Route::get('/landing', function() {
	return view('landing');
});


// User Settings
Route::get('/settings' , 'SettingsController@settings')->name('user.setting');
Route::post('/settings/update' , 'SettingsController@update');

//User Profile
Route::get('/search/user', 'SearchController@search')->name('user.search');
Route::get('/{user}', 'UsersController@show')->name('user.show');

//Feedback addition
Route::get('/{user}/feedback/create', 'FeedbackController@create')->name('feedback.create');
Route::post('/{user}/feedback/leave', 'FeedbackController@leave');
Route::get('/feedback/success', 'FeedbackController@success');


Route::post('/settings/avatar', 'UsersController@update_avatar')->name('user.avatar');
Route::post('/update', 'UsersController@update')->name('user.update');

// Conversations and Messages
Route::get('/{user}/conversations', 'ConversationsController@index')->name('conversations');
Route::get('/conversation/{conversation}', 'ConversationsController@show')->name('conversation.show');
Route::post('/conversation', 'ConversationsController@store')->name('conversation.store');
Route::get('{user}/message', 'ConversationsController@create')->name('conversation.create');

// Reviews
Route::post('/feedback', 'ReviewsController@store');
// });



//Subscriber
Route::post('/subscribe', 'SubcribersController@store')->name('subscribe');

