<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Schedule;
use App\Models\Speaker;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        if (request()->input('page') == '') {
            $data = [
                'callofpaper' => Link::where('type', '1')->where('status', '1')->orderBy('lft', 'asc')->get(),
                'schedules' => Schedule::where('status', '1')->orderBy('lft', 'asc')->get(),
                'opening' => Speaker::where('active', '1')->where('type', '1')->orderBy('lft', 'asc')->get(),
                'speakers' => Speaker::where('active', '1')->where('type', '2')->orderBy('lft', 'asc')->get(),
            ];

            return view('landing.pages.main', $data);
        }
    }
}
