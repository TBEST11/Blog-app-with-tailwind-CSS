<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class Pagescontroller extends Controller
{
    public function index()
    {
        return View('index');
    }
}
