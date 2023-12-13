<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return Inertia::render('Website/Index');
    }

    public function about()
    {
        return Inertia::render('Website/About');
    }
}
