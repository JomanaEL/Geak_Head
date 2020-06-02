<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
        public function about() { 
            return view ('pages.about');
        }
        public function login() { 
            return view ('pages.login');
        }
        public function register() { 
            return view ('pages.register');
        }
        public function home() { 
            return view ('pages.home');
        }
        public function posts() { 
            return view ('posts.index');
        }
        public function edit_post() { 
            return view ('pages.edit_post');
        }
}
