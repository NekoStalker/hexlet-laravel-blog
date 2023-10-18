<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        $tags = ['обучение', 'программирование', 'php', 'oop выше гор'];
        return view('page.about', ['tags' => $tags]);
    }
}
