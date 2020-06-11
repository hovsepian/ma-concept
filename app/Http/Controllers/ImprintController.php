<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class ImprintController extends Controller
{
    public function index () {
        $content = Page::where('id', 2)->get();
        return view('imprint', [
            'page_content' => $content
        ]);
    }
}
