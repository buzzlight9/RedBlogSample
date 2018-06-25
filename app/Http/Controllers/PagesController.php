<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'RED BLOG';
        $subTitle = 'Get Started';
        return view('pages.index', compact('title', 'subTitle'));
        //return view('pages.index')->with('title', $title );
        
    }
    public function blog()
    {
        $blog = 'BLOG';
        return view('pages.blog')->with('blog', $blog);
    }
    public function contact()
    {
        $title = 'CONTACT US';
        $subTitle = 'Fill The Form Below';
        return view('pages.contact', compact('title', 'subTitle'));
        //return view('pages.contact')->with('title', $title);
    }
    public function postContact(Request $request)
    {
        $this->validate($request, 
        ['name' => 'required',
         'surname' => 'required',
         'email' => 'required|email',
         'phone' => 'required',
         'subject' => 'required|min:3',
         'message' => 'required|min:10'
        ]);
        
        $data = array
        (
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('email.contact', $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('red.blog.cf@gmail.com');
            $message->subject($data['subject']);

            
        });
        return redirect('/contact')->with('success', 'Message Sent');
    }
}
