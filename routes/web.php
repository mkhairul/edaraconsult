<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Mail\ContactUs;
use App\Mail\Question;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
  $page_title = 'home';
  $content = view('mainpage');
  return view('template', ['content' => $content, 'page_title' => $page_title]);
});

Route::get('/home', function () {
  $page_title = 'home';
  $content = view('mainpage');
  return view('template', ['content' => $content]);
});

Route::post('/contact', function(Request $request){
  Mail::to('info@edaraconsult.com')->send(new ContactUs);
  $page_title = 'contact-us';
  return response()->json([
      'alert' => 'success',
      'message' => 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.'
    ]);
});

Route::post('/question', function(Request $request){
  Mail::to('info@edaraconsult.com')->send(new Question);
  $page_title = 'question';
  return response()->json([
      'alert' => 'success',
      'message' => 'We have <strong>successfully</strong> received your Question and will get Back to you as soon as possible.'
    ]);
});

Route::get('/{content}', function($content){
  if (!View::exists($content)) {
    return redirect('/');
  }else{
    $page_title = $content;
    $content = view($content);
    switch($page_title){
      case 'contact-us':
        return view('contact-us', ['page_title' => $page_title]);
        break;
      case 'question':
        return view('question', ['page_title' => $page_title]);
        break;
      default:
        return view('template', ['content' => $content, 'page_title' => $page_title]);
        break;
    }
  }
});