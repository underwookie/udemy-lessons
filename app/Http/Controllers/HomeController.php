<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {

        // Auth::id();
        return view('home');
    }

    public function contact() {
        return view('contact');
    }

    public function blogPost($id, $welcome = 1) {
        $pages = [
            1 => [
                'title' => 'from page 1',
            ],
            2 => [
                'title' => 'from page 2',
            ],
        ];
        $welcomes = [1 => 'Hello', 2=> 'Welcome to '];
        return view('blog-post', [
            'data' => $pages[$id],
            'welcome' => $welcomes[$welcome],
        ]);
    }
}
