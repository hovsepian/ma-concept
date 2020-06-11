<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class Dataprotection extends Controller
{
    public function index () {
        $page = Page::where('id', 1)->get();
        return view('data', [
            'page_content' => $page
        ]);
    }
}
