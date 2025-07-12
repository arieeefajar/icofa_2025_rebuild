<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        if (request()->input('page') == '') {
            $data = [
                'callforpaper' => Link::where('type', '1')->where('status', '1')->orderBy('lft', 'asc')->get(),
            ];

            return view('landing.pages.main', $data);
        }
    }
}
