<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
      {
        
      return view('pages.main');
      }
      public function vakanci()
      {
        
      return view('pages.vakanci');
      }
      
      public function form(Request $request)
      {
         $data= array(
      'name' => request('name'),
      'phone' => request('phone'),
      'email' => request('email'),
      'field' => request('field')
      );

       \Mail::send('email.mail', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'],$data['name'],$data['phone'],$data['field']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     return redirect('/#section-form')->with('message', 'Спасибо за обращение! Ваше сообщение успешно отправлено администратору сайта!');
      }
      public function office()
      {
      
      return view('pages.office');
      }
}