<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::where('status', 'active')->latest('id')->first();
        $about = About::where('status', 'active')->latest('id')->first();

        return view('frontend.index', compact('banner','about'));
    }
}
