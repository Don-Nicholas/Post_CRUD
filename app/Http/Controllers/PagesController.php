<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index() {
        $title = 'Welcome to Laravel';

        return view('pages.index')->with('title', $title);
    }

    function about() {
        $title = 'About-Us';

        return view('pages.about')->with('title', $title);
    }

    function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Designing', 'Programming', 'SEO']
        );

        return view('pages.services')->with($data);
    }
}
