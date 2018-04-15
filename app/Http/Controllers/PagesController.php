<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'RED BLOG';
        return view('pages.index')->with('title', $title);
        
    }
    public function about()
    {
        $about = 'OUR MISSION';
        return view('pages.about')->with('about', $about);
    }
    public function services()
    {
        $data = array
        (
            'title' => ['WEB DESIGN','WEB DEVELOPMENT','RESPONSIVE DESIGN','OUR SERVICES'],
            'services' => 
            [
                'Here at Fiji Web Solution, we strategically design your website with the future in mind. 
                We use some of the latest modern technologies to bring your ideas to life. 
                Modern...Flexible and User Friendly design to give your website an edge to compete in these digital revolution. 
                Your input on how your website is to be design, is critical to our Planning Process.',
                'From Researching...Planning and pushing towards  the Deloyment/Launch of your new website. 
                We liase with you throughout the Development Process. 
                From Static Single Page websites, E-Commerce websites and Content Management Systems or CMS. 
                A principle benefit of a CMS is that it allows you to make changes without having technical knowledge.',
                'Today, many people access websites from mobile devices, rather than desktop computers or laptops. 
                While most smartphones can display regular websites, the content is difficult to read and even harder to navigate. 
                Therefore, at Fiji Web Solution we use responsive web design to provide a better web browsing experience on your website.'
            ]
        );
        return view('pages.services')->with($data);
    }
    public function blog()
    {
        $blog = 'BLOG';
        return view('pages.blog')->with('blog', $blog);
    }
    public function contact()
    {
        $contact = 'CONTACT US';
        return view('pages.contact')->with('contact', $contact);
    }
}
