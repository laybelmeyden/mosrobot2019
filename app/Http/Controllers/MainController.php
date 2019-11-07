<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('pages.main');
    }
    public function more(){

        return view('pages.more');
    }
    public function about(){

        return view('pages.about');
    }
    public function hackaton(){

        return view('pages.hackaton');
    }
    public function contact(Request $request)
      {
      $data= array(
        'phone' => request('phone'),
        'contact_email' => request('contact_email'),
        'text_contact' => request('text_contact'),
      );

       \Mail::send('email.mailcontact', $data, function($message_contact) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_CONTACT');
        $message_contact->from($data['contact_email'],$data['phone'], $data['text_contact']);
        $message_contact->to($mail_admin, 'For Admin')->subject('Message from site');
     });

     back()->with('message_1', 'Ваш вопрос отправлен куратору конкурса и в ближайшее время мы свяжемся с вами, чтобы ответить на него!');
     return redirect('/')->with('message', 'СПАСИБО ЗА ВАШУ АКТИВНОСТЬ И ИНТЕРЕС К КОНКУРСУ!');
    }
}
